<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Student;
use App\Event;

class StudentController extends Controller
{
    public function create(Request $request)
    {
    	$validator = Validator::make($request->all(), [
           'name' => 'required|string|max:30',
            'roll' => 'required|string|max:10|unique:students',
            'fname' => 'required|string|max:30',
            'bdate' => 'required|string|max:30',
            'email' => 'required|string|email|max:30|unique:students',
            'phone' => 'required|max:11|min:11',
            'aca' => 'required|max:50',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input=$request->all();

        $input['token']=rand(11111111,99999999);


        Student::create($input);

        Mail::to($input['email'])->send(new WelcomeMail($input));

 
        return redirect('/')->with('message', 'Successfully Registered !');
    }


    public function about()
    {
        $about = Event::all(); 
        return view('users.about')->with('tasks',$about);
    }




}
