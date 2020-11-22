<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

$url = getenv('JAWSDB_MARIA_URL');

$dbparts = parse_url($url);

return [
  '*' => [
    'server' => $dbparts['host'],
    'user' => $dbparts['user'],
    'password' => $dbparts['pass'],
    'database' => ltrim($dbparts['path'],'/'),
    'tablePrefix' => 'craft',
    'port' => $dbparts['port'],
  ],
  'dev' => [
    'driver' => getenv('DB_DRIVER'),
    'server' => getenv('DB_SERVER'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'database' => getenv('DB_DATABASE'),
    'schema' => getenv('DB_SCHEMA'),
    'tablePrefix' => getenv('DB_TABLE_PREFIX'),
    'port' => getenv('DB_PORT')
  ]
];