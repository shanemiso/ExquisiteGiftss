<?php
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/callback', [UserController::class, 'callback'])->name('auth0-callback');

Route::get('/cart', [CartController::class, 'index']);


