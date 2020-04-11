<?php


namespace App\UseCase\Factory;


use App\Service\ToDoService;
use App\UseCase\GetToDoModelCollectionUseCase;
use Psr\Container\ContainerInterface;

class GetToDoModelCollectionUseCaseFactory
{

    public function __invoke(ContainerInterface $container): GetToDoModelCollectionUseCase
    {
        return new GetToDoModelCollectionUseCase($container->get(ToDoService::class));
    }
}
