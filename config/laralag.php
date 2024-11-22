<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'permissions' => [
        'ignored_routes' => [
            'front.index',
            'landing.index'
        ],
    ],
    // 'home_route' => 'board.index',
    // 'home_route' => 'dashboard',
    'landing_route' => 'home2.index',
    'has_landing' => false,
    'dashboard_blade' => '',
    'custom_login_blade' => 'custom_login',
    'custom_register_blade' => 'custom_register',
];
