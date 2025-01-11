<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class FormController extends Controller
{
    function store(Request $request){


        $validated = $request->validate([
            'name' => 'required',
            'class_name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required',
            'address' => 'required',
        ],
        [
            // Custom Message for All Fields
            'required' => 'Please fill in all required fields.',
        ]);

        Student::create([
            'name' => $request->name,
            'class_name' => $request->class_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $request->image
        ]);
        return redirect('/add_student')->with('success', 'Student added successfully');

    }
}
