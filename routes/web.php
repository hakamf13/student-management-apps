<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Richard Towa';
    $age = 17;
    return view('about', ['name' => $name, 'age' => $age]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/student', [StudentController::class, 'index']);

Route::get('/student/{id}', [StudentController::class, 'show']);
