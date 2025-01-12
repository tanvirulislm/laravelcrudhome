<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    $students = Student::all();
    $totalUsers = $students->count();
    return view('index', ['students' => $students, 'totalUsers' => $totalUsers]);
});

Route::get('/add_student', [StudentController::class,'add_student']);
Route::get('/profile', [StudentController::class,'profile']);
Route::post('/store', [FormController::class, 'store'])->name('submit_form');
Route::get('/edit/{id}', [FormController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [FormController::class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
