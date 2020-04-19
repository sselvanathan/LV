<?php


namespace App\Service;


use Database\Core\Collection\ToDoModelCollection;
use Database\Core\Repository\ToDoRepository;

class ToDoService
{

    /**
     * @var ToDoRepository
     */
    private $toDoRepository;

    public function __construct(ToDoRepository $toDoRepository)
    {
        $this->toDoRepository = $toDoRepository;
    }

    public function getAll():ToDoModelCollection
    {
        return $this->toDoRepository->getAll();
    }
}
