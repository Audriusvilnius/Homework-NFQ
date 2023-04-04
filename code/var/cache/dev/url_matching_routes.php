<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/article/([^/]++)(?'
                    .'|(*:27)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:63)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [
            [['_route' => 'article_edit', '_controller' => 'App\\Controller\\EditController::edit'], ['id'], null, null, false, true, null],
            [['_route' => 'article_view', '_controller' => 'App\\Controller\\ViewController::view'], ['id'], null, null, false, true, null],
        ],
        63 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
