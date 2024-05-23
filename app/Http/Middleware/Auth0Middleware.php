<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth0\SDK\Auth0;

class Auth0Middleware
{
    public function handle(Request $request, Closure $next)
    {
        $auth0 = new Auth0([
            'domain' => config('auth0.domain'),
            'clientId' => config('auth0.client_id'),
            'clientSecret' => config('auth0.client_secret'),
            'redirectUri' => config('auth0.redirect_uri'),
            'cookieSecret' => config('auth0.cookie_secret'),
        ]);

        $userInfo = $auth0->getUser();

        if (!$userInfo) {
            return redirect()->route('login');
        }

        $request->attributes->set('user', $userInfo);
        
        return $next($request);
    }
}
