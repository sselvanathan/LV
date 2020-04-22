<?php


namespace App\Repository;

use App\Collection\SongModelCollection;
use App\Model\SongModel;

class HomeRepository
{

    public function getSongTitles()
    {
        $songModelCollection = new SongModelCollection();

        for ($n = 1; $n <= 5; $n++) {
            $songModel = new SongModel();
            $songModel->setTitle('task' . $n);
            $songModel->setId($n);
            $songModel->setUserId($n + 10);
            $songModel->setCompleted(array_rand([true, false]));
            $songModelCollection->addModel($songModel);
        }

        return $songModelCollection;
    }
}
