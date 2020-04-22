<?php


namespace App\Collection;


use App\Model\HomeModel;

class HomeModelCollection
{

    /**
     * @var HomeModel[]
     */
    private $models;

    public function addModel(HomeModel $homeModel)
    {
        $this->models[] = $homeModel;
    }

    /**
     * @return HomeModel[]
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
