<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ArticleController::list'], null, null, null, false, false, null]],
        '/article/create' => [[['_route' => 'article_create', '_controller' => 'App\\Controller\\ArticleController::create'], null, null, null, false, false, null]],
        '/form' => [[['_route' => 'app_form', '_controller' => 'App\\Controller\\FormController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/article/(?'
                    .'|delete/([^/]++)(*:34)'
                    .'|([^/]++)(*:49)'
                    .'|edit/([^/]++)(*:69)'
                    .'|update/([^/]++)(*:91)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:127)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        49 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ArticleController::view'], ['id'], ['GET' => 0], null, false, true, null]],
        69 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], null, null, false, true, null]],
        91 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], null, null, false, true, null]],
        127 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
