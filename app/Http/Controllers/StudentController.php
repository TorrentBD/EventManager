<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentController extends Controller
{
    public function create(Request $request)
    {
    	$input=$request->all();

        $this->validate($request,[
        'name' => 'required|string|max:30',
        'roll' => 'required|string|max:10|unique:students',
        'fname' => 'required|string|max:30',
        'bdate' => 'required|string|max:30',
        'email' => 'required|string|email|max:30|unique:students',
        'phone' => 'required|max:11|min:11',
        'aca' => 'required|max:100',
        ]);

        $input['token']=rand(11111111,99999999);


        Student::create($input);

        //return view('home');

        Mail::to($input['email'])->send(new WelcomeMail($input));
 
        return redirect('/');
    }
}
