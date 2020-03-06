<?php

namespace App\Handler\Factory;

use App\Handler\AboutPageHandler;
use App\Service\AboutPageService;
use Psr\Container\ContainerInterface;

class AboutPageHandlerFactory
{
    public function __invoke(ContainerInterface $container): AboutPageHandler
    {
        // TODO: Implement __invoke() method.
        return new AboutPageHandler(
            $container->get(AboutPageService::class)
        );
    }
}