<?php

namespace ContainerJp0hBwb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TCjhayMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tCjhayM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tCjhayM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sousFamille' => ['privates', '.errored..service_locator.tCjhayM.App\\Entity\\SousFamille', NULL, 'Cannot autowire service ".service_locator.tCjhayM": it references class "App\\Entity\\SousFamille" but no such service exists.'],
            'sousFamilleRepository' => ['privates', 'App\\Repository\\SousFamilleRepository', 'getSousFamilleRepositoryService', true],
        ], [
            'sousFamille' => 'App\\Entity\\SousFamille',
            'sousFamilleRepository' => 'App\\Repository\\SousFamilleRepository',
        ]);
    }
}
