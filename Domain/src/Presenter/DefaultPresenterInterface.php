<?php

namespace AppName\Domain\Presenter;

use AppName\Domain\Response\DefaultResponse;

interface DefaultPresenterInterface
{
    /**
     * @param DefaultResponse $response
     * @return void
     */
    public function present(DefaultResponse $response);
}
