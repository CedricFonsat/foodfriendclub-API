<?php

namespace App\OpenApi;


use ApiPlatform\OpenApi\Factory\OpenApiFactoryInterface;
use ApiPlatform\OpenApi\OpenApi;
use JetBrains\PhpStorm\NoReturn;

class OpenApiFactory implements OpenApiFactoryInterface
{

    public function __construct(private readonly OpenApiFactoryInterface $decorated){}

    #[NoReturn] public function __invoke(array $context = []): OpenApi
    {
        $openApi = $this->decorated->__invoke($context);
        return $openApi;
    }
}