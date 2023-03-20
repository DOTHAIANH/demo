<?php

    $except = ['show'];
    return [
        'post' => [
            'name'      => 'post',
            'except'    => $except,
            'multi_del' => true,
            'get_slug'  => true
        ],

        'number' => [
            'name'      => 'number',
            'except'    => $except,
            'multi_del' => true,
            'get_slug'  => false
        ],

        'role' => [
            'name'      => 'role',
            'except'    => $except,
            'multi_del' => true,
            'get_slug'  => false
        ],

        'daily' => [
            'name'      => 'daily',
            'except'    => $except,
            'multi_del' => true,
            'get_slug'  => false
        ],
    ];