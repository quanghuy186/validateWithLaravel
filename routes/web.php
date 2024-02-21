<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


Route::get('/register', [RegisterController::class, 'showFormRegister']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');