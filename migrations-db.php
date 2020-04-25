<?php

$container = require 'config/container.php';
/** @var \Config\Database\DbConfig $dbConfig */
$dbConfig = $container->get(\Config\Database\DbConfig::class);

return [
    'dbname' => $dbConfig->getName(),
    'user' => $dbConfig->getUser(),
    'password' => $dbConfig->getPassword(),
    'host' => $dbConfig->getHost(),
    'driver' => $dbConfig->getDriver(),
];
