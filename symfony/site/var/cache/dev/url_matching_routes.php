<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/balance/(?'
                    .'|user\\-balance/(\\d+)(*:73)'
                    .'|history/(\\d+)(*:93)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        73 => [[['_route' => 'app_balance_getuserbalance', '_controller' => 'App\\Controller\\BalanceController::getUserBalanceAction'], ['userId'], ['GET' => 0], null, false, true, null]],
        93 => [
            [['_route' => 'app_balance_getuserhistory', '_controller' => 'App\\Controller\\BalanceController::getUserHistoryAction'], ['userId'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
