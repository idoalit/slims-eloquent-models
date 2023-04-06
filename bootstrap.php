<?php

use Illuminate\Database\Capsule\Manager;

// create new instance of capsule manager
$manager = new Manager();

// add SLiMS default connection
$config = config('database.nodes.SLiMS');
$manager->addConnection([
    "driver" => 'mysql',
    "host" => $config['host'],
    "port" => $config['port'],
    "database" => $config['database'],
    "username" => $config['username'],
    "password" => $config['password']
]);

// set connection as global
$manager->setAsGlobal();
$manager->bootEloquent();
