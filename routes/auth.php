<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm']);

Route::post('/login', [AuthController::class, 'login'])->name('login');
