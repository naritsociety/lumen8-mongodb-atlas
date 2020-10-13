<?php
    return [
        'default' => 'mongodb',
        'connections' => [
            'mongodb' => [
            'driver' => 'mongodb',
            'dsn' => env('DB_DSN','mongodb+srv://narit:firehawk@reportingdata.8403v.gcp.mongodb.net/lumen_with_mongo?retryWrites=true&w=majority'),
            ],
        ],
        'migrations' => 'migrations',
    ];
