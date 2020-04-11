<?php


namespace App\Service;


use App\Collection\ToDoModelCollection;
use App\Repository\ToDoRepository;

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
