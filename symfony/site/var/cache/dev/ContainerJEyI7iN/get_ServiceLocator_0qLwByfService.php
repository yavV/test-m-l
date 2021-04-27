<?php

namespace ContainerJEyI7iN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0qLwByfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0qLwByf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0qLwByf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serializer' => ['services', 'jms_serializer', 'getJmsSerializerService', true],
        ], [
            'serializer' => '?',
        ]);
    }
}
