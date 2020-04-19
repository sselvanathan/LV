<?php


namespace App\UseCase;


use Database\Core\Collection\ToDoModelCollection;
use App\Service\ToDoService;

class GetToDoModelCollectionUseCase
{
    /**
     * @var ToDoService
     */
    private $toDoService;

    public function __construct(ToDoService $toDoService)
    {
        $this->toDoService = $toDoService;
    }

    public function getAll(): ToDoModelCollection
    {
        return $this->toDoService->getAll();
    }
}
