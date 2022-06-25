<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student; 

use Session;

class StudentController extends Controller
{
    //

    public function index()
    {
        $ct_students = Student::all();

        return view('index')->with('access_as_student', $ct_students);

    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //dd('submitted');

        //model name= "Student" we are going to make an object of this model as "obj_student"

        // request is coming from the form we have made it in the create page

        $obj_student= new Student;

        $obj_student->name= $request->name;

        $obj_student->department_name= $request->dept_name;

        $obj_student->registration_id= $request->reg_id;

        $obj_student->info= $request->info;

         $obj_student->save();

         //$message="registration completed";

         return redirect()->route('index')->with('message', 'registration completed');
    }
}
