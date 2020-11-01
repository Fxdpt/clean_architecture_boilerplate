<?php

namespace AppName\Domain\Response;

use AppName\Domain\Entity\DefaultEntity;

class DefaultResponse
{
    /**
     * @var array<DefaultEntity>
     */
    private $defaultEntity;

    /**
     * @param array<DefaultEntity> $defaultEntity
     */
    public function __construct(array $defaultEntity)
    {
        $this->defaultEntity = $defaultEntity;
    }

    /**
     * @return  array<DefaultEntity>
     */
    public function getSomething(): array
    {
        return $this->defaultEntity;
    }
}
