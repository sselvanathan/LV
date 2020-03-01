<?php


namespace App\Handler;

use App\Service\HomePageService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class HomePageHandler implements RequestHandlerInterface
{

    /**
     * @var HomePageService
     */
    private $homePageService;

    public function __construct(HomePageService $homePageService)
    {
        $this->homePageService = $homePageService;
    }

    /**
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        // TODO: Implement handle() method.
        return new JsonResponse($this->homePageService->getTitle());
    }
}