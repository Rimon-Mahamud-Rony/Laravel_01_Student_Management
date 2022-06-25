<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student; 

class StudentController extends Controller
{
    //

    public function index()
    {
        $ct_students = Student::all();

        return view('index')->with('access_as_student', $ct_students);

    }
}
