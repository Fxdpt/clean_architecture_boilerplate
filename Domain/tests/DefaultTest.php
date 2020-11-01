<?php

namespace AppName\Domain\Tests;

use PHPUnit\Framework\TestCase;
use AppName\Domain\Entity\DefaultEntity;
use AppName\Domain\UseCase\DefaultUseCase;
use AppName\Domain\Gateway\DefaultGatewayInterface;
use AppName\Domain\Presenter\DefaultPresenterInterface;

class DefaultTest extends TestCase
{
    use DefaultUseCaseTrait;

    /**
     * @var DefaultGatewayInterface
     */
    private $defaultGateway;

    /**
     * @var DefaultPresenterInterface
     */
    private $defaultPresenter;

    protected function setUp(): void
    {
        $this->defaultGateway = DefaultUseCaseTrait::getDefaultGateway();
        $this->defaultPresenter = DefaultUseCaseTrait::getDefaultPresenter();
    }

    public function testUseCaseShouldReturnEntities(): void
    {
        $defaultUseCase = new DefaultUseCase($this->defaultGateway);
        $defaultUseCase->execute($this->defaultPresenter);
        $this->assertCount(10, $this->defaultPresenter->something);
    }
}
