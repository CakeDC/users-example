<?php
$config = [
    'Auth.Identifiers' => [
        'Password' => [
            'className' => 'Authentication.Password',
            'fields' => [
                'username' => ['username', 'email'],
                'password' => 'password'
            ],
            'resolver' => [
                'className' => 'Authentication.Orm',
                'finder' => 'active'
            ],
            'passwordHasher' => [
                'className' => 'Authentication.Fallback',
                'hashers' => [
                    'Authentication.Default',
                    [
                        'className' => 'Authentication.Legacy',
                        'hashType' => 'md5',
                        'salt' => false // turn off default usage of salt
                    ],
                ]
            ]
        ],
    ]
];

return $config;
