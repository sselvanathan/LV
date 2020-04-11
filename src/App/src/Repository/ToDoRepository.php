<?php


namespace App\Repository;


use App\Collection\ToDoModelCollection;
use App\Model\ToDoModel;

class ToDoRepository
{
    public function getAll(): ToDoModelCollection
    {
        $toDoModelCollection = new ToDoModelCollection();

        for ($n = 1; $n <= 5; $n++) {
            $todoModel = new ToDoModel();
            $todoModel->setTitle('task' . $n);
            $todoModel->setId($n);
            $todoModel->setUserId($n + 10);
            $todoModel->setCompleted(array_rand([true, false]));
            $toDoModelCollection->addModel($todoModel);
        }

        return $toDoModelCollection;
    }
}
