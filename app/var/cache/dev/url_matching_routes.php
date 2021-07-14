<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/categories' => [
            [['_route' => 'categories', '_controller' => 'App\\Controller\\CategoryController::getCategories'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_category', '_controller' => 'App\\Controller\\CategoryController::createCategory'], null, ['POST' => 0], null, false, false, null],
        ],
        '/tickets' => [
            [['_route' => 'tickets', '_controller' => 'App\\Controller\\TicketController::getTickets'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_ticket', '_controller' => 'App\\Controller\\TicketController::createTicket'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/categories/(\\d+)(?'
                    .'|(*:27)'
                .')'
                .'|/tickets/(\\d+)(?'
                    .'|(*:52)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:88)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [
            [['_route' => 'get_category', '_controller' => 'App\\Controller\\CategoryController::getCategory'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_category', '_controller' => 'App\\Controller\\CategoryController::updateCategory'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_category', '_controller' => 'App\\Controller\\CategoryController::deleteCategory'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        52 => [
            [['_route' => 'show_ticket', '_controller' => 'App\\Controller\\TicketController::showTicket'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_ticket', '_controller' => 'App\\Controller\\TicketController::updateTicket'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_ticket', '_controller' => 'App\\Controller\\TicketController::deleteTicket'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        88 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
