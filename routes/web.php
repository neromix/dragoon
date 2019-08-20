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
Route::get('/admin/settings', function() {
    return view('admin/pages/settings');
});
Route::get('/admin/news', function() {
    return view('admin/pages/news');
});