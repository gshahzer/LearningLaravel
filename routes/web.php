<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return "about";
});
Route::get('/contact', function () {
    return "contact";
});
