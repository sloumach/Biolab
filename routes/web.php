<?php

use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ComplaintController as AdminComplaintController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/appointment', 'appointment')->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])
    ->middleware('throttle:appointments')
    ->name('appointment.store');
Route::post('/reclamations', [ComplaintController::class, 'store'])
    ->middleware('throttle:complaints')
    ->name('complaints.store');
Route::view('/about', 'about')->name('about');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blog.single');
Route::get('/blog-single', [BlogController::class, 'latest']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])
            ->middleware('throttle:admin-login')
            ->name('login.store');
    });

    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('home');
        Route::get('/appointments', [AdminAppointmentController::class, 'index'])->name('appointments.index');
        Route::patch('/appointments/{appointment}/status', [AdminAppointmentController::class, 'updateStatus'])
            ->name('appointments.status');
        Route::get('/reclamations', [AdminComplaintController::class, 'index'])->name('complaints.index');
        Route::patch('/reclamations/{complaint}/status', [AdminComplaintController::class, 'updateStatus'])
            ->name('complaints.status');
        Route::get('/blogs', [AdminBlogController::class, 'index'])->name('blogs.index');
        Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('blogs.create');
        Route::post('/blogs', [AdminBlogController::class, 'store'])->name('blogs.store');
        Route::get('/blogs/{blog}/edit', [AdminBlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/blogs/{blog}', [AdminBlogController::class, 'update'])->name('blogs.update');
        Route::delete('/blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('blogs.destroy');
    });
});
