<?php
$config = [
    'GoogleAuthenticator.login' => false,
    'Users.Social.login' => true,
    'OAuth.providers.facebook.options.clientId' => filter_var(env('USERS_FACEBOOK_CLIENT_ID'), FILTER_SANITIZE_STRING),
    'OAuth.providers.facebook.options.clientSecret' => filter_var(env('USERS_FACEBOOK_CLIENT_SECRET'), FILTER_SANITIZE_STRING),
    'OAuth.providers.twitter.options.clientId' => filter_var(env('USERS_TWITTER_CLIENT_ID'), FILTER_SANITIZE_STRING),
    'OAuth.providers.twitter.options.clientSecret' => filter_var(env('USERS_TWITTER_CLIENT_SECRET'), FILTER_SANITIZE_STRING),
    'OAuth.providers.google.options.clientId' => filter_var(env('USERS_GOOGLE_CLIENT_ID'), FILTER_SANITIZE_STRING),
    'OAuth.providers.google.options.clientSecret'=> filter_var(env('USERS_GOOGLE_CLIENT_SECRET'), FILTER_SANITIZE_STRING),
    //Recaptcha
    'Users.reCaptcha' => [
        // reCaptcha key goes here
        'key' => filter_var(env('USERS_RECAPTCHA_KEY'), FILTER_SANITIZE_STRING),
        // reCaptcha secret
        'secret' => filter_var(env('USERS_RECAPTCHA_SECRET'), FILTER_SANITIZE_STRING),
        // use reCaptcha in registration
        'registration' => false,
        // use reCaptcha in login, valid values are false, true
        'login' => false,
    ],
];

return $config;
