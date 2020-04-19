<?php


namespace Database\Core\Collection;

use Database\Core\Model\ToDoModel;

class ToDoModelCollection
{
    /**
     * @var ToDoModel[]
     */
    private $models;

    public function addModel(ToDoModel $toDoModel)
    {
        $this->models[] = $toDoModel;
    }

    /**
     * @return ToDoModel[]
     */
    public function get(): array
    {
        return $this->models;
    }

    public function toArray(): array
    {
        $toDos = [];
        foreach ($this->models as $model) {
            $toDos[] = [
                "userid" => $model->getUserId(),
                "id" => $model->getId(),
                "title" => $model->getTitle(),
                "completed" => $model->isCompleted(),
            ];
        }
        return $toDos;
    }
}
