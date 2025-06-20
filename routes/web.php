<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.index');
});
Route::resource('users', UserController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('performances', PerformanceController::class);
