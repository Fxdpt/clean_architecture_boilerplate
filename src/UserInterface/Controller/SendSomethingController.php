<?php

namespace App\UserInterface\Controller;

use AppName\Domain\Request\SendRequest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppName\Domain\UseCase\SendSomethingUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;

class SendSomethingController
{
    public function __invoke(SendSomethingUseCase $sendSomethingUseCase, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $sendRequest = new SendRequest($data['content']);
        $sendSomethingUseCase->execute($sendRequest);

        return new JsonResponse(null, Response::HTTP_CREATED);
    }
}
