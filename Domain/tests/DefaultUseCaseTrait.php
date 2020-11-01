<?php

namespace AppName\Domain\Tests;

use AppName\Domain\Entity\DefaultEntity;
use AppName\Domain\Gateway\DefaultGatewayInterface;
use AppName\Domain\Response\DefaultResponse;
use AppName\Domain\Presenter\DefaultPresenterInterface;

trait DefaultUseCaseTrait
{
    public static function getDefaultPresenter()
    {
        $defaultPresenter = new class() implements DefaultPresenterInterface {
            /**
             * @var array
             */
            public $something = [];

            /**
             * @inheritDoc
             */
            public function present(DefaultResponse $defaultResponse)
            {
                $this->something = array_map(
                    function (DefaultEntity $defaultEntity) {
                        return $defaultEntity->getContent();
                    },
                    $defaultResponse->getSomething()
                );
            }
        };

        return $defaultPresenter;
    }

    public static function getDefaultGateway()
    {
        $defaultGateway = new class() implements DefaultGatewayInterface {
            public function add(DefaultEntity $defaultEntity): void
            {
            }

            public function findAll(): array
            {
                return array_fill(0, 10, (new DefaultEntity())->setContent('toto'));
            }

            public function find(int $id): DefaultEntity
            {
                return new DefaultEntity();
            }
        };

        return $defaultGateway;
    }
}