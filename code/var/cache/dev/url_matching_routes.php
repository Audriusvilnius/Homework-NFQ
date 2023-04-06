<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/form' => [[['_route' => 'app_form', '_controller' => 'App\\Controller\\FormController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/form/edit/([^/]++)(*:26)'
                .'|/article/([^/]++)(*:50)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:85)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'form_edit', '_controller' => 'App\\Controller\\FormController::edit'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ViewController::view'], ['id'], null, null, false, true, null]],
        85 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
