<?php

namespace ContainerVAlEqxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJsonRpcHttpServer_Dispatcher_ServerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'json_rpc_http_server.dispatcher.server' shared service.
     *
     * @return \Yoanm\SymfonyJsonRpcHttpServer\Dispatcher\SymfonyJsonRpcServerDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/yoanm/jsonrpc-server-sdk/src/Domain/JsonRpcServerDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/yoanm/symfony-jsonrpc-http-server/src/Dispatcher/SymfonyJsonRpcServerDispatcher.php';

        return $container->services['json_rpc_http_server.dispatcher.server'] = new \Yoanm\SymfonyJsonRpcHttpServer\Dispatcher\SymfonyJsonRpcServerDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
