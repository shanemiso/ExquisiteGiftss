<?php

use App\Http\Controllers\user\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cart', [CartController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/marketplace', function () {
    return view('marketplace');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/readytoship', function () {
    return view('readytoship');
});
Route::get('/shopnow', function () {
    return view('shopnow');
});
Route::get('/buildbox1', function () {
    return view('buildbox1');
});
Route::get('/buildbox2', function () {
    return view('buildbox2');
});
Route::get('/buildbox3', function () {
    return view('buildbox3');
});
Route::get('/buildbox3_2', function () {
    return view('buildbox3_2');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/coorporate', function () {
    return view('coorporate');
});
