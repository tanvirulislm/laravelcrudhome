<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('index', ['students' => Student::all()]);
});

Route::get('/add_student', [StudentController::class,'add_student']);
Route::get('/profile', [StudentController::class,'profile']);
Route::post('/store', [FormController::class, 'store'])->name('submit_form');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [StudentController::class, 'delete']);
