<?php

namespace AppName\Domain\Entity;

class DefaultEntity
{
    /**
     * @var string
     */
    private $content;


    /**
     * Get the value of content
     *
     * @return  string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param  string  $content
     *
     * @return  self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
