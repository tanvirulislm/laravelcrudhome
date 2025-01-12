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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'image' => time().'.'.$request->image->extension()
        ]);
        return redirect('/add_student')->with('success', 'Student added successfully');

    }
    function edit($id){
        $student = Student::findOrFail($id);
        return view("edit", ['student' => $student]);
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'class_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $student = Student::findOrFail($id);

        $student->name = $request->name;
        $student->class_name = $request->class_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $student->image = $imagePath;
        }
        $student->save();

        return redirect('/')->with('success', 'Student updated successfully!');
    }
}
