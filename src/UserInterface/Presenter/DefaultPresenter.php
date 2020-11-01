<?php

namespace App\UserInterface\Presenter;

use AppName\Domain\Response\DefaultResponse;
use App\UserInterface\ViewModel\DefaultViewModel;
use AppName\Domain\Entity\DefaultEntity;
use AppName\Domain\Presenter\DefaultPresenterInterface;

class DefaultPresenter implements DefaultPresenterInterface
{
    /**
     * @var DefaultViewModel
     */
    private $defaultViewModel;

    /**
     * @inheritDoc
     */
    public function present(DefaultResponse $defaultResponse)
    {
        $this->defaultViewModel = new DefaultViewModel(
            array_map(
                function (DefaultEntity $defaultEntity) {
                    return $defaultEntity->getContent();
                },
                $defaultResponse->getSomething()
            )
        );
    }

    /**
     * Get the value of defaultViewModel
     *
     * @return  DefaultViewModel
     */
    public function getDefaultViewModel(): DefaultViewModel
    {
        return $this->defaultViewModel;
    }
}
