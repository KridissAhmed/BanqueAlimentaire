<?php

namespace ContainerUeunkCw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0EpXvAvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0EpXvAv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0EpXvAv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Commande' => ['privates', '.errored..service_locator.0EpXvAv.App\\Entity\\Commande', NULL, 'Cannot autowire service ".service_locator.0EpXvAv": it references class "App\\Entity\\Commande" but no such service exists.'],
            'dr' => ['privates', 'App\\Repository\\DetailCommandeRepository', 'getDetailCommandeRepositoryService', true],
        ], [
            'Commande' => 'App\\Entity\\Commande',
            'dr' => 'App\\Repository\\DetailCommandeRepository',
        ]);
    }
}
