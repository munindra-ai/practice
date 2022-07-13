<?php
return [
    /*
    * The roles required by the application
    */
    'role_group' => [
        'super-admin',
        'admin',
        'customer',
    ],

    /*
    *  Default users which will be seeded
    */
    'users' => [
        [
            'firstname' => 'saugat pandey',
            'email' => 'saugat@gmail.com',
            'password' => 'password',
            'roles' => ['super-admin']
        ],
        [
            'firstname' => 'Admin',
            'email' => 'admin@makalu.com',
            'password' => 'password',
            'roles' => ['admin']
        ],
        [
            'firstname' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password',
            'roles' => ['customer']
        ]
    ],

    /*
    * List of permissions to be register
    */
    'permissions' => [
        'view user',
        'create user',
        'update user',
        'destroy user',
    ]
];
