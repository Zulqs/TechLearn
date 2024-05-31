<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/course', function () {
    return view('course');
})->middleware(['auth', 'verified'])->name('course');

Route::get('/course/html', function () {
    return view('course.html.index');
})->middleware(['auth', 'verified'])->name('course.html.index');
Route::get('/course/html/1', function () {
    return view('course.html.1');
})->middleware(['auth', 'verified'])->name('course.html.1');
Route::get('/course/html/exam', function () {
    return view('course.html.exam');
})->middleware(['auth', 'verified'])->name('course.html.exam');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

});

require __DIR__.'/auth.php';
