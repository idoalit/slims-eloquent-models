<?php

use Illuminate\Database\Capsule\Manager;

// create new instance of capsule manager
$manager = new Manager();

// add SLiMS default connection
$manager->addConnection([
    "driver" => defined('DB_DRIVER') ? DB_DRIVER : 'mysql',
    "host" => DB_HOST,
    "port" => DB_PORT,
    "database" => DB_NAME,
    "username" => DB_USERNAME,
    "password" => DB_PASSWORD
]);

// set connection as global
$manager->setAsGlobal();
$manager->bootEloquent();
