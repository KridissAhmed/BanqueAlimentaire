<?php

namespace ContainerXAWYRt6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZOOfiqbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZOOfiqb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZOOfiqb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sousFamilleRepository' => ['privates', 'App\\Repository\\SousFamilleRepository', 'getSousFamilleRepositoryService', true],
        ], [
            'sousFamilleRepository' => 'App\\Repository\\SousFamilleRepository',
        ]);
    }
}