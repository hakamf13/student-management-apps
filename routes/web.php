<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ryedev/about', function () {
    $name = 'Richard Towa';
    $age = 17;
    return view('about', ['name' => $name, 'age' => $age]);
})->name('about');

Route::get('/rye/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/student', [StudentController::class, 'index'])->name('siswa.index');

Route::get('/student/{id}', [StudentController::class, 'show'])->name('siswa.show');
