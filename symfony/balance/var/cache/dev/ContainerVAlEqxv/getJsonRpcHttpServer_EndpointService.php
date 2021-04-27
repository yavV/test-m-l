<?php

namespace ContainerVAlEqxv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJsonRpcHttpServer_EndpointService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'json_rpc_http_server.endpoint' shared service.
     *
     * @return \Yoanm\SymfonyJsonRpcHttpServer\Endpoint\JsonRpcHttpEndpoint
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/yoanm/symfony-jsonrpc-http-server/src/Endpoint/JsonRpcHttpEndpoint.php';

        return $container->services['json_rpc_http_server.endpoint'] = new \Yoanm\SymfonyJsonRpcHttpServer\Endpoint\JsonRpcHttpEndpoint(($container->services['json_rpc_server_sdk.infra.endpoint'] ?? $container->load('getJsonRpcServerSdk_Infra_EndpointService')));
    }
}
