<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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
        'client_id' => '1883450525313194',
        'client_secret' => '8424a14c50358047a4b03c02c58c2392',
        'redirect' => 'http://vibbra.local/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '0rYHWHLyq9vZ63DS2B30HbstO',
        'client_secret' => 'yMrtS8VVk9AAWEx4SzVpbCikTdNNJphAwcaWG1UTkeT5nr7ovJ',
        'redirect' => 'http://vibbra.local/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '1043295361189-1lpvncp6pqp7gv6pvvohvle3s763oopu.apps.googleusercontent.com',
        'client_secret' => 'RD-7H03g3AYTbPNpCKP4teEJ',
        /* 'redirect' => 'http://127.0.0.1/vibbra/public/auth/google/callback',*/
        'redirect' => 'http://127.0.0.1/vibbra/public/',
    ],


];
