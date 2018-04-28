<?php

$active_group = 'default';
$query_builder = true;

$db['default'] = [
    'dsn'   => 'mysql:Host=localhost;dbname=scs_event',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'scs_event',
    'dbdriver' => 'pdo',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => (ENVIRONMENT == 'production'),
    'cachedir' => APPPATH."cache/database/",
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true
];
