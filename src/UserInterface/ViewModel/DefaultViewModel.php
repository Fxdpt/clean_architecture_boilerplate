<?php

namespace App\UserInterface\ViewModel;

class DefaultViewModel
{
    /**
     * @var array<string>
     */
    private $something;

    /**
     * @param array<string>|string $something
     */
    public function __construct($something)
    {
        $this->something = $something;
    }

    /**
     * Get the value of something
     *
     * @return  array<string>
     */
    public function getSomething(): array
    {
        return $this->something;
    }
}
