<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_form' => [[], ['_controller' => 'App\\Controller\\FormController::index'], [], [['text', '/form']], [], [], []],
    'form_edit' => [['id'], ['_controller' => 'App\\Controller\\FormController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/form/edit']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\IndexController::list'], [], [['text', '/']], [], [], []],
    'article_view' => [['id'], ['_controller' => 'App\\Controller\\ViewController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
