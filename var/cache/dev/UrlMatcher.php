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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/alliance/repaire' => [[['_route' => 'app_alliance_board', '_controller' => 'App\\Controller\\AllianceController::board'], null, null, null, false, false, null]],
        '/alliance/join' => [[['_route' => 'app_alliance_join', '_controller' => 'App\\Controller\\AllianceController::join'], null, null, null, false, false, null]],
        '/alliance' => [[['_route' => 'app_alliance', '_controller' => 'App\\Controller\\AllianceController::home'], null, null, null, true, false, null]],
        '/equipage/crew-data' => [[['_route' => 'app_ship_crew_data', '_controller' => 'App\\Controller\\CrewController::getShipCrewData'], null, null, null, false, false, null]],
        '/equipage' => [[['_route' => 'app_crew_show', '_controller' => 'App\\Controller\\CrewController::recruit'], null, null, null, true, false, null]],
        '/exploration/tresors' => [[['_route' => 'treasure_hunt', '_controller' => 'App\\Controller\\ExplorationController::treasureHunt'], null, null, null, false, false, null]],
        '/exploration' => [[['_route' => 'app_explore', '_controller' => 'App\\Controller\\ExplorationController::explore'], null, null, null, true, false, null]],
        '/accueil/travel' => [[['_route' => 'app_travel', '_controller' => 'App\\Controller\\HomeController::travel'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, true, false, null]],
        '/accueil/espionnage' => [[['_route' => 'app_spy', '_controller' => 'App\\Controller\\HomeController::spy'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\InfoController::faq'], null, null, null, false, false, null]],
        '/regles' => [[['_route' => 'app_rules', '_controller' => 'App\\Controller\\InfoController::rules'], null, null, null, false, false, null]],
        '/messages' => [[['_route' => 'app_messaging', '_controller' => 'App\\Controller\\MessagingController::messagesList'], null, null, null, true, false, null]],
        '/braconnage' => [[['_route' => 'app_poach', '_controller' => 'App\\Controller\\PoachingController::poach'], null, null, null, true, false, null]],
        '/classement' => [[['_route' => 'app_ranking', '_controller' => 'App\\Controller\\RankingController::userRanking'], null, null, null, false, false, null]],
        '/en-ligne' => [[['_route' => 'app_logged', '_controller' => 'App\\Controller\\SecurityController::logged'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SecurityController::signup'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_settings', '_controller' => 'App\\Controller\\SettingsController::settings'], null, null, null, true, false, null]],
        '/navires/action' => [[['_route' => 'app_ships_action', '_controller' => 'App\\Controller\\ShipsController::shipAction'], null, null, null, false, false, null]],
        '/navires/transfer' => [[['_route' => 'app_ships_transfer', '_controller' => 'App\\Controller\\ShipsController::shipTransfer'], null, null, null, false, false, null]],
        '/navires' => [[['_route' => 'app_ships', '_controller' => 'App\\Controller\\ShipsController::showShips'], null, null, null, true, false, null]],
        '/taverne/refresh' => [[['_route' => 'app_tavern_refresh', '_controller' => 'App\\Controller\\TavernController::refresh'], null, null, null, false, false, null]],
        '/taverne/send-message' => [[['_route' => 'app_tavern_send_message', '_controller' => 'App\\Controller\\TavernController::addMessage'], null, null, null, false, false, null]],
        '/taverne' => [[['_route' => 'app_tavern', '_controller' => 'App\\Controller\\TavernController::tavern'], null, null, null, true, false, null]],
        '/commerce/buy-or-sell' => [[['_route' => 'app_trade_validate', '_controller' => 'App\\Controller\\TradeController::buyOrSell'], null, null, null, false, false, null]],
        '/commerce' => [[['_route' => 'app_trade', '_controller' => 'App\\Controller\\TradeController::show'], null, null, null, true, false, null]],
        '/guerre/resultat' => [[['_route' => 'app_war_action', '_controller' => 'App\\Controller\\WarController::warAction'], null, null, null, false, false, null]],
        '/guerre' => [[['_route' => 'app_war', '_controller' => 'App\\Controller\\WarController::warHome'], null, null, null, true, false, null]],
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
                .'|/capitaine/(\\d+)(*:185)'
                .'|/navires/(?'
                    .'|rename/(\\d+)(*:217)'
                    .'|order\\-move\\-(?'
                        .'|up/(\\d+)(*:249)'
                        .'|down/(\\d+)(*:267)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\SecurityController::profile'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'app_ship_rename', '_controller' => 'App\\Controller\\ShipsController::shipRename'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'app_ship_order_move_up', '_controller' => 'App\\Controller\\ShipsController::shipOrderMoveUp'], ['id'], null, null, false, true, null]],
        267 => [
            [['_route' => 'app_ship_order_move_down', '_controller' => 'App\\Controller\\ShipsController::shipOrderMoveDown'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
