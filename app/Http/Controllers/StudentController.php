<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index',[
            'students' => $students
        ]);
    }
    
    public function addGroup(Request $request)
    {
        return view('students.add_students');
    }
}
