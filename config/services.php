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

    //FACEBOOK pas de changements ici, sinon que en .env
    'facebook' => [
        'client_id' => ('258922505929452'),
        'client_secret' => ('a458ca541ad440b522453536c477b256'),
        'redirect' => env('http://localhost:8000/auth/facebook/callback'),
    ],

    //GOOGLE
    'google' => [
        'client_id' => '698018411381-bfjls2rps0t1eaarrgolkel0fouquahd.apps.googleusercontent.com',
        'client_secret' => '0PmJRFtQXVLQqzHOHi7CNwUE',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    //GITHUB
    'github' => [
        'client_id' => 'f4b5c923f13778fcbdad',
        'client_secret' => '04c91f86aed4f3dd4e30e80610894b23d55e51fe',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],


    //TWITTER
    'twitter' => [
        'client_id' => '78um5gkt',
        'client_secret' => 'jTmV01E8xtwC',
        'redirect' => 'http://localhost:8000/auth/liedin/callback',
    ],

    //LINKEDIN
    'linkedin' => [
        'client_id' => '78um5fihv96gkt',
        'client_secret' => 'jTmV01E8xtJHTBwC',
        'redirect' => 'http://localhost:8000/auth/linkedin/callback',
    ],

    //GITLAB
    'gitlab' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_CLIENT_CALLBACK'),
    ],

    //BITBUCKET
    'bitbucket' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_CLIENT_CALLBACK'),
    ],












];
