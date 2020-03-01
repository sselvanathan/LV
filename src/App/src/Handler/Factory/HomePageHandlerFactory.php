<?php

namespace App\Handler\Factory;

use App\Handler\HomePageHandler;
use App\Service\HomePageService;
use Psr\Container\ContainerInterface;

class HomePageHandlerFactory
{
    public function __invoke(ContainerInterface $container): HomePageHandler
    {
        // TODO: Implement __invoke() method.
        return new HomePageHandler(
            $container->get(HomePageService::class)
        );
    }
}