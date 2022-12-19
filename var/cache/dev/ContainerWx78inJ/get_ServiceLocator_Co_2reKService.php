<?php

namespace ContainerWx78inJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Co_2reKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.co.2reK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.co.2reK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classification' => ['privates', '.errored..service_locator.co.2reK.App\\Entity\\Classification', NULL, 'Cannot autowire service ".service_locator.co.2reK": it references class "App\\Entity\\Classification" but no such service exists.'],
            'classificationRepository' => ['privates', 'App\\Repository\\ClassificationRepository', 'getClassificationRepositoryService', true],
        ], [
            'classification' => 'App\\Entity\\Classification',
            'classificationRepository' => 'App\\Repository\\ClassificationRepository',
        ]);
    }
}
