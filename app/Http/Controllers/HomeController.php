<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Event;
use App\Fqa;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        return view('admins.dashboard');
    }

    public function candidate(Request $request)
    {
        $users = Student::paginate(5);
        
        return view('admins.candidate')->with('tasks',$users);
    }


    public function delete($id)
    {
        $task = Event::findOrFail($id);

        $task->delete();
        return redirect('/home');
    }


    public function about()
    {
        $event = Event::paginate(5);
        
        return view('admins.event')->with('tasks',$event);
    }

    public function addevent()
    {
        return view('admins.events.index');
    }

    public function e_create(Request $request)
    {
            $post = new Event();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->sdate = $request->sdate;
            $post->edate = $request->edate;
            $post->user_id = $request->user()->id;
            $post->save();

        return redirect('/about');
    }

    public function edit($id)
    {
        $post= Event::findOrFail($id);

        return view('admins.events.update')->with('tasks',$post);
    }

    public function update($id, Request $request)
    {
        $task = Event::findOrFail($id);
         
        $input = $request->all();

        $task->fill($input)->save();         

        return redirect('/about');
    }

    public function fqa()
    {
        $fqa = Fqa::paginate(5);
             
         return view('admins.events.fqa')->with('tasks',$fqa);;
    }

    public function create_fqa()
    {
        $event = Event::all();

         return view('admins.events.create_fqa')->with('tasks',$event);
    }

    public function fqaadd(Request $request)
    {
        $fqa = new Fqa();

        $fqa->event = $request->cars;
        $fqa->fqa = $request->fqa;
        $fqa->user_id = $request->user()->id;
        $fqa->save();

        return redirect('/fqa');
    }

     
}
