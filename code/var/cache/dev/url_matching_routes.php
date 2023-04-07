<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ArticleController::list'], null, ['GET' => 0], null, false, false, null]],
        '/form' => [[['_route' => 'app_form', '_controller' => 'App\\Controller\\FormController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/article/(?'
                    .'|([^/]++)(*:27)'
                    .'|edit/([^/]++)(*:47)'
                    .'|update/([^/]++)(*:69)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:105)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ArticleController::view'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0], null, false, true, null]],
        69 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], null, null, false, true, null]],
        105 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
