<?php


namespace App\Handler;

use App\Service\AboutPageService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class AboutPageHandler implements RequestHandlerInterface
{

    /**
     * @var AboutPageService
     */
    private $aboutPageService;

    public function __construct(AboutPageService $aboutPageService)
    {
        $this->aboutPageService = $aboutPageService;
    }

    /**
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        // TODO: Implement handle() method.
        return new JsonResponse($this->aboutPageService->getAbout());
    }
}