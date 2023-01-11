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
        '/admin/article/recherche' => [[['_route' => 'app_article_search', '_controller' => 'App\\Controller\\ArticleController::recherche'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                        .'|/edit(*:203)'
                        .'|(*:211)'
                    .')'
                    .'|classification/([^/]++)(?'
                        .'|(*:246)'
                        .'|/edit(*:259)'
                        .'|(*:267)'
                    .')'
                    .'|famille/([^/]++)(?'
                        .'|(*:295)'
                        .'|/edit(*:308)'
                        .'|(*:316)'
                    .')'
                    .'|sous/famille/([^/]++)(?'
                        .'|(*:349)'
                        .'|/edit(*:362)'
                        .'|(*:370)'
                    .')'
                    .'|utilisateur/([^/]++)(?'
                        .'|(*:402)'
                        .'|/edit(*:415)'
                        .'|(*:423)'
                    .')'
                .')'
                .'|/commande/(?'
                    .'|pdf/([^/]++)(*:458)'
                    .'|csv/([^/]++)(*:478)'
                    .'|([^/]++)(?'
                        .'|(*:497)'
                        .'|/edit(*:510)'
                    .')'
                    .'|delete/([^/]++)(*:534)'
                    .'|([^/]++)/accepter(*:559)'
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
        203 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_classification_show', '_controller' => 'App\\Controller\\ClassificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'app_classification_edit', '_controller' => 'App\\Controller\\ClassificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'app_classification_delete', '_controller' => 'App\\Controller\\ClassificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        295 => [[['_route' => 'app_famille_show', '_controller' => 'App\\Controller\\FamilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'app_famille_edit', '_controller' => 'App\\Controller\\FamilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        316 => [[['_route' => 'app_famille_delete', '_controller' => 'App\\Controller\\FamilleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_sous_famille_show', '_controller' => 'App\\Controller\\SousFamilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_sous_famille_edit', '_controller' => 'App\\Controller\\SousFamilleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'app_sous_famille_delete', '_controller' => 'App\\Controller\\SousFamilleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        402 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        415 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        423 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        458 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\DetailCommandeController::pdf'], ['id'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'csv', '_controller' => 'App\\Controller\\DetailCommandeController::csv'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'detail', '_controller' => 'App\\Controller\\DetailCommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        510 => [[['_route' => 'app_detail_commande_edit', '_controller' => 'App\\Controller\\DetailCommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\DetailCommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        559 => [
            [['_route' => 'accepter', '_controller' => 'App\\Controller\\DetailCommandeController::editcommande'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
