<?php

namespace App\Handler;

use App\UseCase\GetToDoModelCollectionUseCase;

class HomePageHandler
{
    /**
     * @var GetToDoModelCollectionUseCase
     */
    private $getToDoModelCollectionUseCase;

    public function __construct(GetToDoModelCollectionUseCase $getToDoModelCollectionUseCase)
    {
        $this->getToDoModelCollectionUseCase = $getToDoModelCollectionUseCase;
    }
}
