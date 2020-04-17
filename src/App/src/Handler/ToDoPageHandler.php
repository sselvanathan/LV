<?php


namespace App\Handler;


use App\UseCase\GetToDoModelCollectionUseCase;
use Fig\Http\Message\StatusCodeInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class ToDoPageHandler implements RequestHandlerInterface
{
    /**
     * @var GetToDoModelCollectionUseCase
     */
    private $getToDoModelCollectionUseCase;

    public function __construct(GetToDoModelCollectionUseCase $getToDoModelCollectionUseCase)
    {
        $this->getToDoModelCollectionUseCase = $getToDoModelCollectionUseCase;
    }

    /**
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return (new JsonResponse(
            $this->getToDoModelCollectionUseCase->getAll()->toArray(),
            StatusCodeInterface::STATUS_OK,
            ['Access-Control-Allow-Origin' => 'http://localhost:4200']
        ));
    }
}
