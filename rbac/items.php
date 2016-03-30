<?php
return [
    'create' => [
        'type' => 2,
    ],
    'update' => [
        'type' => 2,
    ],
    'view' => [
        'type' => 2,
    ],
    'delete' => [
        'type' => 2,
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'create',
            'update',
            'view',
            'delete',
        ],
    ],
];
