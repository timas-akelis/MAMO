<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/lesson', function () {
    return view('lesson');
})->middleware(['auth', 'verified'])->name('lesson');

Route::resource('lesson', '\App\Http\Controllers\LessonController');
Route::resource('module', '\App\Http\Controllers\ModuleController');
Route::resource('group', '\App\Http\Controllers\GroupController');
Route::resource('room', '\App\Http\Controllers\RoomController');
Route::resource('grade', '\App\Http\Controllers\GradeController');
Route::resource('school', '\App\Http\Controllers\SchoolController');
Route::resource('timetable', '\App\Http\Controllers\TimetableController');
Route::resource('rule', '\App\Http\Controllers\RuleController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
