<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Addstudent(){
        return view('welcome');
    }
    public function save(Request $request){

        Student::create([
            'student_name'=>$request->student_name,
            'student_email'=>$request->student_email,
            'student_dob'=>$request->student_dob

        ]);
        $notification =[
            "message"=>"student has been added"
        ];
        // return redirect()->back()->with($notification);
        return view('index');
    }
}
