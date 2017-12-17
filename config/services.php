<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1742215972475592',         // Your facebook Client ID
        'client_secret' => '4095b6cd88524c47ccc978d7626aa42b', // Your facebook Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'C3YFkxrCpgVkI3H0dkQgiHjYx',         // Your facebook Client ID
        'client_secret' => 'RMivKAp1p5zoY8w8HPkSsCAsZ1HchS0jSIGILilTnc1jthgid9', // Your facebook Client Secret
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],

//    'vkontakte' => [
//        'client_id' => env('VKONTAKTE_KEY'),
//        'client_secret' => env('VKONTAKTE_SECRET'),
//        'redirect' => env('VKONTAKTE_REDIRECT_URI'),
//    ],

];
