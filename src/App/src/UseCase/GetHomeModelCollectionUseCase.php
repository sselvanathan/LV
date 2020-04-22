<?php

namespace App\UseCase;

use App\Collection\HomeModelCollection;
use App\Service\HomeService;

class GetHomeModelCollectionUseCase
{
    /**
     * @var ToDoService
     */
    private $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function getAll(): HomeModelCollection
    {
        return $this->homeService->getAll();
    }
}
