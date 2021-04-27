<?php

namespace ContainerKZukz4R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_HandlerRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'jms_serializer.handler_registry' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSHandlerRegistryV2
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Serializer/JMSHandlerRegistryV2.php';

        return $container->services['jms_serializer.handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistryV2(($container->privates['fos_rest.serializer.jms_handler_registry.inner'] ?? $container->load('getFosRest_Serializer_JmsHandlerRegistry_InnerService')));
    }
}