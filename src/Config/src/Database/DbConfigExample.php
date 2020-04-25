<?php

declare(strict_types=1);

namespace Config\Database;

class DbConfigExample
{
    /** rename to DbConfig.php and adjust the constants */

    private const USER = 'root';
    private const PASSWORD = 'mysql';
    private const NAME = 'dbName';
    private const HOST = 'localhost';
    private const DRIVER = 'pdo_mysql';

    public function getUser(): string
    {
        return self::USER;
    }

    public function getPassword(): string
    {
        return self::PASSWORD;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getHost(): string
    {
        return self::HOST;
    }

    public function getDriver(): string
    {
        return self::DRIVER;
    }
}
