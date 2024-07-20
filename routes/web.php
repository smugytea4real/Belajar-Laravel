<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'name' => 'Donny',
        'status' => 'admin',
        'buah' => ['semangka', 'apel', 'jeruk']
    ]);
});

Route::get('/student', ([StudentController::class, 'index']));
Route::get('/class', ([ClassController::class, 'index']));
Route::get('/extracurricular', ([ExtracurricularController::class, 'index']));
Route::get('/teacher', ([TeacherController::class, 'index']));

