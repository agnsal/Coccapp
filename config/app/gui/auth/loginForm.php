<?php

return [
    'schema' => [
        'id' => null,
        'class' => 'm-auto',
        'color' => 'success',
        'style' => '',
        'title' => [
            'label' => 'Login',
            'id' => 'loginID',
            'class' => 'testClass',
            'style' => 'margin-left: 50%; color: orange'
        ],
        'fields' => [
            [
                'name' => 'email',
                'label' => 'E-mail',
                'class' => null,
                'color' => 'orange',
                'initValue' => '',
                'rules' => [
                    [
                        'type' => 'email',
                        'message' => 'E-mail must be valid'
                    ],
                    [
                        'type' => 'required',
                        'message' => 'E-mail is required'
                    ],
                ],
                // rules: [
                //     v => !!v || 'E-mail is required',
                //     v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
                // ],
                'required' => true
            ],
            [
                'name' => 'password',
                'label' => 'Password',
                'class' => null,
                'color' => 'orange',
                'initValue' => '',
                'rules' => [
                    [
                        'type' => 'required',
                        'message' => 'E-mail is required'
                    ]
                ],
                'required' => true
            ]
        ],
        'submitButton' => [
            'label' => 'Submit',
            'class' => 'mr-4',
            'color' => 'success',
            'url' => '/api/auth/login',
            'nextUrl' => 'dashboard',
            'storages' => [
                [
                    'action' => 'auth/setToken',
                    'params' => ['token']
                ]
            ]
        ],
    ]
];
