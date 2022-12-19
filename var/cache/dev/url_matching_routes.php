<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/classification' => [[['_route' => 'app_classification_index', '_controller' => 'App\\Controller\\ClassificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/classification/new' => [[['_route' => 'app_classification_new', '_controller' => 'App\\Controller\\ClassificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\DetailCommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/recherche' => [[['_route' => 'app_commande_search', '_controller' => 'App\\Controller\\DetailCommandeController::recherche'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_detail_commande_new', '_controller' => 'App\\Controller\\DetailCommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/famille' => [[['_route' => 'app_famille_index', '_controller' => 'App\\Controller\\FamilleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/famille/new' => [[['_route' => 'app_famille_new', '_controller' => 'App\\Controller\\FamilleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/sous/famille' => [[['_route' => 'app_sous_famille_index', '_controller' => 'App\\Controller\\SousFamilleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/sous/famille/new' => [[['_route' => 'app_sous_famille_new', '_controller' => 'App\\Controller\\SousFamilleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|article/([^/]++)(?'
                        .'|(*:198)'
                        .'|/edit(*:211)'
                        .'|(*:219)'
                    .')'
                    .'|classification/([^/]++)(?'
                        .'|(*:254)'
                        .'|/edit(*:267)'
                        .'|(*:275)'
                    .')'
                    .'|famille/([^/]++)(?'
                        .'|(*:303)'
                        .'|/edit(*:316)'
                        .'|(*:324)'
                    .')'
                    .'|sous/famille/([^/]++)(?'
                        .'|(*:357)'
                        .'|/edit(*:370)'
                        .'|(*:378)'
                    .')'
                    .'|utilisateur/([^/]++)(?'
                        .'|(*:410)'
                        .'|/edit(*:423)'
                        .'|(*:431)'
                    .')'
                .')'
                .'|/commande/(?'
                    .'|pdf/([^/]++)(*:466)'
                    .'|csv/([^/]++)(*:486)'
                    .'|([^/]++)(?'
                        .'|(*:505)'
                        .'|/edit(*:518)'
                    .')'
                    .'|delete/([^/]++)(*:542)'
                    .'|([^/]++)/accepter(*:567)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_classification_show', '_controller' => 'App\\Controller\\ClassificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_classification_edit', '_controller' => 'App\\Controller\\ClassificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [[['_route' => 'app_classification_delete', '_controller' => 'App\\Controller\\ClassificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_famille_show', '_controller' => 'App\\Controller\\FamilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_famille_edit', '_controller' => 'App\\Controller\\FamilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [[['_route' => 'app_famille_delete', '_controller' => 'App\\Controller\\FamilleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        357 => [[['_route' => 'app_sous_famille_show', '_controller' => 'App\\Controller\\SousFamilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'app_sous_famille_edit', '_controller' => 'App\\Controller\\SousFamilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        378 => [[['_route' => 'app_sous_famille_delete', '_controller' => 'App\\Controller\\SousFamilleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        466 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\DetailCommandeController::pdf'], ['id'], ['GET' => 0], null, false, true, null]],
        486 => [[['_route' => 'csv', '_controller' => 'App\\Controller\\DetailCommandeController::csv'], ['id'], ['GET' => 0], null, false, true, null]],
        505 => [[['_route' => 'detail', '_controller' => 'App\\Controller\\DetailCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'app_detail_commande_edit', '_controller' => 'App\\Controller\\DetailCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\DetailCommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        567 => [
            [['_route' => 'accepter', '_controller' => 'App\\Controller\\DetailCommandeController::editcommande'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
