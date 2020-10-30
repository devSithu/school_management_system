<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard(){
        return view('student.dashboard');
    }

    public function lookTeacher(){
        return view('student.lookTeacher');
    }

    public function studentProfile(){
        return view('student.studentProfile');
    }

    public function lookClass(){
        return view('student.lookClass');
    }

    public function lookRequestCourse(){
        return view('student.lookRequestCourse');
    }

    public function lookNews(){
        return view('student.lookNews');
    }
}
