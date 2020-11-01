<?php

namespace AppName\Domain\UseCase;

use AppName\Domain\Request\SendRequest;
use AppName\Domain\Entity\DefaultEntity;
use AppName\Domain\Gateway\DefaultGatewayInterface;

class SendSomethingUseCase
{
    /**
     * @var DefaultGatewayInterface
     */
    private $defaultGateway;

    /**
     * @param DefaultGatewayInterface $defaultGateway
     */
    public function __construct(DefaultGatewayInterface $defaultGateway)
    {
        $this->defaultGateway = $defaultGateway;
    }

    public function execute(SendRequest $request): void
    {
        $entity = new DefaultEntity();
        $entity->setContent($request->getSomething());

        $this->defaultGateway->add($entity);
    }
}
