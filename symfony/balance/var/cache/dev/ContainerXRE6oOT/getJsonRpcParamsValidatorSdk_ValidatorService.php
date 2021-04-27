<?php

namespace ContainerXRE6oOT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJsonRpcParamsValidatorSdk_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'json_rpc_params_validator_sdk.validator' shared service.
     *
     * @return \Yoanm\JsonRpcParamsSymfonyValidator\Infra\JsonRpcParamsValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/yoanm/jsonrpc-server-sdk/src/Domain/JsonRpcMethodParamsValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/yoanm/jsonrpc-params-symfony-validator-sdk/src/Infra/JsonRpcParamsValidator.php';

        return $container->services['json_rpc_params_validator_sdk.validator'] = new \Yoanm\JsonRpcParamsSymfonyValidator\Infra\JsonRpcParamsValidator(($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')));
    }
}
