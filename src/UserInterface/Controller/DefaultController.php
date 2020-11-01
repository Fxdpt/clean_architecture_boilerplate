<?php

namespace App\UserInterface\Controller;

use AppName\Domain\UseCase\DefaultUseCase;
use Symfony\Component\Serializer\Serializer;
use App\UserInterface\Presenter\DefaultPresenter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Mapping\Loader\YamlFileLoader;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;

class DefaultController
{
    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct()
    {
        $classMetadataFactory = new ClassMetadataFactory(
            new YamlFileLoader(__DIR__ . '/../../../config/serializer/ViewModel.DefaultViewModel.serializer.yaml')
        );
        $normalizer = new GetSetMethodNormalizer($classMetadataFactory);
        $this->serializer = new Serializer([$normalizer]);
    }
    /**
     * @param DefaultUseCase $useCase
     * @return JsonResponse
     */
    public function __invoke(DefaultUseCase $useCase): JsonResponse
    {
        $defaultPresenter = new DefaultPresenter();
        $useCase->execute($defaultPresenter);
        $response = $this->serializer->normalize(
            $defaultPresenter->getDefaultViewModel(),
            null,
            ['groups' => 'default']
        );
        return new JsonResponse($response);
    }
}
