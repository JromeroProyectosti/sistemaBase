<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/abogados' => [[['_route' => 'abogados_index', '_controller' => 'App\\Controller\\AbogadosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/abogados/new' => [[['_route' => 'abogados_new', '_controller' => 'App\\Controller\\AbogadosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/accion' => [[['_route' => 'accion_index', '_controller' => 'App\\Controller\\AccionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/accion/new' => [[['_route' => 'accion_new', '_controller' => 'App\\Controller\\AccionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administrador_cuentas' => [[['_route' => 'administrador_cuentas_index', '_controller' => 'App\\Controller\\AdministradorCuentasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/administrador_cuentas/new' => [[['_route' => 'administrador_cuentas_new', '_controller' => 'App\\Controller\\AdministradorCuentasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administradores' => [[['_route' => 'administradores_index', '_controller' => 'App\\Controller\\AdministradoresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/administradores/new' => [[['_route' => 'administradores_new', '_controller' => 'App\\Controller\\AdministradoresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/administrativo' => [[['_route' => 'administrativo_index', '_controller' => 'App\\Controller\\AdministrativoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/administrativo/new' => [[['_route' => 'administrativo_new', '_controller' => 'App\\Controller\\AdministrativoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/agenda' => [[['_route' => 'agenda_index', '_controller' => 'App\\Controller\\AgendaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agenda/new' => [[['_route' => 'agenda_new', '_controller' => 'App\\Controller\\AgendaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/agendadores' => [[['_route' => 'agendadores_index', '_controller' => 'App\\Controller\\AgendadoresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agendadores/new' => [[['_route' => 'agendadores_new', '_controller' => 'App\\Controller\\AgendadoresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/campania' => [[['_route' => 'campania', '_controller' => 'App\\Controller\\CampaniaController::index'], null, null, null, false, false, null]],
        '/changecomp' => [[['_route' => 'changecomp_index', '_controller' => 'App\\Controller\\ChangecompController::index'], null, null, null, true, false, null]],
        '/changecomp/new' => [[['_route' => 'changecomp_new', '_controller' => 'App\\Controller\\ChangecompController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cliente_potencial' => [[['_route' => 'cliente_potencial_index', '_controller' => 'App\\Controller\\ClientePotencialController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cliente_potencial/new' => [[['_route' => 'cliente_potencial_new', '_controller' => 'App\\Controller\\ClientePotencialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/clientes' => [[['_route' => 'clientes_index', '_controller' => 'App\\Controller\\ClientesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/clientes/new' => [[['_route' => 'clientes_new', '_controller' => 'App\\Controller\\ClientesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cobradores' => [[['_route' => 'cobradores_index', '_controller' => 'App\\Controller\\CobradoresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cobradores/new' => [[['_route' => 'cobradores_new', '_controller' => 'App\\Controller\\CobradoresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cobranza' => [[['_route' => 'cobranza_index', '_controller' => 'App\\Controller\\CobranzaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cobranza/finalizado' => [[['_route' => 'cobranza_finalizado', '_controller' => 'App\\Controller\\CobranzaController::finalizado'], null, ['GET' => 0], null, false, false, null]],
        '/cobranza/resumen' => [[['_route' => 'cobranza_resumen', '_controller' => 'App\\Controller\\CobranzaController::resumen'], null, ['GET' => 0], null, false, false, null]],
        '/cobranza/generalotes' => [[['_route' => 'cobranza_generalotes', '_controller' => 'App\\Controller\\CobranzaController::generalotes'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/desconoce' => [[['_route' => 'desconoce_index', '_controller' => 'App\\Controller\\DesconoceController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/empresa' => [[['_route' => 'empresa_index', '_controller' => 'App\\Controller\\EmpresaController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/empresa/new' => [[['_route' => 'empresa_new', '_controller' => 'App\\Controller\\EmpresaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/gestionar' => [[['_route' => 'gestionar_index', '_controller' => 'App\\Controller\\GestionarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gestionar/new' => [[['_route' => 'gestionar_new', '_controller' => 'App\\Controller\\GestionarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/importacion' => [[['_route' => 'importacion_index', '_controller' => 'App\\Controller\\ImportacionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/importacion/new' => [[['_route' => 'importacion_new', '_controller' => 'App\\Controller\\ImportacionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/importacion/newPer' => [[['_route' => 'importacion_newPer', '_controller' => 'App\\Controller\\ImportacionController::newPer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/jefe_abogados' => [[['_route' => 'jefe_abogados_index', '_controller' => 'App\\Controller\\JefeAbogadosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/jefe_abogados/new' => [[['_route' => 'jefe_abogados_new', '_controller' => 'App\\Controller\\JefeAbogadosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/jefe_procesos' => [[['_route' => 'jefe_procesos_index', '_controller' => 'App\\Controller\\JefeProcesosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/jefe_procesos/new' => [[['_route' => 'jefe_procesos_new', '_controller' => 'App\\Controller\\JefeProcesosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/multas' => [[['_route' => 'multas_index', '_controller' => 'App\\Controller\\MultasController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/nocontesta' => [[['_route' => 'nocontesta_index', '_controller' => 'App\\Controller\\NocontestaController::index'], null, null, null, true, false, null]],
        '/nocontrata' => [[['_route' => 'nocontrata_index', '_controller' => 'App\\Controller\\NocontrataController::index'], null, null, null, true, false, null]],
        '/pago_canal' => [[['_route' => 'pago_canal_index', '_controller' => 'App\\Controller\\PagoCanalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pago_canal/new' => [[['_route' => 'pago_canal_new', '_controller' => 'App\\Controller\\PagoCanalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pago' => [[['_route' => 'pago_index', '_controller' => 'App\\Controller\\PagoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pago/finalizado' => [[['_route' => 'pago_finalizado', '_controller' => 'App\\Controller\\PagoController::finalizado'], null, ['GET' => 0], null, false, false, null]],
        '/pago/resumen' => [[['_route' => 'pago_resumen', '_controller' => 'App\\Controller\\PagoController::resumen'], null, ['GET' => 0], null, false, false, null]],
        '/pago/upload' => [[['_route' => 'pago_upload', '_controller' => 'App\\Controller\\PagoController::upload'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pago/genera_cuotas' => [[['_route' => 'pago_generacuotas', '_controller' => 'App\\Controller\\PagoController::generaCuotas'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pago/cargar_pagos' => [[['_route' => 'pago_cargarpagos', '_controller' => 'App\\Controller\\PagoController::cargarPagos'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pago_tipo' => [[['_route' => 'pago_tipo_index', '_controller' => 'App\\Controller\\PagoTipoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pago_tipo/new' => [[['_route' => 'pago_tipo_new', '_controller' => 'App\\Controller\\PagoTipoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pais' => [[['_route' => 'pais_index', '_controller' => 'App\\Controller\\PaisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pais/new' => [[['_route' => 'pais_new', '_controller' => 'App\\Controller\\PaisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panel_abogado' => [[['_route' => 'panel_abogado_index', '_controller' => 'App\\Controller\\PanelAbogadoController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/panel_abogado/new_rol' => [[['_route' => 'panel_abogado_new_rol', '_controller' => 'App\\Controller\\PanelAbogadoController::newRol'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panel_agendador' => [[['_route' => 'panel_agendador_index', '_controller' => 'App\\Controller\\PanelAgendadorController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/panel_agendador/reasignar' => [[['_route' => 'panel_agendador_reasignar', '_controller' => 'App\\Controller\\PanelAgendadorController::reasignar'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panel_agendador/horas' => [[['_route' => 'panel_agendador_horas', '_controller' => 'App\\Controller\\PanelAgendadorController::hora'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reasignar' => [[['_route' => 'reasignar_index', '_controller' => 'App\\Controller\\ReasignarController::index'], null, null, null, true, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/resumen' => [[['_route' => 'resumen_index', '_controller' => 'App\\Controller\\ResumenController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/terminos' => [[['_route' => 'terminos_index', '_controller' => 'App\\Controller\\TerminosController::index'], null, null, null, true, false, null]],
        '/tramitadores' => [[['_route' => 'tramitadores_index', '_controller' => 'App\\Controller\\TramitadoresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tramitadores/new' => [[['_route' => 'tramitadores_new', '_controller' => 'App\\Controller\\TramitadoresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/vencimiento' => [[['_route' => 'vencimiento_index', '_controller' => 'App\\Controller\\VencimientoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vencimiento/new' => [[['_route' => 'vencimiento_new', '_controller' => 'App\\Controller\\VencimientoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/webhook' => [[['_route' => 'webhook_index', '_controller' => 'App\\Controller\\WebhookController::index'], null, ['GET' => 0, 'POST' => 1, 'PUT' => 2], null, true, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|bogados/([^/]++)(?'
                        .'|(*:31)'
                        .'|/(?'
                            .'|edit(*:46)'
                            .'|restore(*:60)'
                        .')'
                        .'|(*:68)'
                    .')'
                    .'|ccion/([^/]++)(?'
                        .'|(*:93)'
                        .'|/edit(*:105)'
                        .'|(*:113)'
                    .')'
                    .'|dministra(?'
                        .'|dor(?'
                            .'|_cuentas/([^/]++)(?'
                                .'|(*:160)'
                                .'|/(?'
                                    .'|edit(*:176)'
                                    .'|restore(*:191)'
                                .')'
                                .'|(*:200)'
                            .')'
                            .'|es/([^/]++)(?'
                                .'|(*:223)'
                                .'|/(?'
                                    .'|edit(*:239)'
                                    .'|restore(*:254)'
                                .')'
                                .'|(*:263)'
                            .')'
                        .')'
                        .'|tivo/([^/]++)(?'
                            .'|(*:289)'
                            .'|/(?'
                                .'|edit(*:305)'
                                .'|restore(*:320)'
                            .')'
                            .'|(*:329)'
                        .')'
                    .')'
                    .'|genda(?'
                        .'|/(?'
                            .'|([^/]++)(*:359)'
                            .'|resumena(?'
                                .'|gendadores(*:388)'
                                .'|bogados(*:403)'
                            .')'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:431)'
                                    .'|agendadores(*:450)'
                                .')'
                                .'|(*:459)'
                            .')'
                        .')'
                        .'|dores/([^/]++)(?'
                            .'|(*:486)'
                            .'|/(?'
                                .'|edit(*:502)'
                                .'|restore(*:517)'
                            .')'
                            .'|(*:526)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|liente(?'
                        .'|_potencial/([^/]++)(?'
                            .'|(*:573)'
                            .'|/edit(*:586)'
                            .'|(*:594)'
                        .')'
                        .'|s/([^/]++)(?'
                            .'|(*:616)'
                            .'|/(?'
                                .'|edit(*:632)'
                                .'|restore(*:647)'
                            .')'
                            .'|(*:656)'
                        .')'
                    .')'
                    .'|o(?'
                        .'|bra(?'
                            .'|dores/([^/]++)(?'
                                .'|(*:693)'
                                .'|/(?'
                                    .'|edit(*:709)'
                                    .'|restore(*:724)'
                                .')'
                                .'|(*:733)'
                            .')'
                            .'|nza/([^/]++)(?'
                                .'|(*:757)'
                                .'|/(?'
                                    .'|new(*:772)'
                                    .'|edit(*:784)'
                                .')'
                                .'|(*:793)'
                            .')'
                        .')'
                        .'|n(?'
                            .'|figuracion/([^/]++)(?'
                                .'|(*:829)'
                                .'|/edit(*:842)'
                                .'|(*:850)'
                            .')'
                            .'|trato/(?'
                                .'|([^/]++)(?'
                                    .'|(*:879)'
                                    .'|/(?'
                                        .'|new_rol(*:898)'
                                        .'|del_rol(*:913)'
                                        .'|edit(*:925)'
                                        .'|finalizar(*:942)'
                                        .'|pdf(*:953)'
                                        .'|terminar(*:969)'
                                    .')'
                                    .'|(*:978)'
                                .')'
                                .'|rol(?'
                                    .'|(*:993)'
                                    .'|/([^/]++)(?'
                                        .'|(*:1013)'
                                        .'|/edit(*:1027)'
                                        .'|(*:1036)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|uenta/([^/]++)(?'
                        .'|(*:1067)'
                        .'|/edit(*:1081)'
                        .'|(*:1090)'
                    .')'
                .')'
                .'|/desconoce/([^/]++)(?'
                    .'|/edit(*:1128)'
                    .'|(*:1137)'
                .')'
                .'|/empresa/([^/]++)(?'
                    .'|(*:1167)'
                    .'|/edit(*:1181)'
                    .'|(*:1190)'
                .')'
                .'|/gestionar/([^/]++)(?'
                    .'|(*:1222)'
                    .'|/edit(*:1236)'
                    .'|(*:1245)'
                .')'
                .'|/importacion/([^/]++)(?'
                    .'|(*:1279)'
                    .'|/edit(*:1293)'
                    .'|(*:1302)'
                .')'
                .'|/jefe_(?'
                    .'|abogados/([^/]++)(?'
                        .'|(*:1341)'
                        .'|/(?'
                            .'|edit(*:1358)'
                            .'|restore(*:1374)'
                        .')'
                        .'|(*:1384)'
                    .')'
                    .'|procesos/([^/]++)(?'
                        .'|(*:1414)'
                        .'|/(?'
                            .'|edit(*:1431)'
                            .'|restore(*:1447)'
                        .')'
                        .'|(*:1457)'
                    .')'
                .')'
                .'|/m(?'
                    .'|enu(?'
                        .'|_cabezera/([^/]++)(?'
                            .'|(*:1500)'
                            .'|/edit(*:1514)'
                            .'|(*:1523)'
                        .')'
                        .'|/([^/]++)(?'
                            .'|(*:1545)'
                            .'|/(?'
                                .'|new(*:1561)'
                                .'|edit(*:1574)'
                            .')'
                            .'|(*:1584)'
                        .')'
                    .')'
                    .'|odulo/([^/]++)/edit(*:1614)'
                    .'|ultas/([^/]++)(?'
                        .'|(*:1640)'
                        .'|/(?'
                            .'|new(*:1656)'
                            .'|edit(*:1669)'
                        .')'
                    .')'
                .')'
                .'|/nocont(?'
                    .'|esta/([^/]++)(*:1704)'
                    .'|rata/([^/]++)(*:1726)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|go(?'
                            .'|_(?'
                                .'|canal/([^/]++)(?'
                                    .'|(*:1771)'
                                    .'|/edit(*:1785)'
                                    .'|(*:1794)'
                                .')'
                                .'|tipo/([^/]++)(?'
                                    .'|(*:1820)'
                                    .'|/edit(*:1834)'
                                    .'|(*:1843)'
                                .')'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:1866)'
                                .'|/(?'
                                    .'|verpagos(?'
                                        .'|(*:1890)'
                                        .'|_view(*:1904)'
                                    .')'
                                    .'|detallepagos(*:1926)'
                                    .'|new(*:1938)'
                                    .'|edit(*:1951)'
                                .')'
                                .'|(*:1961)'
                            .')'
                        .')'
                        .'|is/([^/]++)(?'
                            .'|(*:1986)'
                            .'|/edit(*:2000)'
                            .'|(*:2009)'
                        .')'
                        .'|nel_a(?'
                            .'|bogado/([^/]++)(?'
                                .'|(*:2045)'
                                .'|/(?'
                                    .'|del_rol(*:2065)'
                                    .'|contrata(*:2082)'
                                    .'|no_contrata(*:2102)'
                                .')'
                            .')'
                            .'|gendador/([^/]++)(?'
                                .'|(*:2133)'
                                .'|/(?'
                                    .'|e(?'
                                        .'|ngestion(*:2158)'
                                        .'|dit(*:2170)'
                                    .')'
                                    .'|abogados(*:2188)'
                                    .'|calendario(*:2207)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|rivilegio(?'
                        .'|/([^/]++)(?'
                            .'|(*:2244)'
                            .'|/(?'
                                .'|new(*:2260)'
                                .'|edit(*:2273)'
                                .'|regenerar(*:2291)'
                            .')'
                            .'|(*:2301)'
                        .')'
                        .'|_tipousuario/([^/]++)(?'
                            .'|(*:2335)'
                            .'|/(?'
                                .'|new(*:2351)'
                                .'|edit(*:2364)'
                            .')'
                            .'|(*:2374)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|asignar/([^/]++)(*:2408)'
                    .'|s(?'
                        .'|et\\-password/reset(?:/([^/]++))?(*:2453)'
                        .'|umen/([^/]++)(?'
                            .'|(*:2478)'
                            .'|/(?'
                                .'|e(?'
                                    .'|ngestion(*:2503)'
                                    .'|dit(*:2515)'
                                .')'
                                .'|abogados(*:2533)'
                                .'|calendario(*:2552)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/sucursal/([^/]++)(?'
                    .'|(*:2586)'
                    .'|/(?'
                        .'|new(*:2602)'
                        .'|edit(*:2615)'
                    .')'
                    .'|(*:2625)'
                .')'
                .'|/t(?'
                    .'|erminos/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:2667)'
                            .'|pdf(*:2679)'
                        .')'
                        .'|(*:2689)'
                    .')'
                    .'|ramitadores/([^/]++)(?'
                        .'|(*:2722)'
                        .'|/(?'
                            .'|edit(*:2739)'
                            .'|restore(*:2755)'
                        .')'
                        .'|(*:2765)'
                    .')'
                .')'
                .'|/usuario(?'
                    .'|_(?'
                        .'|c(?'
                            .'|ategoria/([^/]++)(?'
                                .'|(*:2815)'
                                .'|/edit(*:2829)'
                                .'|(*:2838)'
                            .')'
                            .'|uenta/([^/]++)(?'
                                .'|(*:2865)'
                                .'|/edit(*:2879)'
                                .'|(*:2888)'
                            .')'
                        .')'
                        .'|no_disponible/([^/]++)(?'
                            .'|(*:2924)'
                            .'|/(?'
                                .'|new(*:2940)'
                                .'|show(*:2953)'
                                .'|edit(*:2966)'
                                .'|delete(*:2981)'
                            .')'
                        .')'
                        .'|status/([^/]++)(?'
                            .'|(*:3010)'
                            .'|/edit(*:3024)'
                            .'|(*:3033)'
                        .')'
                        .'|tipo/([^/]++)(?'
                            .'|(*:3059)'
                            .'|/edit(*:3073)'
                            .'|(*:3082)'
                        .')'
                    .')'
                    .'|/([^/]++)(?'
                        .'|(*:3105)'
                        .'|/edit(*:3119)'
                        .'|(*:3128)'
                    .')'
                .')'
                .'|/vencimiento/([^/]++)(?'
                    .'|(*:3163)'
                    .'|/edit(*:3177)'
                    .'|(*:3186)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'abogados_show', '_controller' => 'App\\Controller\\AbogadosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'abogados_edit', '_controller' => 'App\\Controller\\AbogadosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        60 => [[['_route' => 'abogados_restore', '_controller' => 'App\\Controller\\AbogadosController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        68 => [[['_route' => 'abogados_delete', '_controller' => 'App\\Controller\\AbogadosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        93 => [[['_route' => 'accion_show', '_controller' => 'App\\Controller\\AccionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'accion_edit', '_controller' => 'App\\Controller\\AccionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        113 => [[['_route' => 'accion_delete', '_controller' => 'App\\Controller\\AccionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        160 => [[['_route' => 'administrador_cuentas_show', '_controller' => 'App\\Controller\\AdministradorCuentasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'administrador_cuentas_edit', '_controller' => 'App\\Controller\\AdministradorCuentasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        191 => [[['_route' => 'administrador_cuentas_restore', '_controller' => 'App\\Controller\\AdministradorCuentasController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        200 => [[['_route' => 'administrador_cuentas_delete', '_controller' => 'App\\Controller\\AdministradorCuentasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        223 => [[['_route' => 'administradores_show', '_controller' => 'App\\Controller\\AdministradoresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'administradores_edit', '_controller' => 'App\\Controller\\AdministradoresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'administradores_restore', '_controller' => 'App\\Controller\\AdministradoresController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        263 => [[['_route' => 'administradores_delete', '_controller' => 'App\\Controller\\AdministradoresController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        289 => [[['_route' => 'administrativo_show', '_controller' => 'App\\Controller\\AdministrativoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'administrativo_edit', '_controller' => 'App\\Controller\\AdministrativoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'administrativo_restore', '_controller' => 'App\\Controller\\AdministrativoController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        329 => [[['_route' => 'administrativo_delete', '_controller' => 'App\\Controller\\AdministrativoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        359 => [[['_route' => 'agenda_show', '_controller' => 'App\\Controller\\AgendaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'agenda_resumenagendadores', '_controller' => 'App\\Controller\\AgendaController::resumenagendadores'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [[['_route' => 'agenda_resumenabogados', '_controller' => 'App\\Controller\\AgendaController::resumenabogados'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'agenda_edit', '_controller' => 'App\\Controller\\AgendaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        450 => [[['_route' => 'agenda_agendadores', '_controller' => 'App\\Controller\\AgendaController::agendadores'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [[['_route' => 'agenda_delete', '_controller' => 'App\\Controller\\AgendaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        486 => [[['_route' => 'agendadores_show', '_controller' => 'App\\Controller\\AgendadoresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => 'agendadores_edit', '_controller' => 'App\\Controller\\AgendadoresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'agendadores_restore', '_controller' => 'App\\Controller\\AgendadoresController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        526 => [[['_route' => 'agendadores_delete', '_controller' => 'App\\Controller\\AgendadoresController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        573 => [[['_route' => 'cliente_potencial_show', '_controller' => 'App\\Controller\\ClientePotencialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'cliente_potencial_edit', '_controller' => 'App\\Controller\\ClientePotencialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'cliente_potencial_delete', '_controller' => 'App\\Controller\\ClientePotencialController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        616 => [[['_route' => 'clientes_show', '_controller' => 'App\\Controller\\ClientesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        632 => [[['_route' => 'clientes_edit', '_controller' => 'App\\Controller\\ClientesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        647 => [[['_route' => 'clientes_restore', '_controller' => 'App\\Controller\\ClientesController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        656 => [[['_route' => 'clientes_delete', '_controller' => 'App\\Controller\\ClientesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        693 => [[['_route' => 'cobradores_show', '_controller' => 'App\\Controller\\CobradoresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        709 => [[['_route' => 'cobradores_edit', '_controller' => 'App\\Controller\\CobradoresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        724 => [[['_route' => 'cobradores_restore', '_controller' => 'App\\Controller\\CobradoresController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        733 => [[['_route' => 'cobradores_delete', '_controller' => 'App\\Controller\\CobradoresController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        757 => [[['_route' => 'cobranza_show', '_controller' => 'App\\Controller\\CobranzaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        772 => [[['_route' => 'cobranza_new', '_controller' => 'App\\Controller\\CobranzaController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        784 => [[['_route' => 'cobranza_edit', '_controller' => 'App\\Controller\\CobranzaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        793 => [[['_route' => 'cobranza_delete', '_controller' => 'App\\Controller\\CobranzaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        829 => [[['_route' => 'configuracion_show', '_controller' => 'App\\Controller\\ConfiguracionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        842 => [[['_route' => 'configuracion_edit', '_controller' => 'App\\Controller\\ConfiguracionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        850 => [[['_route' => 'configuracion_delete', '_controller' => 'App\\Controller\\ConfiguracionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        879 => [[['_route' => 'contrato_show', '_controller' => 'App\\Controller\\ContratoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        898 => [[['_route' => 'contrato_new_rol', '_controller' => 'App\\Controller\\ContratoController::newRol'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        913 => [[['_route' => 'contrato_del_rol', '_controller' => 'App\\Controller\\ContratoController::delRol'], ['id'], ['DELETE' => 0], null, false, false, null]],
        925 => [[['_route' => 'contrato_edit', '_controller' => 'App\\Controller\\ContratoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        942 => [[['_route' => 'contrato_finalizar', '_controller' => 'App\\Controller\\ContratoController::finalizar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        953 => [[['_route' => 'contrato_pdf', '_controller' => 'App\\Controller\\ContratoController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        969 => [[['_route' => 'contrato_terminar', '_controller' => 'App\\Controller\\ContratoController::terminar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        978 => [[['_route' => 'contrato_delete', '_controller' => 'App\\Controller\\ContratoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        993 => [[['_route' => 'contrato_rol_index', '_controller' => 'App\\Controller\\ContratoRolController::index'], [], ['GET' => 0], null, true, false, null]],
        1013 => [[['_route' => 'contrato_rol_show', '_controller' => 'App\\Controller\\ContratoRolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1027 => [[['_route' => 'contrato_rol_edit', '_controller' => 'App\\Controller\\ContratoRolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1036 => [[['_route' => 'contrato_rol_delete', '_controller' => 'App\\Controller\\ContratoRolController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1067 => [[['_route' => 'cuenta_show', '_controller' => 'App\\Controller\\CuentaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1081 => [[['_route' => 'cuenta_edit', '_controller' => 'App\\Controller\\CuentaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1090 => [[['_route' => 'cuenta_delete', '_controller' => 'App\\Controller\\CuentaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1128 => [[['_route' => 'desconoce_edit', '_controller' => 'App\\Controller\\DesconoceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1137 => [[['_route' => 'desconoce_show', '_controller' => 'App\\Controller\\DesconoceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1167 => [[['_route' => 'empresa_show', '_controller' => 'App\\Controller\\EmpresaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1181 => [[['_route' => 'empresa_edit', '_controller' => 'App\\Controller\\EmpresaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1190 => [[['_route' => 'empresa_delete', '_controller' => 'App\\Controller\\EmpresaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1222 => [[['_route' => 'gestionar_show', '_controller' => 'App\\Controller\\GestionarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1236 => [[['_route' => 'gestionar_edit', '_controller' => 'App\\Controller\\GestionarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1245 => [[['_route' => 'gestionar_delete', '_controller' => 'App\\Controller\\GestionarController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1279 => [[['_route' => 'importacion_show', '_controller' => 'App\\Controller\\ImportacionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1293 => [[['_route' => 'importacion_edit', '_controller' => 'App\\Controller\\ImportacionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1302 => [[['_route' => 'importacion_delete', '_controller' => 'App\\Controller\\ImportacionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1341 => [[['_route' => 'jefe_abogados_show', '_controller' => 'App\\Controller\\JefeAbogadosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1358 => [[['_route' => 'jefe_abogados_edit', '_controller' => 'App\\Controller\\JefeAbogadosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1374 => [[['_route' => 'jefe_abogados_restore', '_controller' => 'App\\Controller\\JefeAbogadosController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        1384 => [[['_route' => 'jefe_abogados_delete', '_controller' => 'App\\Controller\\JefeAbogadosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1414 => [[['_route' => 'jefe_procesos_show', '_controller' => 'App\\Controller\\JefeProcesosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1431 => [[['_route' => 'jefe_procesos_edit', '_controller' => 'App\\Controller\\JefeProcesosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1447 => [[['_route' => 'jefe_procesos_restore', '_controller' => 'App\\Controller\\JefeProcesosController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        1457 => [[['_route' => 'jefe_procesos_delete', '_controller' => 'App\\Controller\\JefeProcesosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1500 => [[['_route' => 'menu_cabezera_show', '_controller' => 'App\\Controller\\MenuCabezeraController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1514 => [[['_route' => 'menu_cabezera_edit', '_controller' => 'App\\Controller\\MenuCabezeraController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1523 => [[['_route' => 'menu_cabezera_delete', '_controller' => 'App\\Controller\\MenuCabezeraController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1545 => [[['_route' => 'menu_index', '_controller' => 'App\\Controller\\MenuController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1561 => [[['_route' => 'menu_new', '_controller' => 'App\\Controller\\MenuController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1574 => [[['_route' => 'menu_edit', '_controller' => 'App\\Controller\\MenuController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1584 => [[['_route' => 'menu_delete', '_controller' => 'App\\Controller\\MenuController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1614 => [[['_route' => 'modulo_edit', '_controller' => 'App\\Controller\\ModuloController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1640 => [[['_route' => 'multas_view', '_controller' => 'App\\Controller\\MultasController::view'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1656 => [[['_route' => 'multa_new', '_controller' => 'App\\Controller\\MultasController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1669 => [[['_route' => 'multa_edit', '_controller' => 'App\\Controller\\MultasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1704 => [[['_route' => 'nocontesta_show', '_controller' => 'App\\Controller\\NocontestaController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1726 => [[['_route' => 'nocontrata_show', '_controller' => 'App\\Controller\\NocontrataController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1771 => [[['_route' => 'pago_canal_show', '_controller' => 'App\\Controller\\PagoCanalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1785 => [[['_route' => 'pago_canal_edit', '_controller' => 'App\\Controller\\PagoCanalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1794 => [[['_route' => 'pago_canal_delete', '_controller' => 'App\\Controller\\PagoCanalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1820 => [[['_route' => 'pago_tipo_show', '_controller' => 'App\\Controller\\PagoTipoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1834 => [[['_route' => 'pago_tipo_edit', '_controller' => 'App\\Controller\\PagoTipoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1843 => [[['_route' => 'pago_tipo_delete', '_controller' => 'App\\Controller\\PagoTipoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1866 => [[['_route' => 'pago_show', '_controller' => 'App\\Controller\\PagoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1890 => [[['_route' => 'verpagos_index', '_controller' => 'App\\Controller\\PagoController::verpagos'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1904 => [[['_route' => 'verpagos_view', '_controller' => 'App\\Controller\\PagoController::verpagosShow'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1926 => [[['_route' => 'detallepagos_index', '_controller' => 'App\\Controller\\PagoController::detallepagos'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1938 => [[['_route' => 'pago_new', '_controller' => 'App\\Controller\\PagoController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1951 => [[['_route' => 'pago_edit', '_controller' => 'App\\Controller\\PagoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1961 => [[['_route' => 'pago_delete', '_controller' => 'App\\Controller\\PagoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1986 => [[['_route' => 'pais_show', '_controller' => 'App\\Controller\\PaisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2000 => [[['_route' => 'pais_edit', '_controller' => 'App\\Controller\\PaisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2009 => [[['_route' => 'pais_delete', '_controller' => 'App\\Controller\\PaisController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2045 => [[['_route' => 'panel_abogado_new', '_controller' => 'App\\Controller\\PanelAbogadoController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2065 => [[['_route' => 'panel_abogado_del_rol', '_controller' => 'App\\Controller\\PanelAbogadoController::delRol'], ['id'], ['DELETE' => 0], null, false, false, null]],
        2082 => [[['_route' => 'panel_abogado_contrata', '_controller' => 'App\\Controller\\PanelAbogadoController::contrata'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2102 => [[['_route' => 'panel_abogado_no_contrata', '_controller' => 'App\\Controller\\PanelAbogadoController::noContrata'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2133 => [[['_route' => 'panel_agendador_new', '_controller' => 'App\\Controller\\PanelAgendadorController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2158 => [[['_route' => 'panel_agendador_engestion', '_controller' => 'App\\Controller\\PanelAgendadorController::engestion'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2170 => [[['_route' => 'panel_agendador_edit', '_controller' => 'App\\Controller\\PanelAgendadorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2188 => [[['_route' => 'panel_agendador_abogados', '_controller' => 'App\\Controller\\PanelAgendadorController::abogados'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2207 => [[['_route' => 'panel_agendador_calendario', '_controller' => 'App\\Controller\\PanelAgendadorController::calendario'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2244 => [[['_route' => 'privilegio_index', '_controller' => 'App\\Controller\\PrivilegioController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2260 => [[['_route' => 'privilegio_new', '_controller' => 'App\\Controller\\PrivilegioController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2273 => [[['_route' => 'privilegio_edit', '_controller' => 'App\\Controller\\PrivilegioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2291 => [[['_route' => 'privilegio_regenerar', '_controller' => 'App\\Controller\\PrivilegioController::regenerar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2301 => [
            [['_route' => 'privilegio_show', '_controller' => 'App\\Controller\\PrivilegioController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'privilegio_delete', '_controller' => 'App\\Controller\\PrivilegioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        2335 => [[['_route' => 'privilegio_tipousuario_index', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2351 => [[['_route' => 'privilegio_tipousuario_new', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2364 => [[['_route' => 'privilegio_tipousuario_edit', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2374 => [[['_route' => 'privilegio_tipousuario_delete', '_controller' => 'App\\Controller\\PrivilegioTipousuarioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2408 => [[['_route' => 'reasignar_show', '_controller' => 'App\\Controller\\ReasignarController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2453 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        2478 => [[['_route' => 'resumen_new', '_controller' => 'App\\Controller\\ResumenController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2503 => [[['_route' => 'resumen_engestion', '_controller' => 'App\\Controller\\ResumenController::engestion'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2515 => [[['_route' => 'resumen_edit', '_controller' => 'App\\Controller\\ResumenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2533 => [[['_route' => 'resumen_abogados', '_controller' => 'App\\Controller\\ResumenController::abogados'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2552 => [[['_route' => 'resumen_calendario', '_controller' => 'App\\Controller\\ResumenController::calendario'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2586 => [[['_route' => 'sucursal_index', '_controller' => 'App\\Controller\\SucursalController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2602 => [[['_route' => 'sucursal_new', '_controller' => 'App\\Controller\\SucursalController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2615 => [[['_route' => 'sucursal_edit', '_controller' => 'App\\Controller\\SucursalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2625 => [[['_route' => 'sucursal_delete', '_controller' => 'App\\Controller\\SucursalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2667 => [[['_route' => 'terminos_edit', '_controller' => 'App\\Controller\\TerminosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2679 => [[['_route' => 'terminos_pdf', '_controller' => 'App\\Controller\\TerminosController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2689 => [[['_route' => 'terminos_show', '_controller' => 'App\\Controller\\TerminosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2722 => [[['_route' => 'tramitadores_show', '_controller' => 'App\\Controller\\TramitadoresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2739 => [[['_route' => 'tramitadores_edit', '_controller' => 'App\\Controller\\TramitadoresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2755 => [[['_route' => 'tramitadores_restore', '_controller' => 'App\\Controller\\TramitadoresController::restore'], ['id'], ['GET' => 0], null, false, false, null]],
        2765 => [[['_route' => 'tramitadores_delete', '_controller' => 'App\\Controller\\TramitadoresController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2815 => [[['_route' => 'usuario_categoria_show', '_controller' => 'App\\Controller\\UsuarioCategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2829 => [[['_route' => 'usuario_categoria_edit', '_controller' => 'App\\Controller\\UsuarioCategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2838 => [[['_route' => 'usuario_categoria_delete', '_controller' => 'App\\Controller\\UsuarioCategoriaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2865 => [[['_route' => 'usuario_cuenta_show', '_controller' => 'App\\Controller\\UsuarioCuentaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2879 => [[['_route' => 'usuario_cuenta_edit', '_controller' => 'App\\Controller\\UsuarioCuentaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2888 => [[['_route' => 'usuario_cuenta_delete', '_controller' => 'App\\Controller\\UsuarioCuentaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2924 => [[['_route' => 'usuario_no_disponible_index', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2940 => [[['_route' => 'usuario_no_disponible_new', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2953 => [[['_route' => 'usuario_no_disponible_show', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        2966 => [[['_route' => 'usuario_no_disponible_edit', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2981 => [[['_route' => 'usuario_no_disponible_delete', '_controller' => 'App\\Controller\\UsuarioNoDisponibleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3010 => [[['_route' => 'usuario_status_show', '_controller' => 'App\\Controller\\UsuarioStatusController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3024 => [[['_route' => 'usuario_status_edit', '_controller' => 'App\\Controller\\UsuarioStatusController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3033 => [[['_route' => 'usuario_status_delete', '_controller' => 'App\\Controller\\UsuarioStatusController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3059 => [[['_route' => 'usuario_tipo_show', '_controller' => 'App\\Controller\\UsuarioTipoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3073 => [[['_route' => 'usuario_tipo_edit', '_controller' => 'App\\Controller\\UsuarioTipoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3082 => [[['_route' => 'usuario_tipo_delete', '_controller' => 'App\\Controller\\UsuarioTipoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3105 => [[['_route' => 'usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3119 => [[['_route' => 'usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3128 => [[['_route' => 'usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3163 => [[['_route' => 'vencimiento_show', '_controller' => 'App\\Controller\\VencimientoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3177 => [[['_route' => 'vencimiento_edit', '_controller' => 'App\\Controller\\VencimientoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3186 => [
            [['_route' => 'vencimiento_delete', '_controller' => 'App\\Controller\\VencimientoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
