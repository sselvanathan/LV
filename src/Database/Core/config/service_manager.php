<?php

use ContainerInteropDoctrine\EntityManagerFactory;
use Doctrine\ORM\EntityManager;

return [
    'factories' => [
        EntityManager::class => EntityManagerFactory::class
    ]
];
