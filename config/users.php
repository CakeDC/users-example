<?php
$config = [
    'OneTimePasswordAuthenticator.login' => true,
    'Users.Social.login' => true,
    'OAuth.providers.facebook.options.clientId' => filter_var(env('USERS_FACEBOOK_CLIENT_ID'), FILTER_SANITIZE_STRING),
    'OAuth.providers.facebook.options.clientSecret' => filter_var(env('USERS_FACEBOOK_CLIENT_SECRET'), FILTER_SANITIZE_STRING),
    'OAuth.providers.twitter.options.clientId' => filter_var(env('USERS_TWITTER_CLIENT_ID'), FILTER_SANITIZE_STRING),
    'OAuth.providers.twitter.options.clientSecret' => filter_var(env('USERS_TWITTER_CLIENT_SECRET'), FILTER_SANITIZE_STRING)
];

return $config;
