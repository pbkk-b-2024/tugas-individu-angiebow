<?php

use Illuminate\Support\Facades\Route;

// Basic Routing
Route::get('/basic', function () {
    return view('basic');
})->name('basic');

// Route Parameters
Route::get('/parameters/{id}', function ($id) {
    return view('parameters', ['id' => $id]);
})->name('parameters');

// Named Routes
Route::get('/named', function () {
    return view('named');
})->name('named');

// Route Groups
Route::prefix('group')->group(function () {
    Route::get('/', function () {
        return view('group.index');
    })->name('group.index');
    Route::get('/about', function () {
        return view('group.about');
    })->name('group.about');
});

// Fallback Routes
Route::fallback(function () {
    return view('fallback');
})->name('fallback');

use App\Http\Controllers\MathController;

Route::get('/evenodd', [MathController::class, 'showEvenOdd'])->name('evenodd');
Route::post('/evenodd', [MathController::class, 'calculateEvenOdd']);

Route::get('/fibonacci', [MathController::class, 'showFibonacci'])->name('fibonacci');
Route::post('/fibonacci', [MathController::class, 'calculateFibonacci']);

Route::get('/prime', [MathController::class, 'showPrime'])->name('prime');
Route::post('/prime', [MathController::class, 'calculatePrime']);