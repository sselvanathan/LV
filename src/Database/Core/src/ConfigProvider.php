<?php

declare(strict_types=1);

namespace Database\Core;

class ConfigProvider
{

    public function __invoke(): array
    {
        return [
            'dependencies' => require __DIR__ . '/../config/service_manager.php',
            'doctrine' => require __DIR__ . '/../config/doctrine.php',
        ];
    }
}
