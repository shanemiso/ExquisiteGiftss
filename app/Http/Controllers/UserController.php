<?php

namespace App\Http\Controllers\Auth;

use Auth0\Login\Auth0Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login()
    {
        return app(Auth0Service::class)->login();
    }

    public function callback()
    {
        app(Auth0Service::class)->callback();
        return redirect()->intended('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
