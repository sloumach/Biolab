<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/appointment', 'appointment')->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])
    ->middleware('throttle:appointments')
    ->name('appointment.store');
Route::view('/about', 'about')->name('about');
