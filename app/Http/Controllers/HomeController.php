<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

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
        $users = Student::paginate(5);
        
        return view('admins.home')->with('tasks',$users);
    }

    public function delete($id)
    {
        $task = Student::findOrFail($id);

        $task->delete();
        return redirect('/home');
    }

     
}
