<?php

namespace ContainerV37Cn75;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DmfMTkQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DmfMTkQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DmfMTkQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'famille' => ['privates', '.errored..service_locator.DmfMTkQ.App\\Entity\\Famille', NULL, 'Cannot autowire service ".service_locator.DmfMTkQ": it references class "App\\Entity\\Famille" but no such service exists.'],
            'familleRepository' => ['privates', 'App\\Repository\\FamilleRepository', 'getFamilleRepositoryService', true],
        ], [
            'famille' => 'App\\Entity\\Famille',
            'familleRepository' => 'App\\Repository\\FamilleRepository',
        ]);
    }
}
