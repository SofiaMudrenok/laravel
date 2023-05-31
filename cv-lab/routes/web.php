<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DpsController;
use App\Http\Controllers\AutoController;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/mudrenok/cv', function () {
        return view('cv');
    })->name('cv');

    Route::get('dps/{id}', [DpsController::class, 'show']);

    Route::resource('/auto', AutoController::class)->except(['edit', 'update', 'destroy']);

    Route::middleware(['role:Editor'])->group(function () {
        Route::get('/auto/{auto}/edit', [AutoController::class, 'edit'])->name('auto.edit');
        Route::put('/auto/{auto}', [AutoController::class, 'update'])->name('auto.update');
        Route::delete('/auto/{auto}', [AutoController::class, 'destroy'])->name('auto.destroy');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['role:Editor'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

Route::middleware('auth')->get('/login', function () {
    return redirect()->route('home');
})->name('login');

require __DIR__.'/auth.php';

