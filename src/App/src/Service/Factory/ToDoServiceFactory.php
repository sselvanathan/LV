<?php


namespace App\Service\Factory;


use Database\Core\Repository\ToDoRepository;
use App\Service\ToDoService;
use Psr\Container\ContainerInterface;

class ToDoServiceFactory
{
    public function __invoke(ContainerInterface $container): ToDoService
    {
        return new ToDoService($container->get(ToDoRepository::class));
    }
}
