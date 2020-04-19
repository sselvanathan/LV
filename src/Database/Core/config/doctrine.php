<?php

use Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'driver' => [
        'orm_default' => [
            'class' => MappingDriverChain::class,
            'drivers' => [
                'Database\Core\Entity' => 'core_entity',
            ],
        ],
        'core_entity' => [
            'class' => AnnotationDriver::class,
            'cache' => 'array',
            'paths' => [__DIR__ . '../src/Database/Core/Entity'],
        ],
    ],
];
