<?php
$config = [
    'Users.controller' => 'Users',
    'OneTimePasswordAuthenticator.login' => true,
    'Users.Social.login' => true,
    'OAuth.providers.facebook.options.clientId' => filter_var(env('USERS_FACEBOOK_CLIENT_ID'), FILTER_SANITIZE_STRING),
    'OAuth.providers.facebook.options.clientSecret' => filter_var(env('USERS_FACEBOOK_CLIENT_SECRET'), FILTER_SANITIZE_STRING),
    'OAuth.providers.twitter.options.clientId' => filter_var(env('USERS_TWITTER_CLIENT_ID'), FILTER_SANITIZE_STRING),
    'OAuth.providers.twitter.options.clientSecret' => filter_var(env('USERS_TWITTER_CLIENT_SECRET'), FILTER_SANITIZE_STRING),
    'OAuth.providers.google.options.clientId' => '838679489626-i2pag4arich2me1k26ughm5cd25pbsef.apps.googleusercontent.com',
    'OAuth.providers.google.options.clientSecret' => 'bFZ0V8R8KYON9EYDRJ_32PlE',
    //Recaptcha
    'Users.reCaptcha' => [
        // reCaptcha key goes here
        'key' => filter_var(env('USERS_RECAPTCHA_KEY'), FILTER_SANITIZE_STRING),
        // reCaptcha secret
        'secret' => filter_var(env('USERS_RECAPTCHA_SECRET'), FILTER_SANITIZE_STRING),
        // use reCaptcha in registration
        'registration' => true,
        // use reCaptcha in login, valid values are false, true
        'login' => true,
    ],
];

return $config;
