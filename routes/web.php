<?php

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ExerciseWebController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\PerformanceWebController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', UserController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('exercises', ExerciseWebController::class);
Route::resource('performances', PerformanceController::class);
Route::resource('performances', PerformanceWebController::class);
