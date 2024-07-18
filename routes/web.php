<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "hai";
});

Route::get('/test_2', function () {
    return view('page_1', ['name' => 'Jono', 'phone' => '08123243456']);
});

Route::redirect('/contact', '/contact-us', 301);

Route::get('/product/{id}', function ($id) {
    return 'Ini adalah Product ke - ' . $id;
});

Route::get('/product_type/{id}', function ($id) {
    return view('product_type', ['id' => $id]);
});

Route::prefix('/admin')->group(function () {
    Route::get('/profile-admin', function () {
        return 'Profile Admin';
    });

    Route::get('/contact-admin', function () {
        return 'Contact Admin';
    });

    Route::get('/about-admin', function () {
        return 'About Admin';
    });

    Route::get('/profile-admin2', function () {
        return 'Profile Admin';
    });
    
    Route::get('/contact-admin2', function () {
        return 'Contact Admin';
    });

    Route::get('/about-admin2', function () {
        return 'About Admin';
    });
});
