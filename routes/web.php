<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "hai";
});

Route::get('/test_2', function () {
    return view('page_1');
});