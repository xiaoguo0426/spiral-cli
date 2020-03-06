<?php

use Spiral\Database\Driver;

return [
    'default' => 'default',
    'databases' => [
        'default' => ['driver' => 'mysql'],
    ],
    'drivers' => [
        'runtime' => [
            'driver' => Driver\SQLite\SQLiteDriver::class,
            'connection' => 'sqlite:' . directory('runtime') . 'runtime.db',
            'profiling' => true,
        ],
        'mysql' => [
            'driver' => Driver\MySQL\MySQLDriver::class,
            'connection' => 'mysql:host=localhost;dbname=dev;charset=utf8mb4',
            'username' => 'dev',
            'password' => 'dev',
        ]
    ]
];