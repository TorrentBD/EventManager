<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
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

     protected $r1 = 'admin/about';
     protected $r2 = 'admin/fqa';  

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

    public function deletecand($id)
    {
        $task = Student::findOrFail($id);

        $task->delete();
        return redirect('admin/candidate');
    }


    //Event...........
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
        $validator = Validator::make($request->all(), [
           'title' => 'required|string|max:50',
           'content' => 'required|string|max:500',
           'sdate' => 'required',
           'edate' => 'required|after:sdate',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $post = new Event();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->sdate = $request->sdate;
            $post->edate = $request->edate;
            $post->user_id = $request->user()->id;
            $post->save();

            Session::flash('event_m', 'Successfully Added.....!');

        return redirect('admin/about');
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

        Session::flash('flash_message', 'Successfully updated!');  

        return redirect('admin/about');
    }

    public function delete($id)
    {
        $task = Event::findOrFail($id);

        $task->delete();
        return redirect('admin/about');
    }

    //fqa.........
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

        $validator = Validator::make($request->all(), [
            'fqa' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $fqa = new Fqa();

        $fqa->event = $request->cars;
        $fqa->fqa = $request->fqa;
        $fqa->user_id = $request->user()->id;
        $fqa->save();

        return redirect('admin/fqa');
    }

    public function deletefqa($id)
    {
        $task = Fqa::findOrFail($id);

        $task->delete();
        return redirect('admin/fqa');
    }

     
}
