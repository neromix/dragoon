<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', function() {
    return view('admin/pages/login');
});

Route::get('/admin/dashboard', function() {
    return view('admin/pages/dashboard');
});