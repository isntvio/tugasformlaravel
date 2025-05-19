<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
