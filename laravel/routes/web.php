<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::middleware(['guest'])->group(function () {
    Route::get('auth/login', [AuthController::class,'loginShow'])->name('loginshow');
    Route::post('auth/login', [AuthController::class,'loginAdmin'])->name('loginadmin');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('courses', CourseController::class);
    Route::post('auth/logout', [AuthController::class,'logout'])->name('logout');

    Route::get('orders', [CourseController::class, 'order'])->name('orders');
    Route::get('certificate', [CourseController::class, 'certificate'])->name('certificate');
    
    Route::prefix('courses/{course}')->group(function () {
    Route::resource('lessons', LessonController::class)->except('index', 'show');
});
});