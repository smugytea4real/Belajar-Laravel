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
Route::get('/student-detail/{id}', ([StudentController::class, 'show']));
Route::get('/student-add', ([StudentController::class, 'create']));
Route::post('/student', ([StudentController::class, 'store']));
Route::get('/student-edit/{id}', ([StudentController::class, 'edit']));
Route::put('/student/{id}', ([StudentController::class, 'update']));
Route::get('/student-delete/{id}', ([StudentController::class, 'delete']));
Route::delete('/student-destroy/{id}', ([StudentController::class, 'destroy']));
Route::get('/student-deleted', ([StudentController::class, 'deletedStudent']));
Route::get('/student/{id}/restore', ([StudentController::class, 'restore']));

Route::get('/classroom', ([ClassController::class, 'index']));
Route::get('/classroom-detail/{id}', ([ClassController::class, 'show']));
Route::get('/classroom-add', ([ClassController::class, 'create']));
Route::post('/classroom', ([ClassController::class, 'store']));
Route::get('/classroom-edit/{id}', ([ClassController::class, 'edit']));
Route::put('/classroom/{id}', ([ClassController::class, 'update']));

Route::get('/extracurricular', ([ExtracurricularController::class, 'index']));
Route::get('/extracurricular-detail/{id}', ([ExtracurricularController::class, 'show']));
Route::get('/extracurricular-add', ([ExtracurricularController::class, 'create']));
Route::post('/extracurricular', ([ExtracurricularController::class, 'store']));
Route::get('/extracurricular-edit/{id}', ([ExtracurricularController::class, 'edit']));
Route::put('/extracurricular/{id}', ([ExtracurricularController::class, 'update']));

Route::get('/teacher', ([TeacherController::class, 'index']));
Route::get('/teacher-detail/{id}', ([TeacherController::class, 'show']));
Route::get('/teacher-add', ([TeacherController::class, 'create']));
Route::post('/teacher', ([TeacherController::class, 'store']));
Route::get('/teacher-edit/{id}', ([TeacherController::class, 'edit']));
Route::put('/teacher/{id}', ([TeacherController::class, 'update']));


