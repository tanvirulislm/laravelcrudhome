<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function add_student(){
        return view("add");
    }

    function profile(){
        return view("profile");
    }

    function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/')->with('success', 'Student deleted successfully');
    }

   
}
