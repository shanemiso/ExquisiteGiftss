<?php

return [
    'domain' => env('AUTH0_DOMAIN'),
    'client_id' => env('AUTH0_CLIENT_ID'),
    'client_secret' => env('AUTH0_CLIENT_SECRET'),
    'redirect_uri' => env('AUTH0_REDIRECT_URI'),
    'audience' => env('AUTH0_AUDIENCE'),
    'logout_redirect_uri' => env('AUTH0_LOGOUT_REDIRECT_URI'),
    'cookie_secret' => env('AUTH0_COOKIE_SECRET'),
];
