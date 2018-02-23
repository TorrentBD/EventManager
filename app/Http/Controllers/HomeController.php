<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Event;
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
            $post->edate = $request->edate;
            $post->save();

        return redirect('/about');
    }


     
}
