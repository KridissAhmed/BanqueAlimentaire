<?php

namespace ContainerV37Cn75;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KzL3gdRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KzL3gdR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KzL3gdR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'utilisateur' => ['privates', '.errored..service_locator.KzL3gdR.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.KzL3gdR": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'utilisateur' => 'App\\Entity\\Utilisateur',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
