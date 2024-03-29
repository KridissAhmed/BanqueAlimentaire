<?php

namespace ContainerUeunkCw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3LLKPPaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3LLKPPa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3LLKPPa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'classificationRepository' => ['privates', 'App\\Repository\\ClassificationRepository', 'getClassificationRepositoryService', true],
        ], [
            'classificationRepository' => 'App\\Repository\\ClassificationRepository',
        ]);
    }
}
