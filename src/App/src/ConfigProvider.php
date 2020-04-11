<?php

declare(strict_types=1);

namespace App;


use App\Handler\Factory\ToDoPageHandlerFactory;
use App\Handler\ToDoPageHandler;
use App\Repository\ToDoRepository;
use App\Service\Factory\ToDoServiceFactory;
use App\Service\ToDoService;
use App\UseCase\Factory\GetToDoModelCollectionUseCaseFactory;
use App\UseCase\GetToDoModelCollectionUseCase;
use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     */
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies() : array
    {
        return [
            'factories'  => [
                ToDoPageHandler::class => ToDoPageHandlerFactory::class,
                ToDoRepository::class => InvokableFactory::class, //Konstrukter leer
                ToDoService::class => ToDoServiceFactory::class,
                GetToDoModelCollectionUseCase::class => GetToDoModelCollectionUseCaseFactory::class
            ],
        ];
    }

    /**
     * Returns the templates configuration
     */
    public function getTemplates() : array
    {
        return [
            'paths' => [
                'app'    => [__DIR__ . '/../templates/app'],
                'error'  => [__DIR__ . '/../templates/error'],
                'layout' => [__DIR__ . '/../templates/layout'],
            ],
        ];
    }
}
