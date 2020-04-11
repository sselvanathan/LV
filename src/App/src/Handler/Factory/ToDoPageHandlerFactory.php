<?php


namespace App\Handler\Factory;


use App\Handler\ToDoPageHandler;
use App\UseCase\GetToDoModelCollectionUseCase;
use Psr\Container\ContainerInterface;

class ToDoPageHandlerFactory
{
    public function __invoke(ContainerInterface $container): ToDoPageHandler
    {
        return new ToDoPageHandler($container->get(GetToDoModelCollectionUseCase::class));
    }
}
