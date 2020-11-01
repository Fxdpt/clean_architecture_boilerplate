<?php

namespace App\Infrastructure\Repository;

use AppName\Domain\Entity\DefaultEntity;
use AppName\Domain\Gateway\DefaultGatewayInterface;

class DefaultRepository implements DefaultGatewayInterface
{
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
}
