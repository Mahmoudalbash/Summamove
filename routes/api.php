<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PerformanceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//login
Route::post('login', [AuthController::class, 'login']);


// Public routes (no authentication required)
Route::get('exercises', [ExerciseController::class, 'index']);
Route::get('exercises/{exercise}', [ExerciseController::class, 'show']);


// Protected routes (authentication required)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('exercises', [ExerciseController::class, 'store']);
    Route::put('exercises/{exercise}', [ExerciseController::class, 'update']);
    Route::patch('exercises/{exercise}', [ExerciseController::class, 'update']);
    Route::delete('exercises/{exercise}', [ExerciseController::class, 'destroy']);
   
    Route::apiResource('performances', PerformanceController::class);

    //logout
    Route::post('logout', [AuthController::class, 'logout']);
});