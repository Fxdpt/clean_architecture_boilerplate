<?php

namespace AppName\Domain\Request;

class SendRequest
{
    /**
     * @var string
     */
    private $something;

    public function __construct(string $something)
    {
        $this->something = $something;
    }

    /**
     * Get the value of something
     *
     * @return  string
     */
    public function getSomething(): string
    {
        return $this->something;
    }

    /**
     * Set the value of something
     *
     * @param  string  $something
     *
     * @return  self
     */
    public function setSomething(string $something): self
    {
        $this->something = $something;

        return $this;
    }
}
