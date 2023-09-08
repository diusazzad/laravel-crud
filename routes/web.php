<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/',[UserController::class, 'index'])->name('dashboard');

Route::resource('/users', UserController::class);
