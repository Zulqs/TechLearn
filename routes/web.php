<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
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
Route::get('/course/html/2', function () {
    return view('course.html.2');
})->middleware(['auth', 'verified'])->name('course.html.2');
Route::get('/course/html/exam', function () {
    return view('course.html.exam');
})->middleware(['auth', 'verified'])->name('course.html.exam');


Route::get('/course/php', function () {
    return view('course.php.index');
})->middleware(['auth', 'verified'])->name('course.php.index');
Route::get('/course/php/1', function () {
    return view('course.php.1');
})->middleware(['auth', 'verified'])->name('course.php.1');
Route::get('/course/php/2', function () {
    return view('course.php.2');
})->middleware(['auth', 'verified'])->name('course.php.2');
Route::get('/course/php/exam', function () {
    return view('course.php.exam');
})->middleware(['auth', 'verified'])->name('course.php.exam');

Route::get('/course/kapasitor', function () {
    return view('course.kapasitor.index');
})->middleware(['auth', 'verified'])->name('course.kapasitor.index');
Route::get('/course/kapasitor/1', function () {
    return view('course.kapasitor.1');
})->middleware(['auth', 'verified'])->name('course.kapasitor.1');
Route::get('/course/kapasitor/2', function () {
    return view('course.kapasitor.2');
})->middleware(['auth', 'verified'])->name('course.kapasitor.2');
Route::get('/course/kapasitor/exam', function () {
    return view('course.kapasitor.exam');
})->middleware(['auth', 'verified'])->name('course.kapasitor.exam');

Route::get('/course/switch', function () {
    return view('course.switch.index');
})->middleware(['auth', 'verified'])->name('course.switch.index');
Route::get('/course/switch/1', function () {
    return view('course.switch.1');
})->middleware(['auth', 'verified'])->name('course.switch.1');
Route::get('/course/switch/2', function () {
    return view('course.switch.2');
})->middleware(['auth', 'verified'])->name('course.switch.2');
Route::get('/course/switch/exam', function () {
    return view('course.switch.exam');
})->middleware(['auth', 'verified'])->name('course.switch.exam');

Route::get('/course/router', function () {
    return view('course.router.index');
})->middleware(['auth', 'verified'])->name('course.router.index');
Route::get('/course/router/1', function () {
    return view('course.router.1');
})->middleware(['auth', 'verified'])->name('course.router.1');
Route::get('/course/router/2', function () {
    return view('course.router.2');
})->middleware(['auth', 'verified'])->name('course.router.2');
Route::get('/course/router/exam', function () {
    return view('course.router.exam');
})->middleware(['auth', 'verified'])->name('course.router.exam');

Route::get('/course/resistor', function () {
    return view('course.resistor.index');
})->middleware(['auth', 'verified'])->name('course.resistor.index');
Route::get('/course/resistor/1', function () {
    return view('course.resistor.1');
})->middleware(['auth', 'verified'])->name('course.resistor.1');
Route::get('/course/resistor/2', function () {
    return view('course.resistor.2');
})->middleware(['auth', 'verified'])->name('course.resistor.2');
Route::get('/course/resistor/exam', function () {
    return view('course.resistor.exam');
})->middleware(['auth', 'verified'])->name('course.resistor.exam');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    
    //Bank Soal CRUD
    Route::get('/banksoal', [QuestionController::class, 'index'])->name('banksoal.index');
    Route::resource('/banksoal', QuestionController::class);

    Route::get('/quiz/{tag}', [QuizController::class, 'showQuiz'])->name('quiz.show');
    Route::post('/quiz/submit', [QuizController::class, 'submitQuiz'])->name('quiz.submit');

    Route::get('/quiz/result/pdf/{tag}', [QuizController::class, 'generatePdf'])->name('quiz.pdf');
});

require __DIR__ . '/auth.php';