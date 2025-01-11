<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('index');
});

Route::get('/add_student', [StudentController::class,'add_student']);
Route::get('/profile', [StudentController::class,'profile']);
Route::post('/store', [FormController::class, 'store'])->name('submit_form');
