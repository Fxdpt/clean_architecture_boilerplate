<?php

namespace AppName\Domain\UseCase;

use AppName\Domain\Response\DefaultResponse;
use AppName\Domain\Gateway\DefaultGatewayInterface;
use AppName\Domain\Presenter\DefaultPresenterInterface;

class DefaultUseCase
{

    /**
     * @var DefaultGatewayInterface
     */
    private $defaultGateway;

    public function __construct(DefaultGatewayInterface $defaultGateway)
    {
        $this->defaultGateway = $defaultGateway;
    }
    /**
     * Design Pattern COMMAND
     * @param DefaultPresenterInterface $presenter
     */
    public function execute(DefaultPresenterInterface $presenter): void
    {
        $presenter->present(new DefaultResponse($this->defaultGateway->findAll()));
    }
}
