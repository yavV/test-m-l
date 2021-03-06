<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/json-rpc' => [
            [['_route' => 'json_rpc_http_server_endpoint', '_controller' => 'json_rpc_http_server.endpoint::httpPost'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'json_rpc_http_server_endpoint_options', '_controller' => 'json_rpc_http_server.endpoint::httpOptions'], null, ['OPTIONS' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
