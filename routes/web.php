<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/appointment', 'appointment')->name('appointment');
Route::view('/about', 'about')->name('about');
