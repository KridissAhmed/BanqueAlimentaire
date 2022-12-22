<?php

namespace ContainerSsYfMUT;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qjg9GbAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qjg9GbA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qjg9GbA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cr' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
        ], [
            'cr' => 'App\\Repository\\CommandeRepository',
        ]);
    }
}