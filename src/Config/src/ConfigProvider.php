<?php

declare(strict_types=1);

namespace Config;

class ConfigProvider
{

    public function __invoke(): array
    {
        return [
            'dependencies' => require __DIR__ . '/../config/service_manager.php',
        ];
    }
}
