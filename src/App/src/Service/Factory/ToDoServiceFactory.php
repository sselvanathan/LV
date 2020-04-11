<?php


namespace App\Service\Factory;


use App\Repository\ToDoRepository;
use App\Service\ToDoService;
use Psr\Container\ContainerInterface;

class ToDoServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new ToDoService($container->get(ToDoRepository::class));
    }
}
