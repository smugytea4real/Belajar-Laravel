<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/class' , function () {
    return view('class');
});
