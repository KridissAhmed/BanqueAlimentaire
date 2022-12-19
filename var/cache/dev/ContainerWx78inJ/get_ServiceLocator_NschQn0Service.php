<?php

namespace ContainerWx78inJ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NschQn0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nschQn0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nschQn0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'familleRepository' => ['privates', 'App\\Repository\\FamilleRepository', 'getFamilleRepositoryService', true],
        ], [
            'familleRepository' => 'App\\Repository\\FamilleRepository',
        ]);
    }
}
