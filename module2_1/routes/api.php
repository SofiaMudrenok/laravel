<?php

use App\Http\Controllers\API\ManufacturerController;
use App\Http\Controllers\API\AuthController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\StudentController;



Route::middleware('auth:api')->group(function () {
    Route::get('/students', [StudentController::class, 'index']);
});

Route::middleware('auth:api', 'role:administrator,editor')->group(function () {
    Route::get('/students/{id}', [StudentController::class, 'getById']);
});


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:api')->group(function () {
});

Route::middleware(['auth:api', 'auth.role:admin,editor'])->group(function () {
});
Route::middleware('auth:api')->group(function () {
    Route::get('students', [StudentController::class, 'index']);
    Route::get('students/by-id', [StudentController::class, 'getById'])
        ->middleware('auth.role:admin,editor');
});
