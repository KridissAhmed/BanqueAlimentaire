<?php

namespace ContainerXi3TGET;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1RhB0LOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1RhB0LO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1RhB0LO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classificationrepo' => ['privates', 'App\\Repository\\ClassificationRepository', 'getClassificationRepositoryService', true],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'classificationrepo' => 'App\\Repository\\ClassificationRepository',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}