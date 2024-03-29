<?php

namespace ContainerJp0hBwb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FyiU0TKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fyiU0TK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fyiU0TK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'twig' => ['privates', 'twig', 'getTwigService', false],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'twig' => '?',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
