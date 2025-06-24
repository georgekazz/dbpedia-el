<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/people', function () {
    return view('people');
})->name('people');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/examples', function () {
    return view('examples');
})->name('examples');