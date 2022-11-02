<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '874927845773-p7bka8ljemilu2q7q68in8gncm06t6kf.apps.googleusercontent.com',
        'client_secret' => 'TRT84XyLXY0d6uurYhvzDUSm',
        'redirect' => 'https://www.answerout.com/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '915550249016502',
        'client_secret' => 'ea27bc82b23b1685e380a3199a174cf3',
        'redirect' => 'https://www.answerout.com/auth/facebook/callback',
    ],
    'recaptcha' => [
    'key' => '6Lfn80ocAAAAAKp4FzKmsne0b2s0b5VMdrI3bcaL',
    'secret' => '6Lfn80ocAAAAABOaVarJnYlkPKFHrrw0gdLwzLbi',
    ],
];
