<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use Auth0\SDK\Auth0;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $auth0;

    public function __construct()
    {
        $this->auth0 = new Auth0([
            'domain' => config('auth0.domain'),
            'clientId' => config('auth0.client_id'),
            'clientSecret' => config('auth0.client_secret'),
            'redirectUri' => config('auth0.redirect_uri'),
            'cookieSecret' => config('auth0.cookie_secret'),
        ]);
    }

    public function login()
    {
        return redirect()->to($this->auth0->login());
    }

    public function callback(Request $request)
    {
        $auth0 = $this->auth0;

        $userInfo = $auth0->getUser();
        $idToken = $auth0->getIdToken();
        $accessToken = $auth0->getAccessToken();

        if (!$userInfo) {
            Log::error('Auth0 user info not found');
            return redirect()->route('login');
        }

        Log::info('Auth0 user info: ', $userInfo);

        // Extract user information from the Auth0 user data
        $email = $userInfo['email'];
        $firstName = $userInfo['given_name'] ?? '';
        $lastName = $userInfo['family_name'] ?? '';
        $phone = $userInfo['phone_number'] ?? '';

        Log::info("Extracted user info: email={$email}, firstName={$firstName}, lastName={$lastName}, phone={$phone}");

        // Find or create the user
        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'phone' => $phone,
                'email_verified_at' => now(),
            ]
        );

        if ($user->wasRecentlyCreated) {
            Log::info('User was created');
        } else {
            Log::info('User was updated');
        }

        // Log the user in using Laravel's Auth system
        Auth::login($user, true);

        Log::info('User logged in', ['user_id' => $user->id]);

        // Return a view with the token
        return view('auth.callback', [
            'idToken' => $idToken,
            'accessToken' => $accessToken,
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->to($this->auth0->logout(config('auth0.logout_redirect_uri')));
    }
}
