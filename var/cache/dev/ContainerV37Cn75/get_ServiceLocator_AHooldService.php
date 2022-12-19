<?php

namespace ContainerV37Cn75;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AHooldService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a_Hoold' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a_Hoold'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'utilisateur' => ['privates', '.errored..service_locator.a_Hoold.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.a_Hoold": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'slugger' => '?',
            'userPasswordHasher' => '?',
            'utilisateur' => 'App\\Entity\\Utilisateur',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
