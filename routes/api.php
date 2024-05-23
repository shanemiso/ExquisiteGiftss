<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\user\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/callback', [AuthController::class, 'callback'])->name('auth0-callback');

Route::get('/cart', [CartController::class, 'index']);


