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
        '/accion' => [[['_route' => 'accion_index', '_controller' => 'App\\Controller\\AccionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/accion/new' => [[['_route' => 'accion_new', '_controller' => 'App\\Controller\\AccionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administrador_cuentas' => [[['_route' => 'administrador_cuentas_index', '_controller' => 'App\\Controller\\AdministradorCuentasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/administrador_cuentas/new' => [[['_route' => 'administrador_cuentas_new', '_controller' => 'App\\Controller\\AdministradorCuentasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administradores' => [[['_route' => 'administradores_index', '_controller' => 'App\\Controller\\AdministradoresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/administradores/new' => [[['_route' => 'administradores_new', '_controller' => 'App\\Controller\\AdministradoresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/campania' => [[['_route' => 'campania', '_controller' => 'App\\Controller\\CampaniaController::index'], null, null, null, false, false, null]],
        '/changecomp' => [[['_route' => 'changecomp_index', '_controller' => 'App\\Controller\\ChangecompController::index'], null, null, null, true, false, null]],
        '/changecomp/new' => [[['_route' => 'changecomp_new', '_controller' => 'App\\Controller\\ChangecompController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/clientes' => [[['_route' => 'clientes_index', '_controller' => 'App\\Controller\\ClientesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/clientes/new' => [[['_route' => 'clientes_new', '_controller' => 'App\\Controller\\ClientesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cobradores' => [[['_route' => 'cobradores_index', '_controller' => 'App\\Controller\\CobradoresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cobradores/new' => [[['_route' => 'cobradores_new', '_controller' => 'App\\Controller\\CobradoresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cobranza' => [[['_route' => 'cobranza_index', '_controller' => 'App\\Controller\\CobranzaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cobranza/finalizado' => [[['_route' => 'cobranza_finalizado', '_controller' => 'App\\Controller\\CobranzaController::finalizado'], null, ['GET' => 0], null, false, false, null]],
        '/cobranza/resumen' => [[['_route' => 'cobranza_resumen', '_controller' => 'App\\Controller\\CobranzaController::resumen'], null, ['GET' => 0], null, false, false, null]],
        '/cobranza_funcion' => [[['_route' => 'cobranza_funcion_index', '_controller' => 'App\\Controller\\CobranzaFuncionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cobranza_funcion/new' => [[['_route' => 'cobranza_funcion_new', '_controller' => 'App\\Controller\\CobranzaFuncionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/configuracion' => [[['_route' => 'configuracion_index', '_controller' => 'App\\Controller\\ConfiguracionController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/configuracion/new' => [[['_route' => 'configuracion_new', '_controller' => 'App\\Controller\\ConfiguracionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrato' => [[['_route' => 'contrato_index', '_controller' => 'App\\Controller\\ContratoController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/contrato/actualizafecha' => [[['_route' => 'contrato_actualizaFecha', '_controller' => 'App\\Controller\\ContratoController::actualizafecha'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrato/new' => [[['_route' => 'contrato_new', '_controller' => 'App\\Controller\\ContratoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrato/regenerapdfs' => [[['_route' => 'contrato_regenerapdfs', '_controller' => 'App\\Controller\\ContratoController::regenerapdfs'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrato/rol/new' => [[['_route' => 'contrato_rol_new', '_controller' => 'App\\Controller\\ContratoRolController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cuenta' => [[['_route' => 'cuenta_index', '_controller' => 'App\\Controller\\CuentaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cuenta/new' => [[['_route' => 'cuenta_new', '_controller' => 'App\\Controller\\CuentaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/empresa' => [[['_route' => 'empresa_index', '_controller' => 'App\\Controller\\EmpresaController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/empresa/new' => [[['_route' => 'empresa_new', '_controller' => 'App\\Controller\\EmpresaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/importacion' => [[['_route' => 'importacion_index', '_controller' => 'App\\Controller\\ImportacionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/importacion/new' => [[['_route' => 'importacion_new', '_controller' => 'App\\Controller\\ImportacionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/importacion/newPer' => [[['_route' => 'importacion_newPer', '_controller' => 'App\\Controller\\ImportacionController::newPer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/menu_cabezera' => [[['_route' => 'menu_cabezera_index', '_controller' => 'App\\Controller\\MenuCabezeraController::index'], null, ['GET' => 0], null, true, false, null]],
        '/menu_cabezera/new' => [[['_route' => 'menu_cabezera_new', '_controller' => 'App\\Controller\\MenuCabezeraController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/menu/main' => [[['_route' => 'menu_main', '_controller' => 'App\\Controller\\MenuController::mainMenu'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mis_datos' => [[['_route' => 'mis_datos_index', '_controller' => 'App\\Controller\\MisDatosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mis_datos/modificar' => [[['_route' => 'mis_datos_modificar', '_controller' => 'App\\Controller\\MisDatosController::modificar'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mis_datos/password' => [[['_route' => 'mis_datos_password', '_controller' => 'App\\Controller\\MisDatosController::password'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/modulo' => [[['_route' => 'modulo_index', '_controller' => 'App\\Controller\\ModuloController::index'], null, ['GET' => 0], null, true, false, null]],
        '/modulo/new' => [[['_route' => 'modulo_new', '_controller' => 'App\\Controller\\ModuloController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/usuario_categoria' => [[['_route' => 'usuario_categoria_index', '_controller' => 'App\\Controller\\UsuarioCategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuario_categoria/new' => [[['_route' => 'usuario_categoria_new', '_controller' => 'App\\Controller\\UsuarioCategoriaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usuario' => [[['_route' => 'usuario_index', '_controller' => 'App\\Controller\\UsuarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuario/new' => [[['_route' => 'usuario_new', '_controller' => 'App\\Controller\\UsuarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usuario_cuenta' => [[['_route' => 'usuario_cuenta_index', '_controller' => 'App\\Controller\\UsuarioCuentaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuario_cuenta/new' => [[['_route' => 'usuario_cuenta_new', '_controller' => 'App\\Controller\\UsuarioCuentaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usuario_status' => [[['_route' => 'usuario_status_index', '_controller' => 'App\\Controller\\UsuarioStatusController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuario_status/new' => [[['_route' => 'usuario_status_new', '_controller' => 'App\\Controller\\UsuarioStatusController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usuario_tipo' => [[['_route' => 'usuario_tipo_index', '_controller' => 'App\\Controller\\UsuarioTipoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuario_tipo/new' => [[['_route' => 'usuario_tipo_new', '_controller' => 'App\\Controller\\UsuarioTipoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/webhook' => [[['_route' => 'webhook_index', '_controller' => 'App\\Controller\\WebhookController::index'], null, ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ccion/([^/]++)(?'
                        .'|(*:191)'
                        .'|/edit(*:204)'
                        .'|(*:212)'
                    .')'
                    .'|dministrador(?'
                        .'|_cuentas/([^/]++)(?'
                            .'|(*:256)'
                            .'|/(?'
                                .'|edit(*:272)'
                                .'|restore(*:287)'
                            .')'
                            .'|(*:296)'
                        .')'
                        .'|es/([^/]++)(?'
                            .'|(*:319)'
                            .'|/(?'
                                .'|edit(*:335)'
                                .'|restore(*:350)'
                            .')'
                            .'|(*:359)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|lientes/([^/]++)(?'
                        .'|(*:394)'
                        .'|/(?'
                            .'|edit(*:410)'
                            .'|restore(*:425)'
                        .')'
                        .'|(*:434)'
                    .')'
                    .'|o(?'
                        .'|bra(?'
                            .'|dores/([^/]++)(?'
                                .'|(*:470)'
                                .'|/(?'
                                    .'|edit(*:486)'
                                    .'|restore(*:501)'
                                .')'
                                .'|(*:510)'
                            .')'
                            .'|nza(?'
                                .'|/([^/]++)(?'
                                    .'|(*:537)'
                                    .'|/(?'
                                        .'|vercobranza(?'
                                            .'|(*:563)'
                                            .'|_view(*:576)'
                                        .')'
                                        .'|de(?'
                                            .'|tallepagos(*:600)'
                                            .'|lete(*:612)'
                                        .')'
                                        .'|new(*:624)'
                                        .'|lote(*:636)'
                                        .'|co(?'
                                            .'|brador(*:655)'
                                            .'|mpromiso(*:671)'
                                        .')'
                                        .'|edit(*:684)'
                                        .'|terminar(*:700)'
                                    .')'
                                .')'
                                .'|_funcion/([^/]++)(?'
                                    .'|(*:730)'
                                    .'|/edit(*:743)'
                                    .'|(*:751)'
                                .')'
                            .')'
                        .')'
                        .'|n(?'
                            .'|figuracion/([^/]++)(?'
                                .'|(*:788)'
                                .'|/edit(*:801)'
                                .'|(*:809)'
                            .')'
                            .'|trato/(?'
                                .'|([^/]++)(?'
                                    .'|(*:838)'
                                    .'|/(?'
                                        .'|new_rol(*:857)'
                                        .'|del_rol(*:872)'
                                        .'|edit(*:884)'
                                        .'|finalizar(*:901)'
                                        .'|pdf(*:912)'
                                        .'|terminar(*:928)'
                                        .'|c(?'
                                            .'|iudad(*:945)'
                                            .'|omuna(*:958)'
                                        .')'
                                    .')'
                                    .'|(*:968)'
                                .')'
                                .'|rol(?'
                                    .'|(*:983)'
                                    .'|/([^/]++)(?'
                                        .'|(*:1003)'
                                        .'|/edit(*:1017)'
                                        .'|(*:1026)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|uenta/([^/]++)(?'
                        .'|(*:1057)'
                        .'|/edit(*:1071)'
                        .'|(*:1080)'
                    .')'
                .')'
                .'|/empresa/([^/]++)(?'
                    .'|(*:1111)'
                    .'|/edit(*:1125)'
                    .'|(*:1134)'
                .')'
                .'|/importacion/([^/]++)(?'
                    .'|(*:1168)'
                    .'|/edit(*:1182)'
                    .'|(*:1191)'
                .')'
                .'|/m(?'
                    .'|enu(?'
                        .'|_cabezera/([^/]++)(?'
                            .'|(*:1233)'
                            .'|/edit(*:1247)'
                            .'|(*:1256)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|(*:1278)'
                            .'|/(?'
                                .'|new(*:1294)'
                                .'|edit(*:1307)'
                            .')'
                            .'|(*:1317)'
                        .')'
                    .')'
                    .'|odulo/([^/]++)/edit(*:1347)'
                .')'
                .'|/privilegio(?'
                    .'|/([^/]++)(?'
                        .'|(*:1383)'
                        .'|/(?'
                            .'|new(*:1399)'
                            .'|edit(*:1412)'
                            .'|regenerar(*:1430)'
                        .')'
                        .'|(*:1440)'
                    .')'
                    .'|_tipousuario/([^/]++)(?'
                        .'|(*:1474)'
                        .'|/(?'
                            .'|new(*:1490)'
                            .'|edit(*:1503)'
                        .')'
                        .'|(*:1513)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1560)'
                .'|/sucursal/([^/]++)(?'
                    .'|(*:1590)'
                    .'|/(?'
                        .'|new(*:1606)'
                        .'|edit(*:1619)'
                    .')'
                    .'|(*:1629)'
                .')'
                .'|/usuario(?'
                    .'|_(?'
                        .'|c(?'
                            .'|ategoria/([^/]++)(?'
                                .'|(*:1678)'
                                .'|/edit(*:1692)'
                                .'|(*:1701)'
                            .')'
                            .'|uenta/([^/]++)(?'
                                .'|(*:1728)'
                                .'|/edit(*:1742)'
                                .'|(*:1751)'
                            .')'
                        .')'
                        .'|no_disponible/([^/]++)(?'
                            .'|(*:1787)'
                            .'|/(?'
                                .'|new(*:1803)'
                                .'|show(*:1816)'
                                .'|edit(*:1829)'
                                .'|delete(*:1844)'
                            .')'
                        .')'
                        .'|status/([^/]++)(?'
                            .'|(*:1873)'
                            .'|/edit(*:1887)'
                            .'|(*:1896)'
                        .')'
                        .'|tipo/([^/]++)(?'
                            .'|(*:1922)'
                            .'|/edit(*:1936)'
                            .'|(*:1945)'
                        .')'
                    .')'
                    .'|/([^/]++)(?'
                        .'|(*:1968)'
                        .'|/edit(*:1982)'
                        .'|(*:1991)'
                    .')'
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
        191 => [[['_route' => 'accion_show', '_controller' => 'App\\Controller\\AccionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'accion_edit', '_controller' => 'App\\Controller\\AccionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'accion_delete', '_controller' => 'App\\Controller\\AccionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        256 => [[['_route' => 'administrador_cuentas_show', '_controller' => 'App\\Controller\\AdministradorCuentasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'administrador_cuentas_edit', '_controller' => 'App\\Controller\\AdministradorCuentasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'administrador_cuentas_restore', '_controller' => 'App\\Controller\\AdministradorCuentasController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        296 => [[['_route' => 'administrador_cuentas_delete', '_controller' => 'App\\Controller\\AdministradorCuentasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        319 => [[['_route' => 'administradores_show', '_controller' => 'App\\Controller\\AdministradoresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'administradores_edit', '_controller' => 'App\\Controller\\AdministradoresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'administradores_restore', '_controller' => 'App\\Controller\\AdministradoresController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        359 => [[['_route' => 'administradores_delete', '_controller' => 'App\\Controller\\AdministradoresController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        394 => [[['_route' => 'clientes_show', '_controller' => 'App\\Controller\\ClientesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'clientes_edit', '_controller' => 'App\\Controller\\ClientesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'clientes_restore', '_controller' => 'App\\Controller\\ClientesController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        434 => [[['_route' => 'clientes_delete', '_controller' => 'App\\Controller\\ClientesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        470 => [[['_route' => 'cobradores_show', '_controller' => 'App\\Controller\\CobradoresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        486 => [[['_route' => 'cobradores_edit', '_controller' => 'App\\Controller\\CobradoresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        501 => [[['_route' => 'cobradores_restore', '_controller' => 'App\\Controller\\CobradoresController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        510 => [[['_route' => 'cobradores_delete', '_controller' => 'App\\Controller\\CobradoresController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        537 => [[['_route' => 'cobranza_show', '_controller' => 'App\\Controller\\CobranzaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        563 => [[['_route' => 'vercobranza_index', '_controller' => 'App\\Controller\\CobranzaController::vercobranzas'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        576 => [[['_route' => 'vercobranza_view', '_controller' => 'App\\Controller\\CobranzaController::verpagosShow'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        600 => [[['_route' => 'detallepagos_index', '_controller' => 'App\\Controller\\CobranzaController::detallepagos'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        612 => [[['_route' => 'cobranza_delete', '_controller' => 'App\\Controller\\CobranzaController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        624 => [[['_route' => 'cobranza_new', '_controller' => 'App\\Controller\\CobranzaController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        636 => [[['_route' => 'cobranza_lote', '_controller' => 'App\\Controller\\CobranzaController::lote'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        655 => [[['_route' => 'cobranza_cobrador', '_controller' => 'App\\Controller\\CobranzaController::cobrador'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        671 => [[['_route' => 'cobranza_compromiso', '_controller' => 'App\\Controller\\CobranzaController::fechaCompromiso'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        684 => [[['_route' => 'cobranza_edit', '_controller' => 'App\\Controller\\CobranzaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        700 => [[['_route' => 'cobranza_terminar', '_controller' => 'App\\Controller\\CobranzaController::terminar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        730 => [[['_route' => 'cobranza_funcion_show', '_controller' => 'App\\Controller\\CobranzaFuncionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        743 => [[['_route' => 'cobranza_funcion_edit', '_controller' => 'App\\Controller\\CobranzaFuncionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        751 => [[['_route' => 'cobranza_funcion_delete', '_controller' => 'App\\Controller\\CobranzaFuncionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        788 => [[['_route' => 'configuracion_show', '_controller' => 'App\\Controller\\ConfiguracionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        801 => [[['_route' => 'configuracion_edit', '_controller' => 'App\\Controller\\ConfiguracionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        809 => [[['_route' => 'configuracion_delete', '_controller' => 'App\\Controller\\ConfiguracionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        838 => [[['_route' => 'contrato_show', '_controller' => 'App\\Controller\\ContratoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        857 => [[['_route' => 'contrato_new_rol', '_controller' => 'App\\Controller\\ContratoController::newRol'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        872 => [[['_route' => 'contrato_del_rol', '_controller' => 'App\\Controller\\ContratoController::delRol'], ['id'], ['DELETE' => 0], null, false, false, null]],
        884 => [[['_route' => 'contrato_edit', '_controller' => 'App\\Controller\\ContratoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        901 => [[['_route' => 'contrato_finalizar', '_controller' => 'App\\Controller\\ContratoController::finalizar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        912 => [[['_route' => 'contrato_pdf', '_controller' => 'App\\Controller\\ContratoController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        928 => [[['_route' => 'contrato_terminar', '_controller' => 'App\\Controller\\ContratoController::terminar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        945 => [[['_route' => 'contrato_ciudad', '_controller' => 'App\\Controller\\ContratoController::ciudad'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        958 => [[['_route' => 'contrato_comuna', '_controller' => 'App\\Controller\\ContratoController::comuna'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        968 => [[['_route' => 'contrato_delete', '_controller' => 'App\\Controller\\ContratoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        983 => [[['_route' => 'contrato_rol_index', '_controller' => 'App\\Controller\\ContratoRolController::index'], [], ['GET' => 0], null, true, false, null]],
        1003 => [[['_route' => 'contrato_rol_show', '_controller' => 'App\\Controller\\ContratoRolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1017 => [[['_route' => 'contrato_rol_edit', '_controller' => 'App\\Controller\\ContratoRolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1026 => [[['_route' => 'contrato_rol_delete', '_controller' => 'App\\Controller\\ContratoRolController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1057 => [[['_route' => 'cuenta_show', '_controller' => 'App\\Controller\\CuentaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1071 => [[['_route' => 'cuenta_edit', '_controller' => 'App\\Controller\\CuentaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1080 => [[['_route' => 'cuenta_delete', '_controller' => 'App\\Controller\\CuentaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1111 => [[['_route' => 'empresa_show', '_controller' => 'App\\Controller\\EmpresaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1125 => [[['_route' => 'empresa_edit', '_controller' => 'App\\Controller\\EmpresaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1134 => [[['_route' => 'empresa_delete', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1168 => [[['_route' => 'importacion_show', '_controller' => 'App\\Controller\\ImportacionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1182 => [[['_route' => 'importacion_edit', '_controller' => 'App\\Controller\\ImportacionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1191 => [[['_route' => 'importacion_delete', '_controller' => 'App\\Controller\\ImportacionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1233 => [[['_route' => 'menu_cabezera_show', '_controller' => 'App\\Controller\\MenuCabezeraController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1247 => [[['_route' => 'menu_cabezera_edit', '_controller' => 'App\\Controller\\MenuCabezeraController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1256 => [[['_route' => 'menu_cabezera_delete', '_controller' => 'App\\Controller\\MenuCabezeraController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1278 => [[['_route' => 'menu_index', '_controller' => 'App\\Controller\\MenuController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1294 => [[['_route' => 'menu_new', '_controller' => 'App\\Controller\\MenuController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1307 => [[['_route' => 'menu_edit', '_controller' => 'App\\Controller\\MenuController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1317 => [[['_route' => 'menu_delete', '_controller' => 'App\\Controller\\MenuController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1347 => [[['_route' => 'modulo_edit', '_controller' => 'App\\Controller\\ModuloController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1383 => [[['_route' => 'privilegio_index', '_controller' => 'App\\Controller\\PrivilegioController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1399 => [[['_route' => 'privilegio_new', '_controller' => 'App\\Controller\\PrivilegioController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1412 => [[['_route' => 'privilegio_edit', '_controller' => 'App\\Controller\\PrivilegioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1430 => [[['_route' => 'privilegio_regenerar', '_controller' => 'App\\Controller\\PrivilegioController::regenerar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1440 => [
            [['_route' => 'privilegio_show', '_controller' => 'App\\Controller\\PrivilegioController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'privilegio_delete', '_controller' => 'App\\Controller\\PrivilegioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1474 => [[['_route' => 'privilegio_tipousuario_index', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1490 => [[['_route' => 'privilegio_tipousuario_new', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1503 => [[['_route' => 'privilegio_tipousuario_edit', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1513 => [[['_route' => 'privilegio_tipousuario_delete', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1560 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1590 => [[['_route' => 'sucursal_index', '_controller' => 'App\\Controller\\SucursalController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1606 => [[['_route' => 'sucursal_new', '_controller' => 'App\\Controller\\SucursalController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1619 => [[['_route' => 'sucursal_edit', '_controller' => 'App\\Controller\\SucursalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1629 => [[['_route' => 'sucursal_delete', '_controller' => 'App\\Controller\\SucursalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1678 => [[['_route' => 'usuario_categoria_show', '_controller' => 'App\\Controller\\UsuarioCategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1692 => [[['_route' => 'usuario_categoria_edit', '_controller' => 'App\\Controller\\UsuarioCategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1701 => [[['_route' => 'usuario_categoria_delete', '_controller' => 'App\\Controller\\UsuarioCategoriaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1728 => [[['_route' => 'usuario_cuenta_show', '_controller' => 'App\\Controller\\UsuarioCuentaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1742 => [[['_route' => 'usuario_cuenta_edit', '_controller' => 'App\\Controller\\UsuarioCuentaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1751 => [[['_route' => 'usuario_cuenta_delete', '_controller' => 'App\\Controller\\UsuarioCuentaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1787 => [[['_route' => 'usuario_no_disponible_index', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1803 => [[['_route' => 'usuario_no_disponible_new', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1816 => [[['_route' => 'usuario_no_disponible_show', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1829 => [[['_route' => 'usuario_no_disponible_edit', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1844 => [[['_route' => 'usuario_no_disponible_delete', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1873 => [[['_route' => 'usuario_status_show', '_controller' => 'App\\Controller\\UsuarioStatusController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1887 => [[['_route' => 'usuario_status_edit', '_controller' => 'App\\Controller\\UsuarioStatusController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1896 => [[['_route' => 'usuario_status_delete', '_controller' => 'App\\Controller\\UsuarioStatusController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1922 => [[['_route' => 'usuario_tipo_show', '_controller' => 'App\\Controller\\UsuarioTipoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1936 => [[['_route' => 'usuario_tipo_edit', '_controller' => 'App\\Controller\\UsuarioTipoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1945 => [[['_route' => 'usuario_tipo_delete', '_controller' => 'App\\Controller\\UsuarioTipoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1968 => [[['_route' => 'usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1982 => [[['_route' => 'usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1991 => [
            [['_route' => 'usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
