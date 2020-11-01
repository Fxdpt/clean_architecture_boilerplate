<?php

namespace AppName\Domain\Gateway;

use AppName\Domain\Entity\DefaultEntity;

interface DefaultGatewayInterface
{
    /**
     * @param DefaultEntity $defaultEntity
     * @return void
     */
    public function add(DefaultEntity $defaultEntity): void;

    /**
     * @return array<DefaultEntity>
     */
    public function findAll(): array;

    /**
     * @param integer $id
     * @return DefaultEntity
     */
    public function find(int $id): DefaultEntity;
}
