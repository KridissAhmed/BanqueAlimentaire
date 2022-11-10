<?php

namespace ContainerM856Zzi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CSuk2GXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CSuk2GX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CSuk2GX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'commandeRepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
            'detailCommandeRepository' => ['privates', 'App\\Repository\\DetailCommandeRepository', 'getDetailCommandeRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
            'commandeRepository' => 'App\\Repository\\CommandeRepository',
            'detailCommandeRepository' => 'App\\Repository\\DetailCommandeRepository',
        ]);
    }
}