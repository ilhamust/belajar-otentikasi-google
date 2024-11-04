<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/google/redirect', [HomeController::class, 'redirect'])->name('google.redirect');
Route::get('/google/callback', [HomeController::class, 'callback'])->name('google.callback');
Route::get('/landing', [HomeController::class, 'landing'])->name('home.landing');
