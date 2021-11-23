<?php

namespace ContainerJUjAwmK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class App_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\AbogadosController' => 'getAbogadosControllerService',
            'App\\Controller\\AccionController' => 'getAccionControllerService',
            'App\\Controller\\AdministradorCuentasController' => 'getAdministradorCuentasControllerService',
            'App\\Controller\\AdministradoresController' => 'getAdministradoresControllerService',
            'App\\Controller\\AdministrativoController' => 'getAdministrativoControllerService',
            'App\\Controller\\AgendaController' => 'getAgendaControllerService',
            'App\\Controller\\AgendadoresController' => 'getAgendadoresControllerService',
            'App\\Controller\\CampaniaController' => 'getCampaniaControllerService',
            'App\\Controller\\ChangecompController' => 'getChangecompControllerService',
            'App\\Controller\\ClientePotencialController' => 'getClientePotencialControllerService',
            'App\\Controller\\ClientesController' => 'getClientesControllerService',
            'App\\Controller\\CobradoresController' => 'getCobradoresControllerService',
            'App\\Controller\\CobranzaController' => 'getCobranzaControllerService',
            'App\\Controller\\ConfiguracionController' => 'getConfiguracionControllerService',
            'App\\Controller\\ContratoController' => 'getContratoControllerService',
            'App\\Controller\\ContratoRolController' => 'getContratoRolControllerService',
            'App\\Controller\\CuentaController' => 'getCuentaControllerService',
            'App\\Controller\\DashboardController' => 'getDashboardControllerService',
            'App\\Controller\\DesconoceController' => 'getDesconoceControllerService',
            'App\\Controller\\EmpresaController' => 'getEmpresaControllerService',
            'App\\Controller\\GestionarController' => 'getGestionarControllerService',
            'App\\Controller\\ImportacionController' => 'getImportacionControllerService',
            'App\\Controller\\JefeAbogadosController' => 'getJefeAbogadosControllerService',
            'App\\Controller\\JefeProcesosController' => 'getJefeProcesosControllerService',
            'App\\Controller\\LoginController' => 'getLoginControllerService',
            'App\\Controller\\MenuCabezeraController' => 'getMenuCabezeraControllerService',
            'App\\Controller\\MenuController' => 'getMenuControllerService',
            'App\\Controller\\MisDatosController' => 'getMisDatosControllerService',
            'App\\Controller\\ModuloController' => 'getModuloControllerService',
            'App\\Controller\\MultasController' => 'getMultasControllerService',
            'App\\Controller\\NocontestaController' => 'getNocontestaControllerService',
            'App\\Controller\\NocontrataController' => 'getNocontrataControllerService',
            'App\\Controller\\PagoCanalController' => 'getPagoCanalControllerService',
            'App\\Controller\\PagoController' => 'getPagoControllerService',
            'App\\Controller\\PagoTipoController' => 'getPagoTipoControllerService',
            'App\\Controller\\PaisController' => 'getPaisControllerService',
            'App\\Controller\\PanelAbogadoController' => 'getPanelAbogadoControllerService',
            'App\\Controller\\PanelAgendadorController' => 'getPanelAgendadorControllerService',
            'App\\Controller\\PrivilegioController' => 'getPrivilegioControllerService',
            'App\\Controller\\PrivilegioTipousuarioController' => 'getPrivilegioTipousuarioControllerService',
            'App\\Controller\\ReasignarController' => 'getReasignarControllerService',
            'App\\Controller\\ResetPasswordController' => 'getResetPasswordControllerService',
            'App\\Controller\\ResumenController' => 'getResumenControllerService',
            'App\\Controller\\SucursalController' => 'getSucursalControllerService',
            'App\\Controller\\TerminosController' => 'getTerminosControllerService',
            'App\\Controller\\TramitadoresController' => 'getTramitadoresControllerService',
            'App\\Controller\\UsuarioCategoriaController' => 'getUsuarioCategoriaControllerService',
            'App\\Controller\\UsuarioController' => 'getUsuarioControllerService',
            'App\\Controller\\UsuarioCuentaController' => 'getUsuarioCuentaControllerService',
            'App\\Controller\\UsuarioNoDisponibleController' => 'getUsuarioNoDisponibleControllerService',
            'App\\Controller\\UsuarioStatusController' => 'getUsuarioStatusControllerService',
            'App\\Controller\\UsuarioTipoController' => 'getUsuarioTipoControllerService',
            'App\\Controller\\VencimientoController' => 'getVencimientoControllerService',
            'App\\Controller\\WebhookController' => 'getWebhookControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'http_kernel' => 'getHttpKernelService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_snappy.image' => 'getKnpSnappy_ImageService',
            'knp_snappy.pdf' => 'getKnpSnappy_PdfService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /*
     * Gets the public 'App\Controller\AbogadosController' shared autowired service.
     *
     * @return \App\Controller\AbogadosController
     */
    protected function getAbogadosControllerService()
    {
        $this->services['App\\Controller\\AbogadosController'] = $instance = new \App\Controller\AbogadosController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\AbogadosController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\AccionController' shared autowired service.
     *
     * @return \App\Controller\AccionController
     */
    protected function getAccionControllerService()
    {
        $this->services['App\\Controller\\AccionController'] = $instance = new \App\Controller\AccionController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\AccionController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\AdministradorCuentasController' shared autowired service.
     *
     * @return \App\Controller\AdministradorCuentasController
     */
    protected function getAdministradorCuentasControllerService()
    {
        $this->services['App\\Controller\\AdministradorCuentasController'] = $instance = new \App\Controller\AdministradorCuentasController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\AdministradorCuentasController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\AdministradoresController' shared autowired service.
     *
     * @return \App\Controller\AdministradoresController
     */
    protected function getAdministradoresControllerService()
    {
        $this->services['App\\Controller\\AdministradoresController'] = $instance = new \App\Controller\AdministradoresController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\AdministradoresController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\AdministrativoController' shared autowired service.
     *
     * @return \App\Controller\AdministrativoController
     */
    protected function getAdministrativoControllerService()
    {
        $this->services['App\\Controller\\AdministrativoController'] = $instance = new \App\Controller\AdministrativoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\AdministrativoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\AgendaController' shared autowired service.
     *
     * @return \App\Controller\AgendaController
     */
    protected function getAgendaControllerService()
    {
        $this->services['App\\Controller\\AgendaController'] = $instance = new \App\Controller\AgendaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\AgendaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\AgendadoresController' shared autowired service.
     *
     * @return \App\Controller\AgendadoresController
     */
    protected function getAgendadoresControllerService()
    {
        $this->services['App\\Controller\\AgendadoresController'] = $instance = new \App\Controller\AgendadoresController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\AgendadoresController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\CampaniaController' shared autowired service.
     *
     * @return \App\Controller\CampaniaController
     */
    protected function getCampaniaControllerService()
    {
        $this->services['App\\Controller\\CampaniaController'] = $instance = new \App\Controller\CampaniaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\CampaniaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ChangecompController' shared autowired service.
     *
     * @return \App\Controller\ChangecompController
     */
    protected function getChangecompControllerService()
    {
        $this->services['App\\Controller\\ChangecompController'] = $instance = new \App\Controller\ChangecompController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ChangecompController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ClientePotencialController' shared autowired service.
     *
     * @return \App\Controller\ClientePotencialController
     */
    protected function getClientePotencialControllerService()
    {
        $this->services['App\\Controller\\ClientePotencialController'] = $instance = new \App\Controller\ClientePotencialController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ClientePotencialController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ClientesController' shared autowired service.
     *
     * @return \App\Controller\ClientesController
     */
    protected function getClientesControllerService()
    {
        $this->services['App\\Controller\\ClientesController'] = $instance = new \App\Controller\ClientesController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ClientesController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\CobradoresController' shared autowired service.
     *
     * @return \App\Controller\CobradoresController
     */
    protected function getCobradoresControllerService()
    {
        $this->services['App\\Controller\\CobradoresController'] = $instance = new \App\Controller\CobradoresController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\CobradoresController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\CobranzaController' shared autowired service.
     *
     * @return \App\Controller\CobranzaController
     */
    protected function getCobranzaControllerService()
    {
        $this->services['App\\Controller\\CobranzaController'] = $instance = new \App\Controller\CobranzaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\CobranzaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ConfiguracionController' shared autowired service.
     *
     * @return \App\Controller\ConfiguracionController
     */
    protected function getConfiguracionControllerService()
    {
        $this->services['App\\Controller\\ConfiguracionController'] = $instance = new \App\Controller\ConfiguracionController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ConfiguracionController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ContratoController' shared autowired service.
     *
     * @return \App\Controller\ContratoController
     */
    protected function getContratoControllerService()
    {
        $this->services['App\\Controller\\ContratoController'] = $instance = new \App\Controller\ContratoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ContratoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ContratoRolController' shared autowired service.
     *
     * @return \App\Controller\ContratoRolController
     */
    protected function getContratoRolControllerService()
    {
        $this->services['App\\Controller\\ContratoRolController'] = $instance = new \App\Controller\ContratoRolController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ContratoRolController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\CuentaController' shared autowired service.
     *
     * @return \App\Controller\CuentaController
     */
    protected function getCuentaControllerService()
    {
        $this->services['App\\Controller\\CuentaController'] = $instance = new \App\Controller\CuentaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\CuentaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\DashboardController' shared autowired service.
     *
     * @return \App\Controller\DashboardController
     */
    protected function getDashboardControllerService()
    {
        $this->services['App\\Controller\\DashboardController'] = $instance = new \App\Controller\DashboardController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\DashboardController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\DesconoceController' shared autowired service.
     *
     * @return \App\Controller\DesconoceController
     */
    protected function getDesconoceControllerService()
    {
        $this->services['App\\Controller\\DesconoceController'] = $instance = new \App\Controller\DesconoceController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\DesconoceController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\EmpresaController' shared autowired service.
     *
     * @return \App\Controller\EmpresaController
     */
    protected function getEmpresaControllerService()
    {
        $this->services['App\\Controller\\EmpresaController'] = $instance = new \App\Controller\EmpresaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\EmpresaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\GestionarController' shared autowired service.
     *
     * @return \App\Controller\GestionarController
     */
    protected function getGestionarControllerService()
    {
        $this->services['App\\Controller\\GestionarController'] = $instance = new \App\Controller\GestionarController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\GestionarController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ImportacionController' shared autowired service.
     *
     * @return \App\Controller\ImportacionController
     */
    protected function getImportacionControllerService()
    {
        $this->services['App\\Controller\\ImportacionController'] = $instance = new \App\Controller\ImportacionController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ImportacionController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\JefeAbogadosController' shared autowired service.
     *
     * @return \App\Controller\JefeAbogadosController
     */
    protected function getJefeAbogadosControllerService()
    {
        $this->services['App\\Controller\\JefeAbogadosController'] = $instance = new \App\Controller\JefeAbogadosController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\JefeAbogadosController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\JefeProcesosController' shared autowired service.
     *
     * @return \App\Controller\JefeProcesosController
     */
    protected function getJefeProcesosControllerService()
    {
        $this->services['App\\Controller\\JefeProcesosController'] = $instance = new \App\Controller\JefeProcesosController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\JefeProcesosController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\LoginController' shared autowired service.
     *
     * @return \App\Controller\LoginController
     */
    protected function getLoginControllerService()
    {
        $this->services['App\\Controller\\LoginController'] = $instance = new \App\Controller\LoginController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\LoginController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\MenuCabezeraController' shared autowired service.
     *
     * @return \App\Controller\MenuCabezeraController
     */
    protected function getMenuCabezeraControllerService()
    {
        $this->services['App\\Controller\\MenuCabezeraController'] = $instance = new \App\Controller\MenuCabezeraController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\MenuCabezeraController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\MenuController' shared autowired service.
     *
     * @return \App\Controller\MenuController
     */
    protected function getMenuControllerService()
    {
        $this->services['App\\Controller\\MenuController'] = $instance = new \App\Controller\MenuController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\MenuController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\MisDatosController' shared autowired service.
     *
     * @return \App\Controller\MisDatosController
     */
    protected function getMisDatosControllerService()
    {
        $this->services['App\\Controller\\MisDatosController'] = $instance = new \App\Controller\MisDatosController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\MisDatosController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ModuloController' shared autowired service.
     *
     * @return \App\Controller\ModuloController
     */
    protected function getModuloControllerService()
    {
        $this->services['App\\Controller\\ModuloController'] = $instance = new \App\Controller\ModuloController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ModuloController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\MultasController' shared autowired service.
     *
     * @return \App\Controller\MultasController
     */
    protected function getMultasControllerService()
    {
        $this->services['App\\Controller\\MultasController'] = $instance = new \App\Controller\MultasController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\MultasController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\NocontestaController' shared autowired service.
     *
     * @return \App\Controller\NocontestaController
     */
    protected function getNocontestaControllerService()
    {
        $this->services['App\\Controller\\NocontestaController'] = $instance = new \App\Controller\NocontestaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\NocontestaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\NocontrataController' shared autowired service.
     *
     * @return \App\Controller\NocontrataController
     */
    protected function getNocontrataControllerService()
    {
        $this->services['App\\Controller\\NocontrataController'] = $instance = new \App\Controller\NocontrataController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\NocontrataController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PagoCanalController' shared autowired service.
     *
     * @return \App\Controller\PagoCanalController
     */
    protected function getPagoCanalControllerService()
    {
        $this->services['App\\Controller\\PagoCanalController'] = $instance = new \App\Controller\PagoCanalController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PagoCanalController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PagoController' shared autowired service.
     *
     * @return \App\Controller\PagoController
     */
    protected function getPagoControllerService()
    {
        $this->services['App\\Controller\\PagoController'] = $instance = new \App\Controller\PagoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PagoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PagoTipoController' shared autowired service.
     *
     * @return \App\Controller\PagoTipoController
     */
    protected function getPagoTipoControllerService()
    {
        $this->services['App\\Controller\\PagoTipoController'] = $instance = new \App\Controller\PagoTipoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PagoTipoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PaisController' shared autowired service.
     *
     * @return \App\Controller\PaisController
     */
    protected function getPaisControllerService()
    {
        $this->services['App\\Controller\\PaisController'] = $instance = new \App\Controller\PaisController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PaisController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PanelAbogadoController' shared autowired service.
     *
     * @return \App\Controller\PanelAbogadoController
     */
    protected function getPanelAbogadoControllerService()
    {
        $this->services['App\\Controller\\PanelAbogadoController'] = $instance = new \App\Controller\PanelAbogadoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PanelAbogadoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PanelAgendadorController' shared autowired service.
     *
     * @return \App\Controller\PanelAgendadorController
     */
    protected function getPanelAgendadorControllerService()
    {
        $this->services['App\\Controller\\PanelAgendadorController'] = $instance = new \App\Controller\PanelAgendadorController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PanelAgendadorController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PrivilegioController' shared autowired service.
     *
     * @return \App\Controller\PrivilegioController
     */
    protected function getPrivilegioControllerService()
    {
        $this->services['App\\Controller\\PrivilegioController'] = $instance = new \App\Controller\PrivilegioController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PrivilegioController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\PrivilegioTipousuarioController' shared autowired service.
     *
     * @return \App\Controller\PrivilegioTipousuarioController
     */
    protected function getPrivilegioTipousuarioControllerService()
    {
        $this->services['App\\Controller\\PrivilegioTipousuarioController'] = $instance = new \App\Controller\PrivilegioTipousuarioController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\PrivilegioTipousuarioController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ReasignarController' shared autowired service.
     *
     * @return \App\Controller\ReasignarController
     */
    protected function getReasignarControllerService()
    {
        $this->services['App\\Controller\\ReasignarController'] = $instance = new \App\Controller\ReasignarController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ReasignarController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ResetPasswordController' shared autowired service.
     *
     * @return \App\Controller\ResetPasswordController
     */
    protected function getResetPasswordControllerService()
    {
        $this->services['App\\Controller\\ResetPasswordController'] = $instance = new \App\Controller\ResetPasswordController(new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator($this->getEnv('APP_SECRET'), new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator()), ($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->getSymfonycasts_ResetPassword_CleanerService()), ($this->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $this->getResetPasswordRequestRepositoryService()), 3600, 3600));

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ResetPasswordController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\ResumenController' shared autowired service.
     *
     * @return \App\Controller\ResumenController
     */
    protected function getResumenControllerService()
    {
        $this->services['App\\Controller\\ResumenController'] = $instance = new \App\Controller\ResumenController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\ResumenController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\SucursalController' shared autowired service.
     *
     * @return \App\Controller\SucursalController
     */
    protected function getSucursalControllerService()
    {
        $this->services['App\\Controller\\SucursalController'] = $instance = new \App\Controller\SucursalController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\SucursalController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\TerminosController' shared autowired service.
     *
     * @return \App\Controller\TerminosController
     */
    protected function getTerminosControllerService()
    {
        $this->services['App\\Controller\\TerminosController'] = $instance = new \App\Controller\TerminosController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\TerminosController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\TramitadoresController' shared autowired service.
     *
     * @return \App\Controller\TramitadoresController
     */
    protected function getTramitadoresControllerService()
    {
        $this->services['App\\Controller\\TramitadoresController'] = $instance = new \App\Controller\TramitadoresController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\TramitadoresController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\UsuarioCategoriaController' shared autowired service.
     *
     * @return \App\Controller\UsuarioCategoriaController
     */
    protected function getUsuarioCategoriaControllerService()
    {
        $this->services['App\\Controller\\UsuarioCategoriaController'] = $instance = new \App\Controller\UsuarioCategoriaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\UsuarioCategoriaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\UsuarioController' shared autowired service.
     *
     * @return \App\Controller\UsuarioController
     */
    protected function getUsuarioControllerService()
    {
        $this->services['App\\Controller\\UsuarioController'] = $instance = new \App\Controller\UsuarioController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\UsuarioController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\UsuarioCuentaController' shared autowired service.
     *
     * @return \App\Controller\UsuarioCuentaController
     */
    protected function getUsuarioCuentaControllerService()
    {
        $this->services['App\\Controller\\UsuarioCuentaController'] = $instance = new \App\Controller\UsuarioCuentaController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\UsuarioCuentaController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\UsuarioNoDisponibleController' shared autowired service.
     *
     * @return \App\Controller\UsuarioNoDisponibleController
     */
    protected function getUsuarioNoDisponibleControllerService()
    {
        $this->services['App\\Controller\\UsuarioNoDisponibleController'] = $instance = new \App\Controller\UsuarioNoDisponibleController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\UsuarioNoDisponibleController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\UsuarioStatusController' shared autowired service.
     *
     * @return \App\Controller\UsuarioStatusController
     */
    protected function getUsuarioStatusControllerService()
    {
        $this->services['App\\Controller\\UsuarioStatusController'] = $instance = new \App\Controller\UsuarioStatusController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\UsuarioStatusController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\UsuarioTipoController' shared autowired service.
     *
     * @return \App\Controller\UsuarioTipoController
     */
    protected function getUsuarioTipoControllerService()
    {
        $this->services['App\\Controller\\UsuarioTipoController'] = $instance = new \App\Controller\UsuarioTipoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\UsuarioTipoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\VencimientoController' shared autowired service.
     *
     * @return \App\Controller\VencimientoController
     */
    protected function getVencimientoControllerService()
    {
        $this->services['App\\Controller\\VencimientoController'] = $instance = new \App\Controller\VencimientoController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\VencimientoController', $this));

        return $instance;
    }

    /*
     * Gets the public 'App\Controller\WebhookController' shared autowired service.
     *
     * @return \App\Controller\WebhookController
     */
    protected function getWebhookControllerService()
    {
        $this->services['App\\Controller\\WebhookController'] = $instance = new \App\Controller\WebhookController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\WebhookController', $this));

        return $instance;
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /*
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /*
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('TYdQEsVCTT', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /*
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())]);
    }

    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService())]);
    }

    /*
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Z76rG4wPm9', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService())]);
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 2 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 3 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 4 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
            yield 5 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
        }, 6), false, ($this->targetDir.''.'/App_KernelProdContainerDeprecations.log'));
    }

    /*
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Command\\AsignarLeadsCommand' => ['privates', 'App\\Command\\AsignarLeadsCommand', 'getAsignarLeadsCommandService', false],
            'App\\Command\\FondoFijoCommand' => ['privates', 'App\\Command\\FondoFijoCommand', 'getFondoFijoCommandService', false],
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', false],
            'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand' => ['privates', 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand', 'getResetPasswordRemoveExpiredCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'App\\Command\\AsignarLeadsCommand' => 'App\\Command\\AsignarLeadsCommand',
            'App\\Command\\FondoFijoCommand' => 'App\\Command\\FondoFijoCommand',
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand' => 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['app:asignar-leads' => 'App\\Command\\AsignarLeadsCommand', 'fondo-fijo' => 'App\\Command\\FondoFijoCommand', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'security:encode-password' => 'security.command.user_password_encoder', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'reset-password:remove-expired' => 'SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email']);
    }

    /*
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()));
        $c = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'\\src\\Entity')]), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCacheImpl($b);
        $a->setQueryCacheImpl($b);
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())));
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\AccionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'App\\Repository\\AgendaObservacionRepository' => ['privates', 'App\\Repository\\AgendaObservacionRepository', 'getAgendaObservacionRepositoryService', false],
            'App\\Repository\\AgendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'App\\Repository\\AgendaRolRepository' => ['privates', 'App\\Repository\\AgendaRolRepository', 'getAgendaRolRepositoryService', false],
            'App\\Repository\\AgendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'App\\Repository\\ClientePotencialRepository' => ['privates', 'App\\Repository\\ClientePotencialRepository', 'getClientePotencialRepositoryService', false],
            'App\\Repository\\ConfiguracionRepository' => ['privates', 'App\\Repository\\ConfiguracionRepository', 'getConfiguracionRepositoryService', false],
            'App\\Repository\\ContratoAnexoRepository' => ['privates', 'App\\Repository\\ContratoAnexoRepository', 'getContratoAnexoRepositoryService', false],
            'App\\Repository\\ContratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'App\\Repository\\ContratoRolRepository' => ['privates', 'App\\Repository\\ContratoRolRepository', 'getContratoRolRepositoryService', false],
            'App\\Repository\\ContratoTramitadorRepository' => ['privates', 'App\\Repository\\ContratoTramitadorRepository', 'getContratoTramitadorRepositoryService', false],
            'App\\Repository\\ContratoVehiculoRepository' => ['privates', 'App\\Repository\\ContratoVehiculoRepository', 'getContratoVehiculoRepositoryService', false],
            'App\\Repository\\ContratoViviendaRepository' => ['privates', 'App\\Repository\\ContratoViviendaRepository', 'getContratoViviendaRepositoryService', false],
            'App\\Repository\\CuentaCorrienteRepository' => ['privates', 'App\\Repository\\CuentaCorrienteRepository', 'getCuentaCorrienteRepositoryService', false],
            'App\\Repository\\CuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'App\\Repository\\CuentasRepository' => ['privates', 'App\\Repository\\CuentasRepository', 'getCuentasRepositoryService', false],
            'App\\Repository\\CuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'App\\Repository\\CuotasRepository' => ['privates', 'App\\Repository\\CuotasRepository', 'getCuotasRepositoryService', false],
            'App\\Repository\\DiasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'App\\Repository\\EmpresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', false],
            'App\\Repository\\EscrituraRepository' => ['privates', 'App\\Repository\\EscrituraRepository', 'getEscrituraRepositoryService', false],
            'App\\Repository\\EstadoCivilRepository' => ['privates', 'App\\Repository\\EstadoCivilRepository', 'getEstadoCivilRepositoryService', false],
            'App\\Repository\\EstrategiaJuridicaRepository' => ['privates', 'App\\Repository\\EstrategiaJuridicaRepository', 'getEstrategiaJuridicaRepositoryService', false],
            'App\\Repository\\GestionarRepository' => ['privates', 'App\\Repository\\GestionarRepository', 'getGestionarRepositoryService', false],
            'App\\Repository\\ImportacionRepository' => ['privates', 'App\\Repository\\ImportacionRepository', 'getImportacionRepositoryService', false],
            'App\\Repository\\JuzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
            'App\\Repository\\MenuCabezeraRepository' => ['privates', 'App\\Repository\\MenuCabezeraRepository', 'getMenuCabezeraRepositoryService', false],
            'App\\Repository\\MenuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', false],
            'App\\Repository\\ModuloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'App\\Repository\\ModuloRepository' => ['privates', 'App\\Repository\\ModuloRepository', 'getModuloRepositoryService', false],
            'App\\Repository\\PagoCanalRepository' => ['privates', 'App\\Repository\\PagoCanalRepository', 'getPagoCanalRepositoryService', false],
            'App\\Repository\\PagoCuotasRepository' => ['privates', 'App\\Repository\\PagoCuotasRepository', 'getPagoCuotasRepositoryService', false],
            'App\\Repository\\PagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', false],
            'App\\Repository\\PagoTipoRepository' => ['privates', 'App\\Repository\\PagoTipoRepository', 'getPagoTipoRepositoryService', false],
            'App\\Repository\\PaisRepository' => ['privates', 'App\\Repository\\PaisRepository', 'getPaisRepositoryService', false],
            'App\\Repository\\PrimeraCuotaRepository' => ['privates', 'App\\Repository\\PrimeraCuotaRepository', 'getPrimeraCuotaRepositoryService', false],
            'App\\Repository\\PrivilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'App\\Repository\\PrivilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
            'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService', false],
            'App\\Repository\\ReunionRepository' => ['privates', 'App\\Repository\\ReunionRepository', 'getReunionRepositoryService', false],
            'App\\Repository\\SituacionLaboralRepository' => ['privates', 'App\\Repository\\SituacionLaboralRepository', 'getSituacionLaboralRepositoryService', false],
            'App\\Repository\\SucursalRepository' => ['privates', 'App\\Repository\\SucursalRepository', 'getSucursalRepositoryService', false],
            'App\\Repository\\UsuarioCategoriaRepository' => ['privates', 'App\\Repository\\UsuarioCategoriaRepository', 'getUsuarioCategoriaRepositoryService', false],
            'App\\Repository\\UsuarioCuentaRepository' => ['privates', 'App\\Repository\\UsuarioCuentaRepository', 'getUsuarioCuentaRepositoryService', false],
            'App\\Repository\\UsuarioNoDisponibleRepository' => ['privates', 'App\\Repository\\UsuarioNoDisponibleRepository', 'getUsuarioNoDisponibleRepositoryService', false],
            'App\\Repository\\UsuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
            'App\\Repository\\UsuarioStatusRepository' => ['privates', 'App\\Repository\\UsuarioStatusRepository', 'getUsuarioStatusRepositoryService', false],
            'App\\Repository\\UsuarioTipoDocumentoRepository' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'App\\Repository\\UsuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
            'App\\Repository\\UsuarioUsuariocategoriaRepository' => ['privates', 'App\\Repository\\UsuarioUsuariocategoriaRepository', 'getUsuarioUsuariocategoriaRepositoryService', false],
            'App\\Repository\\VencimientoRepository' => ['privates', 'App\\Repository\\VencimientoRepository', 'getVencimientoRepositoryService', false],
            'App\\Repository\\WebhookRepository' => ['privates', 'App\\Repository\\WebhookRepository', 'getWebhookRepositoryService', false],
        ], [
            'App\\Repository\\AccionRepository' => '?',
            'App\\Repository\\AgendaObservacionRepository' => '?',
            'App\\Repository\\AgendaRepository' => '?',
            'App\\Repository\\AgendaRolRepository' => '?',
            'App\\Repository\\AgendaStatusRepository' => '?',
            'App\\Repository\\ClientePotencialRepository' => '?',
            'App\\Repository\\ConfiguracionRepository' => '?',
            'App\\Repository\\ContratoAnexoRepository' => '?',
            'App\\Repository\\ContratoRepository' => '?',
            'App\\Repository\\ContratoRolRepository' => '?',
            'App\\Repository\\ContratoTramitadorRepository' => '?',
            'App\\Repository\\ContratoVehiculoRepository' => '?',
            'App\\Repository\\ContratoViviendaRepository' => '?',
            'App\\Repository\\CuentaCorrienteRepository' => '?',
            'App\\Repository\\CuentaRepository' => '?',
            'App\\Repository\\CuentasRepository' => '?',
            'App\\Repository\\CuotaRepository' => '?',
            'App\\Repository\\CuotasRepository' => '?',
            'App\\Repository\\DiasPagoRepository' => '?',
            'App\\Repository\\EmpresaRepository' => '?',
            'App\\Repository\\EscrituraRepository' => '?',
            'App\\Repository\\EstadoCivilRepository' => '?',
            'App\\Repository\\EstrategiaJuridicaRepository' => '?',
            'App\\Repository\\GestionarRepository' => '?',
            'App\\Repository\\ImportacionRepository' => '?',
            'App\\Repository\\JuzgadoRepository' => '?',
            'App\\Repository\\MenuCabezeraRepository' => '?',
            'App\\Repository\\MenuRepository' => '?',
            'App\\Repository\\ModuloPerRepository' => '?',
            'App\\Repository\\ModuloRepository' => '?',
            'App\\Repository\\PagoCanalRepository' => '?',
            'App\\Repository\\PagoCuotasRepository' => '?',
            'App\\Repository\\PagoRepository' => '?',
            'App\\Repository\\PagoTipoRepository' => '?',
            'App\\Repository\\PaisRepository' => '?',
            'App\\Repository\\PrimeraCuotaRepository' => '?',
            'App\\Repository\\PrivilegioRepository' => '?',
            'App\\Repository\\PrivilegioTipousuarioRepository' => '?',
            'App\\Repository\\ResetPasswordRequestRepository' => '?',
            'App\\Repository\\ReunionRepository' => '?',
            'App\\Repository\\SituacionLaboralRepository' => '?',
            'App\\Repository\\SucursalRepository' => '?',
            'App\\Repository\\UsuarioCategoriaRepository' => '?',
            'App\\Repository\\UsuarioCuentaRepository' => '?',
            'App\\Repository\\UsuarioNoDisponibleRepository' => '?',
            'App\\Repository\\UsuarioRepository' => '?',
            'App\\Repository\\UsuarioStatusRepository' => '?',
            'App\\Repository\\UsuarioTipoDocumentoRepository' => '?',
            'App\\Repository\\UsuarioTipoRepository' => '?',
            'App\\Repository\\UsuarioUsuariocategoriaRepository' => '?',
            'App\\Repository\\VencimientoRepository' => '?',
            'App\\Repository\\WebhookRepository' => '?',
        ])));
        $a->addCustomDatetimeFunction('addtime', 'DoctrineExtensions\\Query\\Mysql\\AddTime');
        $a->addCustomDatetimeFunction('convert_tz', 'DoctrineExtensions\\Query\\Mysql\\ConvertTz');
        $a->addCustomDatetimeFunction('date', 'DoctrineExtensions\\Query\\Mysql\\Date');
        $a->addCustomDatetimeFunction('date_format', 'DoctrineExtensions\\Query\\Mysql\\DateFormat');
        $a->addCustomDatetimeFunction('dateadd', 'DoctrineExtensions\\Query\\Mysql\\DateAdd');
        $a->addCustomDatetimeFunction('datesub', 'DoctrineExtensions\\Query\\Mysql\\DateSub');
        $a->addCustomDatetimeFunction('datediff', 'DoctrineExtensions\\Query\\Mysql\\DateDiff');
        $a->addCustomDatetimeFunction('day', 'DoctrineExtensions\\Query\\Mysql\\Day');
        $a->addCustomDatetimeFunction('dayname', 'DoctrineExtensions\\Query\\Mysql\\DayName');
        $a->addCustomDatetimeFunction('dayofweek', 'DoctrineExtensions\\Query\\Mysql\\DayOfWeek');
        $a->addCustomDatetimeFunction('dayofyear', 'DoctrineExtensions\\Query\\Mysql\\DayOfYear');
        $a->addCustomDatetimeFunction('div', 'DoctrineExtensions\\Query\\Mysql\\Div');
        $a->addCustomDatetimeFunction('from_unixtime', 'DoctrineExtensions\\Query\\Mysql\\FromUnixtime');
        $a->addCustomDatetimeFunction('hour', 'DoctrineExtensions\\Query\\Mysql\\Hour');
        $a->addCustomDatetimeFunction('last_day', 'DoctrineExtensions\\Query\\Mysql\\LastDay');
        $a->addCustomDatetimeFunction('makedate', 'DoctrineExtensions\\Query\\Mysql\\MakeDate');
        $a->addCustomDatetimeFunction('minute', 'DoctrineExtensions\\Query\\Mysql\\Minute');
        $a->addCustomDatetimeFunction('now', 'DoctrineExtensions\\Query\\Mysql\\Now');
        $a->addCustomDatetimeFunction('month', 'DoctrineExtensions\\Query\\Mysql\\Month');
        $a->addCustomDatetimeFunction('monthname', 'DoctrineExtensions\\Query\\Mysql\\MonthName');
        $a->addCustomDatetimeFunction('period_diff', 'DoctrineExtensions\\Query\\Mysql\\PeriodDiff');
        $a->addCustomDatetimeFunction('second', 'DoctrineExtensions\\Query\\Mysql\\Second');
        $a->addCustomDatetimeFunction('sectotime', 'DoctrineExtensions\\Query\\Mysql\\SecToTime');
        $a->addCustomDatetimeFunction('strtodate', 'DoctrineExtensions\\Query\\Mysql\\StrToDate');
        $a->addCustomDatetimeFunction('time', 'DoctrineExtensions\\Query\\Mysql\\Time');
        $a->addCustomDatetimeFunction('timediff', 'DoctrineExtensions\\Query\\Mysql\\TimeDiff');
        $a->addCustomDatetimeFunction('timestampadd', 'DoctrineExtensions\\Query\\Mysql\\TimestampAdd');
        $a->addCustomDatetimeFunction('timestampdiff', 'DoctrineExtensions\\Query\\Mysql\\TimestampDiff');
        $a->addCustomDatetimeFunction('timetosec', 'DoctrineExtensions\\Query\\Mysql\\TimeToSec');
        $a->addCustomDatetimeFunction('truncate', 'DoctrineExtensions\\Query\\Mysql\\Truncate');
        $a->addCustomDatetimeFunction('week', 'DoctrineExtensions\\Query\\Mysql\\Week');
        $a->addCustomDatetimeFunction('weekday', 'DoctrineExtensions\\Query\\Mysql\\WeekDay');
        $a->addCustomDatetimeFunction('weekofyear', 'DoctrineExtensions\\Query\\Mysql\\WeekOfYear');
        $a->addCustomDatetimeFunction('year', 'DoctrineExtensions\\Query\\Mysql\\Year');
        $a->addCustomDatetimeFunction('yearmonth', 'DoctrineExtensions\\Query\\Mysql\\YearMonth');
        $a->addCustomDatetimeFunction('yearweek', 'DoctrineExtensions\\Query\\Mysql\\YearWeek');
        $a->addCustomDatetimeFunction('unix_timestamp', 'DoctrineExtensions\\Query\\Mysql\\UnixTimestamp');
        $a->addCustomDatetimeFunction('utc_timestamp', 'DoctrineExtensions\\Query\\Mysql\\UtcTimestamp');
        $a->addCustomDatetimeFunction('extract', 'DoctrineExtensions\\Query\\Mysql\\Extract');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, false)));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'before'], 0);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.paginate'] ?? ($this->privates['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber()));
        }, 1 => 'pagination'], 0);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sortable'] ?? ($this->privates['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.before', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.filtration'] ?? ($this->privates['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber()));
        }, 1 => 'before'], 1);
        $instance->addListener('knp_pager.pagination', [0 => function () {
            return ($this->privates['knp_paginator.subscriber.sliding_pagination'] ?? $this->getKnpPaginator_Subscriber_SlidingPaginationService());
        }, 1 => 'pagination'], 1);

        return $instance;
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /*
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->getSecurity_UserValueResolverService());
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->getArgumentResolver_ServiceService());
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService($lazyLoad = true)
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true, 'pageOutOfRange' => 'ignore', 'defaultLimit' => 10]);

        return $instance;
    }

    /*
     * Gets the public 'knp_snappy.image' shared service.
     *
     * @return \Knp\Snappy\Image
     */
    protected function getKnpSnappy_ImageService()
    {
        $this->services['knp_snappy.image'] = $instance = new \Knp\Snappy\Image('wkhtmltoimage', [], []);

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
        $instance->setTemporaryFolder(($this->targetDir.''.'\\snappy'));
        $instance->setTimeout(60);

        return $instance;
    }

    /*
     * Gets the public 'knp_snappy.pdf' shared service.
     *
     * @return \Knp\Snappy\Pdf
     */
    protected function getKnpSnappy_PdfService()
    {
        $this->services['knp_snappy.pdf'] = $instance = new \Knp\Snappy\Pdf('"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe"', [], []);

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
        $instance->setTemporaryFolder(($this->targetDir.''.'\\snappy'));
        $instance->setTimeout(60);

        return $instance;
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'es');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)));
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ])));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true]);
    }

    /*
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /*
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (false) {
                yield 'cache.serializer' => null;
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (false) {
                yield 'cache.property_info' => null;
            }
            if (isset($this->privates['doctrine.result_cache_pool'])) {
                yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? null);
            }
            if (isset($this->privates['doctrine.system_cache_pool'])) {
                yield 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (false) {
                yield 'cache.security_expression_language' => null;
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->privates['swiftmailer.email_sender.listener'])) {
                yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (false) + (int) (isset($this->privates['cache.annotations'])) + (int) (false) + (int) (isset($this->privates['doctrine.result_cache_pool'])) + (int) (isset($this->privates['doctrine.system_cache_pool'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['security.token_storage'])) + (int) (false) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'doctrine.result_cache_pool' => [0 => 'reset'], 'doctrine.system_cache_pool' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset']]);
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($this->services['swiftmailer.transport'] ?? $this->getSwiftmailer_TransportService()));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        return $this->services['swiftmailer.mailer.default.transport.real'] = \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory::createTransport(['transport' => 'smtp', 'url' => $this->getEnv('MAILER_URL'), 'username' => NULL, 'password' => NULL, 'host' => 'localhost', 'port' => NULL, 'timeout' => 30, 'source_ip' => NULL, 'local_domain' => NULL, 'encryption' => NULL, 'auth_mode' => NULL, 'command' => '/usr/sbin/sendmail -bs', 'stream_options' => []], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
    }

    /*
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_TransportService()
    {
        return $this->services['swiftmailer.transport'] = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'es', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ar.xliff')], 'az' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.bg.xliff')], 'ca' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ca.xlf')], 'cs' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.cs.xliff')], 'cy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.da.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.da.xliff')], 'de' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.de.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.de.xliff')], 'el' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.el.xlf')], 'en' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.en.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.en.xliff')], 'es' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.es.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.es.xliff')], 'et' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.eu.xliff')], 'fa' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.fa.xliff')], 'fi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fi.xlf')], 'fr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.fr.xliff')], 'gl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.gl.xlf')], 'he' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hr.xlf')], 'hu' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.hu.xliff')], 'hy' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.id.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.id.xliff')], 'it' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.it.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.it.xliff')], 'ja' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ja.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ja.xliff')], 'lb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.lt.xliff')], 'lv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.nl.xliff')], 'nn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.no.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.no.xliff')], 'pl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.pl.xliff')], 'pt' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt.xlf')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.pt_BR.xliff')], 'ro' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ro.xliff')], 'ru' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ru.xliff')], 'sk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sl.xlf')], 'sq' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.sv.xliff')], 'th' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.tr.xliff')], 'uk' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.uk.xliff')], 'vi' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations\\validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.zh_CN.xlf')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations\\validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations\\security.pt_PT.xlf')], 'ky' => [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.ky.xliff')], 'sw' => [0 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations\\KnpPaginatorBundle.sw.xliff')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations'), 4 => (\dirname(__DIR__, 4).'/translations'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 8 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 10 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 11 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 12 => (\dirname(__DIR__, 4).'\\vendor\\symfonycasts\\reset-password-bundle\\src/translations'), 13 => 'D:/htdocs/desarrollos_symfony/micrm/crm v.2/vendor/knplabs/knp-snappy-bundle/src/translations', 14 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\swiftmailer-bundle/translations')], 'cache_vary' => ['scanned_directories' => [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/translations'), 4 => 'translations', 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/translations'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/translations'), 7 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/translations'), 8 => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle/translations'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle/translations'), 10 => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src/translations'), 11 => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src/translations'), 12 => (\dirname(__DIR__, 4).'\\vendor\\symfonycasts\\reset-password-bundle\\src/translations'), 13 => 'D:/htdocs/desarrollos_symfony/micrm/crm v.2/vendor/knplabs/knp-snappy-bundle/src/translations', 14 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\swiftmailer-bundle/translations')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'es']);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/templates'), 'KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle/templates'), '!KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => false, 'strict_variables' => false]);

        $b = ($this->services['translator'] ?? $this->getTranslatorService());
        $c = ($this->services['router'] ?? $this->getRouterService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \App\Twig\AppExtension($this));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($c, $b)));
        $instance->addGlobal('app', $e);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('sesion', new \App\Service\SesionGenerator(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])), $c, $this));
        $instance->addGlobal('url_root', (\dirname(__DIR__, 4).'/public'));
        $instance->addGlobal('url_web', 'http://crmtest.fuica.cl');
        $instance->addGlobal('pdf_contrato', '/build/contratos/pdf/');
        $instance->addGlobal('img_pagos', '/build/contratos/pagos/');
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /*
     * Gets the private '.errored..service_locator..OZbobJ.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContratoService()
    {
        $this->throw('Cannot autowire service ".service_locator..OZbobJ": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.0ahK5zW.App\Entity\Vencimiento' shared service.
     *
     * @return \App\Entity\Vencimiento
     */
    protected function getVencimientoService()
    {
        $this->throw('Cannot autowire service ".service_locator.0ahK5zW": it references class "App\\Entity\\Vencimiento" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.2NAKaUy.App\Entity\Menu' shared service.
     *
     * @return \App\Entity\Menu
     */
    protected function getMenuService()
    {
        $this->throw('Cannot autowire service ".service_locator.2NAKaUy": it references class "App\\Entity\\Menu" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.2ecbgmo.App\Entity\ClientePotencial' shared service.
     *
     * @return \App\Entity\ClientePotencial
     */
    protected function getClientePotencialService()
    {
        $this->throw('Cannot autowire service ".service_locator.2ecbgmo": it references class "App\\Entity\\ClientePotencial" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.2mo_tjD.App\Entity\Cuenta' shared service.
     *
     * @return \App\Entity\Cuenta
     */
    protected function getCuentaService()
    {
        $this->throw('Cannot autowire service ".service_locator.2mo_tjD": it references class "App\\Entity\\Cuenta" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.3Zorq1H.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuarioService()
    {
        $this->throw('Cannot autowire service ".service_locator.3Zorq1H": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.5MZ64ns.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.5MZ64ns": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.6k_BboC.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.6k_BboC": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.74f4Isy.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato4Service()
    {
        $this->throw('Cannot autowire service ".service_locator.74f4Isy": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.77BaYbJ.App\Entity\Pago' shared service.
     *
     * @return \App\Entity\Pago
     */
    protected function getPagoService()
    {
        $this->throw('Cannot autowire service ".service_locator.77BaYbJ": it references class "App\\Entity\\Pago" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.A0do.gc.App\Entity\Cuota' shared service.
     *
     * @return \App\Entity\Cuota
     */
    protected function getCuotaService()
    {
        $this->throw('Cannot autowire service ".service_locator.A0do.gc": it references class "App\\Entity\\Cuota" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.BloIjNx.App\Entity\UsuarioCuenta' shared service.
     *
     * @return \App\Entity\UsuarioCuenta
     */
    protected function getUsuarioCuentaService()
    {
        $this->throw('Cannot autowire service ".service_locator.BloIjNx": it references class "App\\Entity\\UsuarioCuenta" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.C3wYJvP.App\Entity\Pago' shared service.
     *
     * @return \App\Entity\Pago
     */
    protected function getPago2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.C3wYJvP": it references class "App\\Entity\\Pago" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.C_f1mzT.App\Entity\MenuCabezera' shared service.
     *
     * @return \App\Entity\MenuCabezera
     */
    protected function getMenuCabezeraService()
    {
        $this->throw('Cannot autowire service ".service_locator.C_f1mzT": it references class "App\\Entity\\MenuCabezera" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.D6xVyEO.App\Entity\Agenda' shared service.
     *
     * @return \App\Entity\Agenda
     */
    protected function getAgendaService()
    {
        $this->throw('Cannot autowire service ".service_locator.D6xVyEO": it references class "App\\Entity\\Agenda" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.Dagvfg9.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato5Service()
    {
        $this->throw('Cannot autowire service ".service_locator.Dagvfg9": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.E6BUa1B.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato6Service()
    {
        $this->throw('Cannot autowire service ".service_locator.E6BUa1B": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.F2EPLF4.App\Entity\MenuCabezera' shared service.
     *
     * @return \App\Entity\MenuCabezera
     */
    protected function getMenuCabezera2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.F2EPLF4": it references class "App\\Entity\\MenuCabezera" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.FM9.TbL.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato7Service()
    {
        $this->throw('Cannot autowire service ".service_locator.FM9.TbL": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.GSHB7Tx.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato8Service()
    {
        $this->throw('Cannot autowire service ".service_locator.GSHB7Tx": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.HcMexkl.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.HcMexkl": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.HsDA37j.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato9Service()
    {
        $this->throw('Cannot autowire service ".service_locator.HsDA37j": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.IU0Vrrj.App\Entity\Sucursal' shared service.
     *
     * @return \App\Entity\Sucursal
     */
    protected function getSucursalService()
    {
        $this->throw('Cannot autowire service ".service_locator.IU0Vrrj": it references class "App\\Entity\\Sucursal" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.J.1nOix.App\Entity\PagoTipo' shared service.
     *
     * @return \App\Entity\PagoTipo
     */
    protected function getPagoTipoService()
    {
        $this->throw('Cannot autowire service ".service_locator.J.1nOix": it references class "App\\Entity\\PagoTipo" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.J0I48HS.App\Entity\PrivilegioTipousuario' shared service.
     *
     * @return \App\Entity\PrivilegioTipousuario
     */
    protected function getPrivilegioTipousuarioService()
    {
        $this->throw('Cannot autowire service ".service_locator.J0I48HS": it references class "App\\Entity\\PrivilegioTipousuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.J2.emP..App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.J2.emP.": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.LzAFxPi.App\Entity\UsuarioNoDisponible' shared service.
     *
     * @return \App\Entity\UsuarioNoDisponible
     */
    protected function getUsuarioNoDisponibleService()
    {
        $this->throw('Cannot autowire service ".service_locator.LzAFxPi": it references class "App\\Entity\\UsuarioNoDisponible" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.Mm69KMM.App\Entity\Gestionar' shared service.
     *
     * @return \App\Entity\Gestionar
     */
    protected function getGestionarService()
    {
        $this->throw('Cannot autowire service ".service_locator.Mm69KMM": it references class "App\\Entity\\Gestionar" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.OGBTJpY.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario4Service()
    {
        $this->throw('Cannot autowire service ".service_locator.OGBTJpY": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.OPjaPZQ.App\Entity\MenuCabezera' shared service.
     *
     * @return \App\Entity\MenuCabezera
     */
    protected function getMenuCabezera3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.OPjaPZQ": it references class "App\\Entity\\MenuCabezera" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.Rb7vt2Y.App\Entity\Importacion' shared service.
     *
     * @return \App\Entity\Importacion
     */
    protected function getImportacionService()
    {
        $this->throw('Cannot autowire service ".service_locator.Rb7vt2Y": it references class "App\\Entity\\Importacion" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.RhyREDn.App\Entity\PagoCanal' shared service.
     *
     * @return \App\Entity\PagoCanal
     */
    protected function getPagoCanalService()
    {
        $this->throw('Cannot autowire service ".service_locator.RhyREDn": it references class "App\\Entity\\PagoCanal" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.SYsIIrw.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario5Service()
    {
        $this->throw('Cannot autowire service ".service_locator.SYsIIrw": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.U3af4lB.App\Entity\UsuarioTipo' shared service.
     *
     * @return \App\Entity\UsuarioTipo
     */
    protected function getUsuarioTipoService()
    {
        $this->throw('Cannot autowire service ".service_locator.U3af4lB": it references class "App\\Entity\\UsuarioTipo" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.UF_vGC_.App\Entity\UsuarioCategoria' shared service.
     *
     * @return \App\Entity\UsuarioCategoria
     */
    protected function getUsuarioCategoriaService()
    {
        $this->throw('Cannot autowire service ".service_locator.UF_vGC_": it references class "App\\Entity\\UsuarioCategoria" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.V3FRyj4.App\Entity\Agenda' shared service.
     *
     * @return \App\Entity\Agenda
     */
    protected function getAgenda2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.V3FRyj4": it references class "App\\Entity\\Agenda" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.W4foxkB.App\Entity\Cuenta' shared service.
     *
     * @return \App\Entity\Cuenta
     */
    protected function getCuenta2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.W4foxkB": it references class "App\\Entity\\Cuenta" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.WSaRqqN.App\Entity\Agenda' shared service.
     *
     * @return \App\Entity\Agenda
     */
    protected function getAgenda3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.WSaRqqN": it references class "App\\Entity\\Agenda" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.XbWwFz7.App\Entity\Agenda' shared service.
     *
     * @return \App\Entity\Agenda
     */
    protected function getAgenda4Service()
    {
        $this->throw('Cannot autowire service ".service_locator.XbWwFz7": it references class "App\\Entity\\Agenda" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator._1NEHi_.App\Entity\ModuloPer' shared service.
     *
     * @return \App\Entity\ModuloPer
     */
    protected function getModuloPerService()
    {
        $this->throw('Cannot autowire service ".service_locator._1NEHi_": it references class "App\\Entity\\ModuloPer" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator._g6XNTO.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario6Service()
    {
        $this->throw('Cannot autowire service ".service_locator._g6XNTO": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.aMe1AiS.App\Entity\Agenda' shared service.
     *
     * @return \App\Entity\Agenda
     */
    protected function getAgenda5Service()
    {
        $this->throw('Cannot autowire service ".service_locator.aMe1AiS": it references class "App\\Entity\\Agenda" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.abnZuor.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario7Service()
    {
        $this->throw('Cannot autowire service ".service_locator.abnZuor": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.bsYhYgq.App\Entity\ContratoRol' shared service.
     *
     * @return \App\Entity\ContratoRol
     */
    protected function getContratoRolService()
    {
        $this->throw('Cannot autowire service ".service_locator.bsYhYgq": it references class "App\\Entity\\ContratoRol" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.cD6F.y4.App\Entity\Cuenta' shared service.
     *
     * @return \App\Entity\Cuenta
     */
    protected function getCuenta3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.cD6F.y4": it references class "App\\Entity\\Cuenta" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.cNnViMJ.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato10Service()
    {
        $this->throw('Cannot autowire service ".service_locator.cNnViMJ": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.dzE1eBI.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato11Service()
    {
        $this->throw('Cannot autowire service ".service_locator.dzE1eBI": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.fY7iPWr.App\Entity\Cuota' shared service.
     *
     * @return \App\Entity\Cuota
     */
    protected function getCuota2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.fY7iPWr": it references class "App\\Entity\\Cuota" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.h9rUVrY.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato12Service()
    {
        $this->throw('Cannot autowire service ".service_locator.h9rUVrY": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.jWPN0B5.App\Entity\Configuracion' shared service.
     *
     * @return \App\Entity\Configuracion
     */
    protected function getConfiguracionService()
    {
        $this->throw('Cannot autowire service ".service_locator.jWPN0B5": it references class "App\\Entity\\Configuracion" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.jucI2NL.App\Entity\Pais' shared service.
     *
     * @return \App\Entity\Pais
     */
    protected function getPaisService()
    {
        $this->throw('Cannot autowire service ".service_locator.jucI2NL": it references class "App\\Entity\\Pais" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.l9ENZ48.App\Entity\Cuenta' shared service.
     *
     * @return \App\Entity\Cuenta
     */
    protected function getCuenta4Service()
    {
        $this->throw('Cannot autowire service ".service_locator.l9ENZ48": it references class "App\\Entity\\Cuenta" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.lq.nSOB.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario8Service()
    {
        $this->throw('Cannot autowire service ".service_locator.lq.nSOB": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.nIfFBcT.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato13Service()
    {
        $this->throw('Cannot autowire service ".service_locator.nIfFBcT": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.onFC5Cx.App\Entity\Usuario' shared service.
     *
     * @return \App\Entity\Usuario
     */
    protected function getUsuario9Service()
    {
        $this->throw('Cannot autowire service ".service_locator.onFC5Cx": it references class "App\\Entity\\Usuario" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.qyoxXJZ.App\Entity\Contrato' shared service.
     *
     * @return \App\Entity\Contrato
     */
    protected function getContrato14Service()
    {
        $this->throw('Cannot autowire service ".service_locator.qyoxXJZ": it references class "App\\Entity\\Contrato" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.r5S5nuE.App\Entity\ContratoRol' shared service.
     *
     * @return \App\Entity\ContratoRol
     */
    protected function getContratoRol2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.r5S5nuE": it references class "App\\Entity\\ContratoRol" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.rpxV3kS.App\Entity\Privilegio' shared service.
     *
     * @return \App\Entity\Privilegio
     */
    protected function getPrivilegioService()
    {
        $this->throw('Cannot autowire service ".service_locator.rpxV3kS": it references class "App\\Entity\\Privilegio" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.sBhv2Cg.App\Entity\Agenda' shared service.
     *
     * @return \App\Entity\Agenda
     */
    protected function getAgenda6Service()
    {
        $this->throw('Cannot autowire service ".service_locator.sBhv2Cg": it references class "App\\Entity\\Agenda" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.sJ4K5iu.App\Entity\UsuarioTipo' shared service.
     *
     * @return \App\Entity\UsuarioTipo
     */
    protected function getUsuarioTipo2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.sJ4K5iu": it references class "App\\Entity\\UsuarioTipo" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.sy1d2n_.App\Entity\Privilegio' shared service.
     *
     * @return \App\Entity\Privilegio
     */
    protected function getPrivilegio2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.sy1d2n_": it references class "App\\Entity\\Privilegio" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.tcvPBU9.App\Entity\UsuarioNoDisponible' shared service.
     *
     * @return \App\Entity\UsuarioNoDisponible
     */
    protected function getUsuarioNoDisponible2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.tcvPBU9": it references class "App\\Entity\\UsuarioNoDisponible" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.w037Jll.App\Entity\UsuarioStatus' shared service.
     *
     * @return \App\Entity\UsuarioStatus
     */
    protected function getUsuarioStatusService()
    {
        $this->throw('Cannot autowire service ".service_locator.w037Jll": it references class "App\\Entity\\UsuarioStatus" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.w_BXEJJ.App\Entity\Accion' shared service.
     *
     * @return \App\Entity\Accion
     */
    protected function getAccionService()
    {
        $this->throw('Cannot autowire service ".service_locator.w_BXEJJ": it references class "App\\Entity\\Accion" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.w_SvetQ.App\Entity\Menu' shared service.
     *
     * @return \App\Entity\Menu
     */
    protected function getMenu2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.w_SvetQ": it references class "App\\Entity\\Menu" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.wiQplfK.App\Entity\UsuarioTipo' shared service.
     *
     * @return \App\Entity\UsuarioTipo
     */
    protected function getUsuarioTipo3Service()
    {
        $this->throw('Cannot autowire service ".service_locator.wiQplfK": it references class "App\\Entity\\UsuarioTipo" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.yGoJWDw.App\Entity\Agenda' shared service.
     *
     * @return \App\Entity\Agenda
     */
    protected function getAgenda7Service()
    {
        $this->throw('Cannot autowire service ".service_locator.yGoJWDw": it references class "App\\Entity\\Agenda" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.zGaaEJz.App\Entity\Empresa' shared service.
     *
     * @return \App\Entity\Empresa
     */
    protected function getEmpresaService()
    {
        $this->throw('Cannot autowire service ".service_locator.zGaaEJz": it references class "App\\Entity\\Empresa" but no such service exists.');
    }

    /*
     * Gets the private '.errored..service_locator.zSBANml.App\Entity\PrivilegioTipousuario' shared service.
     *
     * @return \App\Entity\PrivilegioTipousuario
     */
    protected function getPrivilegioTipousuario2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.zSBANml": it references class "App\\Entity\\PrivilegioTipousuario" but no such service exists.');
    }

    /*
     * Gets the private '.service_locator..OZbobJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator__OZbobJService()
    {
        return $this->privates['.service_locator..OZbobJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator..OZbobJ.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator..OZbobJ": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'pagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'pagoRepository' => 'App\\Repository\\PagoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.06JVMyl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_06JVMylService()
    {
        return $this->privates['.service_locator.06JVMyl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'snappy' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', false],
        ], [
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'snappy' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.0FOabxk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_0FOabxkService()
    {
        return $this->privates['.service_locator.0FOabxk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configuracionRepository' => ['privates', 'App\\Repository\\ConfiguracionRepository', 'getConfiguracionRepositoryService', false],
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
        ], [
            'configuracionRepository' => 'App\\Repository\\ConfiguracionRepository',
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.0LR1cBw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_0LR1cBwService()
    {
        return $this->privates['.service_locator.0LR1cBw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioCuentaRepository' => ['privates', 'App\\Repository\\UsuarioCuentaRepository', 'getUsuarioCuentaRepositoryService', false],
        ], [
            'usuarioCuentaRepository' => 'App\\Repository\\UsuarioCuentaRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.0ahK5zW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_0ahK5zWService()
    {
        return $this->privates['.service_locator.0ahK5zW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'vencimiento' => ['privates', '.errored..service_locator.0ahK5zW.App\\Entity\\Vencimiento', NULL, 'Cannot autowire service ".service_locator.0ahK5zW": it references class "App\\Entity\\Vencimiento" but no such service exists.'],
        ], [
            'vencimiento' => 'App\\Entity\\Vencimiento',
        ]);
    }

    /*
     * Gets the private '.service_locator.1elOjJR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_1elOjJRService()
    {
        return $this->privates['.service_locator.1elOjJR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.2NAKaUy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_2NAKaUyService()
    {
        return $this->privates['.service_locator.2NAKaUy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'menu' => ['privates', '.errored..service_locator.2NAKaUy.App\\Entity\\Menu', NULL, 'Cannot autowire service ".service_locator.2NAKaUy": it references class "App\\Entity\\Menu" but no such service exists.'],
        ], [
            'menu' => 'App\\Entity\\Menu',
        ]);
    }

    /*
     * Gets the private '.service_locator.2ecbgmo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_2ecbgmoService()
    {
        return $this->privates['.service_locator.2ecbgmo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'clientePotencial' => ['privates', '.errored..service_locator.2ecbgmo.App\\Entity\\ClientePotencial', NULL, 'Cannot autowire service ".service_locator.2ecbgmo": it references class "App\\Entity\\ClientePotencial" but no such service exists.'],
        ], [
            'clientePotencial' => 'App\\Entity\\ClientePotencial',
        ]);
    }

    /*
     * Gets the private '.service_locator.2mo_tjD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_2moTjDService()
    {
        return $this->privates['.service_locator.2mo_tjD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuenta' => ['privates', '.errored..service_locator.2mo_tjD.App\\Entity\\Cuenta', NULL, 'Cannot autowire service ".service_locator.2mo_tjD": it references class "App\\Entity\\Cuenta" but no such service exists.'],
            'sucursalRepository' => ['privates', 'App\\Repository\\SucursalRepository', 'getSucursalRepositoryService', false],
        ], [
            'cuenta' => 'App\\Entity\\Cuenta',
            'sucursalRepository' => 'App\\Repository\\SucursalRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.3Zorq1H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_3Zorq1HService()
    {
        return $this->privates['.service_locator.3Zorq1H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configuracionRepository' => ['privates', 'App\\Repository\\ConfiguracionRepository', 'getConfiguracionRepositoryService', false],
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'tipoDocumento' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'usuario' => ['privates', '.errored..service_locator.3Zorq1H.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.3Zorq1H": it references class "App\\Entity\\Usuario" but no such service exists.'],
            'usuarioNoDisponibleRepository' => ['privates', 'App\\Repository\\UsuarioNoDisponibleRepository', 'getUsuarioNoDisponibleRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'configuracionRepository' => 'App\\Repository\\ConfiguracionRepository',
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'tipoDocumento' => 'App\\Repository\\UsuarioTipoDocumentoRepository',
            'usuario' => 'App\\Entity\\Usuario',
            'usuarioNoDisponibleRepository' => 'App\\Repository\\UsuarioNoDisponibleRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.3kOORk9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_3kOORk9Service()
    {
        return $this->privates['.service_locator.3kOORk9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
            'pagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', false],
            'vencimientoRepository' => ['privates', 'App\\Repository\\VencimientoRepository', 'getVencimientoRepositoryService', false],
        ], [
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'paginator' => '?',
            'pagoRepository' => 'App\\Repository\\PagoRepository',
            'vencimientoRepository' => 'App\\Repository\\VencimientoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.3mnj3Pm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_3mnj3PmService()
    {
        return $this->privates['.service_locator.3mnj3Pm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'moduloRepository' => ['privates', 'App\\Repository\\ModuloRepository', 'getModuloRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'moduloRepository' => 'App\\Repository\\ModuloRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.4vbyOeV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_4vbyOeVService()
    {
        return $this->privates['.service_locator.4vbyOeV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'paginator' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.5MZ64ns' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_5MZ64nsService()
    {
        return $this->privates['.service_locator.5MZ64ns'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'contrato' => ['privates', '.errored..service_locator.5MZ64ns.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.5MZ64ns": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'diasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'contrato' => 'App\\Entity\\Contrato',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'diasPagoRepository' => 'App\\Repository\\DiasPagoRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.6XyKr57' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_6XyKr57Service()
    {
        return $this->privates['.service_locator.6XyKr57'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.6k_BboC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_6kBboCService()
    {
        return $this->privates['.service_locator.6k_BboC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaObservacionRepository' => ['privates', 'App\\Repository\\AgendaObservacionRepository', 'getAgendaObservacionRepositoryService', false],
            'contrato' => ['privates', '.errored..service_locator.6k_BboC.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.6k_BboC": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'snappy' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', false],
        ], [
            'agendaObservacionRepository' => 'App\\Repository\\AgendaObservacionRepository',
            'contrato' => 'App\\Entity\\Contrato',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'snappy' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.74f4Isy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_74f4IsyService()
    {
        return $this->privates['.service_locator.74f4Isy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configuracionRepository' => ['privates', 'App\\Repository\\ConfiguracionRepository', 'getConfiguracionRepositoryService', false],
            'contrato' => ['privates', '.errored..service_locator.74f4Isy.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.74f4Isy": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'diasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'juzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
            'sucursalRepository' => ['privates', 'App\\Repository\\SucursalRepository', 'getSucursalRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'configuracionRepository' => 'App\\Repository\\ConfiguracionRepository',
            'contrato' => 'App\\Entity\\Contrato',
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'diasPagoRepository' => 'App\\Repository\\DiasPagoRepository',
            'encoder' => '?',
            'juzgadoRepository' => 'App\\Repository\\JuzgadoRepository',
            'sucursalRepository' => 'App\\Repository\\SucursalRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.77BaYbJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_77BaYbJService()
    {
        return $this->privates['.service_locator.77BaYbJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'pago' => ['privates', '.errored..service_locator.77BaYbJ.App\\Entity\\Pago', NULL, 'Cannot autowire service ".service_locator.77BaYbJ": it references class "App\\Entity\\Pago" but no such service exists.'],
            'pagoCuotasRepository' => ['privates', 'App\\Repository\\PagoCuotasRepository', 'getPagoCuotasRepositoryService', false],
        ], [
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'pago' => 'App\\Entity\\Pago',
            'pagoCuotasRepository' => 'App\\Repository\\PagoCuotasRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.7IbcALy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_7IbcALyService()
    {
        return $this->privates['.service_locator.7IbcALy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'privilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'privilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
            'suarioNoDisponibleRepository' => ['privates', 'App\\Repository\\UsuarioNoDisponibleRepository', 'getUsuarioNoDisponibleRepositoryService', false],
            'tipoDocumento' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'privilegioRepository' => 'App\\Repository\\PrivilegioRepository',
            'privilegioTipousuarioRepository' => 'App\\Repository\\PrivilegioTipousuarioRepository',
            'suarioNoDisponibleRepository' => 'App\\Repository\\UsuarioNoDisponibleRepository',
            'tipoDocumento' => 'App\\Repository\\UsuarioTipoDocumentoRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.8Z_jHRB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_8ZJHRBService()
    {
        return $this->privates['.service_locator.8Z_jHRB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'passwordEncoder' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.A0do.gc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_A0do_GcService()
    {
        return $this->privates['.service_locator.A0do.gc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuota' => ['privates', '.errored..service_locator.A0do.gc.App\\Entity\\Cuota', NULL, 'Cannot autowire service ".service_locator.A0do.gc": it references class "App\\Entity\\Cuota" but no such service exists.'],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'pagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', false],
        ], [
            'cuota' => 'App\\Entity\\Cuota',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'pagoRepository' => 'App\\Repository\\PagoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.ARLBz6w' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ARLBz6wService()
    {
        return $this->privates['.service_locator.ARLBz6w'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
        ], [
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.BWknic2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BWknic2Service()
    {
        return $this->privates['.service_locator.BWknic2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', false],
        ], [
            'mailer' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.BloIjNx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BloIjNxService()
    {
        return $this->privates['.service_locator.BloIjNx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioCuentum' => ['privates', '.errored..service_locator.BloIjNx.App\\Entity\\UsuarioCuenta', NULL, 'Cannot autowire service ".service_locator.BloIjNx": it references class "App\\Entity\\UsuarioCuenta" but no such service exists.'],
        ], [
            'usuarioCuentum' => 'App\\Entity\\UsuarioCuenta',
        ]);
    }

    /*
     * Gets the private '.service_locator.C3wYJvP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_C3wYJvPService()
    {
        return $this->privates['.service_locator.C3wYJvP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'pago' => ['privates', '.errored..service_locator.C3wYJvP.App\\Entity\\Pago', NULL, 'Cannot autowire service ".service_locator.C3wYJvP": it references class "App\\Entity\\Pago" but no such service exists.'],
        ], [
            'pago' => 'App\\Entity\\Pago',
        ]);
    }

    /*
     * Gets the private '.service_locator.CK_KTx5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CKKTx5Service()
    {
        return $this->privates['.service_locator.CK_KTx5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'paginator' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.C_f1mzT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CF1mzTService()
    {
        return $this->privates['.service_locator.C_f1mzT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'menuCabezera' => ['privates', '.errored..service_locator.C_f1mzT.App\\Entity\\MenuCabezera', NULL, 'Cannot autowire service ".service_locator.C_f1mzT": it references class "App\\Entity\\MenuCabezera" but no such service exists.'],
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', false],
        ], [
            'menuCabezera' => 'App\\Entity\\MenuCabezera',
            'menuRepository' => 'App\\Repository\\MenuRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.D6xVyEO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_D6xVyEOService()
    {
        return $this->privates['.service_locator.D6xVyEO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agenda' => ['privates', '.errored..service_locator.D6xVyEO.App\\Entity\\Agenda', NULL, 'Cannot autowire service ".service_locator.D6xVyEO": it references class "App\\Entity\\Agenda" but no such service exists.'],
            'reunionRepository' => ['privates', 'App\\Repository\\ReunionRepository', 'getReunionRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agenda' => 'App\\Entity\\Agenda',
            'reunionRepository' => 'App\\Repository\\ReunionRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.Dagvfg9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Dagvfg9Service()
    {
        return $this->privates['.service_locator.Dagvfg9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'contrato' => ['privates', '.errored..service_locator.Dagvfg9.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.Dagvfg9": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'diasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'contrato' => 'App\\Entity\\Contrato',
            'diasPagoRepository' => 'App\\Repository\\DiasPagoRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.E2I33Py' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_E2I33PyService()
    {
        return $this->privates['.service_locator.E2I33Py'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'clientePotencialRepository' => ['privates', 'App\\Repository\\ClientePotencialRepository', 'getClientePotencialRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'clientePotencialRepository' => 'App\\Repository\\ClientePotencialRepository',
            'paginator' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.E6BUa1B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_E6BUa1BService()
    {
        return $this->privates['.service_locator.E6BUa1B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator.E6BUa1B.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.E6BUa1B": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'diasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'juzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'snappy' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', false],
            'sucursalRepository' => ['privates', 'App\\Repository\\SucursalRepository', 'getSucursalRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'diasPagoRepository' => 'App\\Repository\\DiasPagoRepository',
            'juzgadoRepository' => 'App\\Repository\\JuzgadoRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'snappy' => '?',
            'sucursalRepository' => 'App\\Repository\\SucursalRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.Ee0e0h.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Ee0e0h_Service()
    {
        return $this->privates['.service_locator.Ee0e0h.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.F2EPLF4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_F2EPLF4Service()
    {
        return $this->privates['.service_locator.F2EPLF4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'menuCabezera' => ['privates', '.errored..service_locator.F2EPLF4.App\\Entity\\MenuCabezera', NULL, 'Cannot autowire service ".service_locator.F2EPLF4": it references class "App\\Entity\\MenuCabezera" but no such service exists.'],
        ], [
            'menuCabezera' => 'App\\Entity\\MenuCabezera',
        ]);
    }

    /*
     * Gets the private '.service_locator.FM9.TbL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_FM9_TbLService()
    {
        return $this->privates['.service_locator.FM9.TbL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator.FM9.TbL.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.FM9.TbL": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'snappy' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'snappy' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.Fws7FEo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Fws7FEoService()
    {
        return $this->privates['.service_locator.Fws7FEo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.GSHB7Tx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_GSHB7TxService()
    {
        return $this->privates['.service_locator.GSHB7Tx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator.GSHB7Tx.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.GSHB7Tx": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'contratoRolRepository' => ['privates', 'App\\Repository\\ContratoRolRepository', 'getContratoRolRepositoryService', false],
            'juzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'contratoRolRepository' => 'App\\Repository\\ContratoRolRepository',
            'juzgadoRepository' => 'App\\Repository\\JuzgadoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.HQMYHf1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_HQMYHf1Service()
    {
        return $this->privates['.service_locator.HQMYHf1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
            'pagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', false],
        ], [
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'paginator' => '?',
            'pagoRepository' => 'App\\Repository\\PagoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.HcMexkl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_HcMexklService()
    {
        return $this->privates['.service_locator.HcMexkl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'privilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'usuario' => ['privates', '.errored..service_locator.HcMexkl.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.HcMexkl": it references class "App\\Entity\\Usuario" but no such service exists.'],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
            'privilegioRepository' => 'App\\Repository\\PrivilegioRepository',
            'usuario' => 'App\\Entity\\Usuario',
        ]);
    }

    /*
     * Gets the private '.service_locator.HsDA37j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_HsDA37jService()
    {
        return $this->privates['.service_locator.HsDA37j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator.HsDA37j.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.HsDA37j": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'diasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'diasPagoRepository' => 'App\\Repository\\DiasPagoRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.IU0Vrrj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_IU0VrrjService()
    {
        return $this->privates['.service_locator.IU0Vrrj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'sucursal' => ['privates', '.errored..service_locator.IU0Vrrj.App\\Entity\\Sucursal', NULL, 'Cannot autowire service ".service_locator.IU0Vrrj": it references class "App\\Entity\\Sucursal" but no such service exists.'],
        ], [
            'sucursal' => 'App\\Entity\\Sucursal',
        ]);
    }

    /*
     * Gets the private '.service_locator.J.1nOix' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_J_1nOixService()
    {
        return $this->privates['.service_locator.J.1nOix'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'pagoTipo' => ['privates', '.errored..service_locator.J.1nOix.App\\Entity\\PagoTipo', NULL, 'Cannot autowire service ".service_locator.J.1nOix": it references class "App\\Entity\\PagoTipo" but no such service exists.'],
        ], [
            'pagoTipo' => 'App\\Entity\\PagoTipo',
        ]);
    }

    /*
     * Gets the private '.service_locator.J0I48HS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_J0I48HSService()
    {
        return $this->privates['.service_locator.J0I48HS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'privilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'privilegioTipousuario' => ['privates', '.errored..service_locator.J0I48HS.App\\Entity\\PrivilegioTipousuario', NULL, 'Cannot autowire service ".service_locator.J0I48HS": it references class "App\\Entity\\PrivilegioTipousuario" but no such service exists.'],
            'privilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
            'privilegioRepository' => 'App\\Repository\\PrivilegioRepository',
            'privilegioTipousuario' => 'App\\Entity\\PrivilegioTipousuario',
            'privilegioTipousuarioRepository' => 'App\\Repository\\PrivilegioTipousuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.J2.emP.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_J2_EmP_Service()
    {
        return $this->privates['.service_locator.J2.emP.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'privilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'privilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
            'usuario' => ['privates', '.errored..service_locator.J2.emP..App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.J2.emP.": it references class "App\\Entity\\Usuario" but no such service exists.'],
        ], [
            'privilegioRepository' => 'App\\Repository\\PrivilegioRepository',
            'privilegioTipousuarioRepository' => 'App\\Repository\\PrivilegioTipousuarioRepository',
            'usuario' => 'App\\Entity\\Usuario',
        ]);
    }

    /*
     * Gets the private '.service_locator.KOdFMEp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_KOdFMEpService()
    {
        return $this->privates['.service_locator.KOdFMEp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.KTzT3Id' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_KTzT3IdService()
    {
        return $this->privates['.service_locator.KTzT3Id'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'menuCabezeraRepository' => ['privates', 'App\\Repository\\MenuCabezeraRepository', 'getMenuCabezeraRepositoryService', false],
        ], [
            'menuCabezeraRepository' => 'App\\Repository\\MenuCabezeraRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.LOJoumX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_LOJoumXService()
    {
        return $this->privates['.service_locator.LOJoumX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', false],
        ], [
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.LzAFxPi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_LzAFxPiService()
    {
        return $this->privates['.service_locator.LzAFxPi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioNoDisponible' => ['privates', '.errored..service_locator.LzAFxPi.App\\Entity\\UsuarioNoDisponible', NULL, 'Cannot autowire service ".service_locator.LzAFxPi": it references class "App\\Entity\\UsuarioNoDisponible" but no such service exists.'],
            'usuarioNoDisponibleRepository' => ['privates', 'App\\Repository\\UsuarioNoDisponibleRepository', 'getUsuarioNoDisponibleRepositoryService', false],
        ], [
            'usuarioNoDisponible' => 'App\\Entity\\UsuarioNoDisponible',
            'usuarioNoDisponibleRepository' => 'App\\Repository\\UsuarioNoDisponibleRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.Mm69KMM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Mm69KMMService()
    {
        return $this->privates['.service_locator.Mm69KMM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'gestionar' => ['privates', '.errored..service_locator.Mm69KMM.App\\Entity\\Gestionar', NULL, 'Cannot autowire service ".service_locator.Mm69KMM": it references class "App\\Entity\\Gestionar" but no such service exists.'],
        ], [
            'gestionar' => 'App\\Entity\\Gestionar',
        ]);
    }

    /*
     * Gets the private '.service_locator.Mx_VGXK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_MxVGXKService()
    {
        return $this->privates['.service_locator.Mx_VGXK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'pagoTipoRepository' => ['privates', 'App\\Repository\\PagoTipoRepository', 'getPagoTipoRepositoryService', false],
        ], [
            'pagoTipoRepository' => 'App\\Repository\\PagoTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.NseDBlA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_NseDBlAService()
    {
        return $this->privates['.service_locator.NseDBlA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioCategoriaRepository' => ['privates', 'App\\Repository\\UsuarioCategoriaRepository', 'getUsuarioCategoriaRepositoryService', false],
        ], [
            'usuarioCategoriaRepository' => 'App\\Repository\\UsuarioCategoriaRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.OGBTJpY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_OGBTJpYService()
    {
        return $this->privates['.service_locator.OGBTJpY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'tipoDocumento' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'usuario' => ['privates', '.errored..service_locator.OGBTJpY.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.OGBTJpY": it references class "App\\Entity\\Usuario" but no such service exists.'],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'tipoDocumento' => 'App\\Repository\\UsuarioTipoDocumentoRepository',
            'usuario' => 'App\\Entity\\Usuario',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.OPjaPZQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_OPjaPZQService()
    {
        return $this->privates['.service_locator.OPjaPZQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', false],
            'menuCabezera' => ['privates', '.errored..service_locator.OPjaPZQ.App\\Entity\\MenuCabezera', NULL, 'Cannot autowire service ".service_locator.OPjaPZQ": it references class "App\\Entity\\MenuCabezera" but no such service exists.'],
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
            'menuCabezera' => 'App\\Entity\\MenuCabezera',
            'menuRepository' => 'App\\Repository\\MenuRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.Q7y3H4c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Q7y3H4cService()
    {
        return $this->privates['.service_locator.Q7y3H4c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'gestionarRepository' => ['privates', 'App\\Repository\\GestionarRepository', 'getGestionarRepositoryService', false],
        ], [
            'gestionarRepository' => 'App\\Repository\\GestionarRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.QmhK1nQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_QmhK1nQService()
    {
        return $this->privates['.service_locator.QmhK1nQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'importacionRepository' => ['privates', 'App\\Repository\\ImportacionRepository', 'getImportacionRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'importacionRepository' => 'App\\Repository\\ImportacionRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.Rb7vt2Y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Rb7vt2YService()
    {
        return $this->privates['.service_locator.Rb7vt2Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'importacion' => ['privates', '.errored..service_locator.Rb7vt2Y.App\\Entity\\Importacion', NULL, 'Cannot autowire service ".service_locator.Rb7vt2Y": it references class "App\\Entity\\Importacion" but no such service exists.'],
        ], [
            'importacion' => 'App\\Entity\\Importacion',
        ]);
    }

    /*
     * Gets the private '.service_locator.RhyREDn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RhyREDnService()
    {
        return $this->privates['.service_locator.RhyREDn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'pagoCanal' => ['privates', '.errored..service_locator.RhyREDn.App\\Entity\\PagoCanal', NULL, 'Cannot autowire service ".service_locator.RhyREDn": it references class "App\\Entity\\PagoCanal" but no such service exists.'],
        ], [
            'pagoCanal' => 'App\\Entity\\PagoCanal',
        ]);
    }

    /*
     * Gets the private '.service_locator.SYsIIrw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SYsIIrwService()
    {
        return $this->privates['.service_locator.SYsIIrw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuario' => ['privates', '.errored..service_locator.SYsIIrw.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.SYsIIrw": it references class "App\\Entity\\Usuario" but no such service exists.'],
            'usuarioNoDisponibleRepository' => ['privates', 'App\\Repository\\UsuarioNoDisponibleRepository', 'getUsuarioNoDisponibleRepositoryService', false],
        ], [
            'usuario' => 'App\\Entity\\Usuario',
            'usuarioNoDisponibleRepository' => 'App\\Repository\\UsuarioNoDisponibleRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.U3af4lB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_U3af4lBService()
    {
        return $this->privates['.service_locator.U3af4lB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioTipo' => ['privates', '.errored..service_locator.U3af4lB.App\\Entity\\UsuarioTipo', NULL, 'Cannot autowire service ".service_locator.U3af4lB": it references class "App\\Entity\\UsuarioTipo" but no such service exists.'],
        ], [
            'usuarioTipo' => 'App\\Entity\\UsuarioTipo',
        ]);
    }

    /*
     * Gets the private '.service_locator.UF_vGC_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_UFVGCService()
    {
        return $this->privates['.service_locator.UF_vGC_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioCategorium' => ['privates', '.errored..service_locator.UF_vGC_.App\\Entity\\UsuarioCategoria', NULL, 'Cannot autowire service ".service_locator.UF_vGC_": it references class "App\\Entity\\UsuarioCategoria" but no such service exists.'],
        ], [
            'usuarioCategorium' => 'App\\Entity\\UsuarioCategoria',
        ]);
    }

    /*
     * Gets the private '.service_locator.UjsxOEZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_UjsxOEZService()
    {
        return $this->privates['.service_locator.UjsxOEZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'pagoCanalRepository' => ['privates', 'App\\Repository\\PagoCanalRepository', 'getPagoCanalRepositoryService', false],
        ], [
            'pagoCanalRepository' => 'App\\Repository\\PagoCanalRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.V3FRyj4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_V3FRyj4Service()
    {
        return $this->privates['.service_locator.V3FRyj4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agenda' => ['privates', '.errored..service_locator.V3FRyj4.App\\Entity\\Agenda', NULL, 'Cannot autowire service ".service_locator.V3FRyj4": it references class "App\\Entity\\Agenda" but no such service exists.'],
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'reunionRepository' => ['privates', 'App\\Repository\\ReunionRepository', 'getReunionRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agenda' => 'App\\Entity\\Agenda',
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'reunionRepository' => 'App\\Repository\\ReunionRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.VIDQ8NV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VIDQ8NVService()
    {
        return $this->privates['.service_locator.VIDQ8NV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'paginator' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.VYLHLQC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VYLHLQCService()
    {
        return $this->privates['.service_locator.VYLHLQC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configuracionRepository' => ['privates', 'App\\Repository\\ConfiguracionRepository', 'getConfiguracionRepositoryService', false],
        ], [
            'configuracionRepository' => 'App\\Repository\\ConfiguracionRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.W4foxkB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_W4foxkBService()
    {
        return $this->privates['.service_locator.W4foxkB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuenta' => ['privates', '.errored..service_locator.W4foxkB.App\\Entity\\Cuenta', NULL, 'Cannot autowire service ".service_locator.W4foxkB": it references class "App\\Entity\\Cuenta" but no such service exists.'],
        ], [
            'cuenta' => 'App\\Entity\\Cuenta',
        ]);
    }

    /*
     * Gets the private '.service_locator.WSaRqqN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_WSaRqqNService()
    {
        return $this->privates['.service_locator.WSaRqqN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agenda' => ['privates', '.errored..service_locator.WSaRqqN.App\\Entity\\Agenda', NULL, 'Cannot autowire service ".service_locator.WSaRqqN": it references class "App\\Entity\\Agenda" but no such service exists.'],
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'reunionRepository' => ['privates', 'App\\Repository\\ReunionRepository', 'getReunionRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agenda' => 'App\\Entity\\Agenda',
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'reunionRepository' => 'App\\Repository\\ReunionRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.XPvRhvX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XPvRhvXService()
    {
        return $this->privates['.service_locator.XPvRhvX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
        ], [
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.XbWwFz7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XbWwFz7Service()
    {
        return $this->privates['.service_locator.XbWwFz7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agenda' => ['privates', '.errored..service_locator.XbWwFz7.App\\Entity\\Agenda', NULL, 'Cannot autowire service ".service_locator.XbWwFz7": it references class "App\\Entity\\Agenda" but no such service exists.'],
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'contratoRolRepository' => ['privates', 'App\\Repository\\ContratoRolRepository', 'getContratoRolRepositoryService', false],
            'diasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'juzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
            'sucursalRepository' => ['privates', 'App\\Repository\\SucursalRepository', 'getSucursalRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'agenda' => 'App\\Entity\\Agenda',
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'contratoRolRepository' => 'App\\Repository\\ContratoRolRepository',
            'diasPagoRepository' => 'App\\Repository\\DiasPagoRepository',
            'encoder' => '?',
            'juzgadoRepository' => 'App\\Repository\\JuzgadoRepository',
            'sucursalRepository' => 'App\\Repository\\SucursalRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.Y3JxyLC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Y3JxyLCService()
    {
        return $this->privates['.service_locator.Y3JxyLC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioStatusRepository' => ['privates', 'App\\Repository\\UsuarioStatusRepository', 'getUsuarioStatusRepositoryService', false],
        ], [
            'usuarioStatusRepository' => 'App\\Repository\\UsuarioStatusRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.ZtRYfF6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ZtRYfF6Service()
    {
        return $this->privates['.service_locator.ZtRYfF6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', false],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
            'urlGenerator' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator._1NEHi_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_1NEHiService()
    {
        return $this->privates['.service_locator._1NEHi_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'modulo' => ['privates', '.errored..service_locator._1NEHi_.App\\Entity\\ModuloPer', NULL, 'Cannot autowire service ".service_locator._1NEHi_": it references class "App\\Entity\\ModuloPer" but no such service exists.'],
        ], [
            'modulo' => 'App\\Entity\\ModuloPer',
        ]);
    }

    /*
     * Gets the private '.service_locator._GMtc1I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_GMtc1IService()
    {
        return $this->privates['.service_locator._GMtc1I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'cuentaCorrienteRepository' => ['privates', 'App\\Repository\\CuentaCorrienteRepository', 'getCuentaCorrienteRepositoryService', false],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'pagoCanalRepository' => ['privates', 'App\\Repository\\PagoCanalRepository', 'getPagoCanalRepositoryService', false],
            'pagoCuotasRepository' => ['privates', 'App\\Repository\\PagoCuotasRepository', 'getPagoCuotasRepositoryService', false],
            'pagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', false],
            'pagoTipoRepository' => ['privates', 'App\\Repository\\PagoTipoRepository', 'getPagoTipoRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'cuentaCorrienteRepository' => 'App\\Repository\\CuentaCorrienteRepository',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'pagoCanalRepository' => 'App\\Repository\\PagoCanalRepository',
            'pagoCuotasRepository' => 'App\\Repository\\PagoCuotasRepository',
            'pagoRepository' => 'App\\Repository\\PagoRepository',
            'pagoTipoRepository' => 'App\\Repository\\PagoTipoRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator._g6XNTO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_G6XNTOService()
    {
        return $this->privates['.service_locator._g6XNTO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuario' => ['privates', '.errored..service_locator._g6XNTO.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator._g6XNTO": it references class "App\\Entity\\Usuario" but no such service exists.'],
        ], [
            'usuario' => 'App\\Entity\\Usuario',
        ]);
    }

    /*
     * Gets the private '.service_locator.aMe1AiS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_AMe1AiSService()
    {
        return $this->privates['.service_locator.aMe1AiS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agenda' => ['privates', '.errored..service_locator.aMe1AiS.App\\Entity\\Agenda', NULL, 'Cannot autowire service ".service_locator.aMe1AiS": it references class "App\\Entity\\Agenda" but no such service exists.'],
        ], [
            'agenda' => 'App\\Entity\\Agenda',
        ]);
    }

    /*
     * Gets the private '.service_locator.abnZuor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_AbnZuorService()
    {
        return $this->privates['.service_locator.abnZuor'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'usuario' => ['privates', '.errored..service_locator.abnZuor.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.abnZuor": it references class "App\\Entity\\Usuario" but no such service exists.'],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'usuario' => 'App\\Entity\\Usuario',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.b6NHBF9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_B6NHBF9Service()
    {
        return $this->privates['.service_locator.b6NHBF9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
        ], [
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'paginator' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.bsYhYgq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_BsYhYgqService()
    {
        return $this->privates['.service_locator.bsYhYgq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRol' => ['privates', '.errored..service_locator.bsYhYgq.App\\Entity\\ContratoRol', NULL, 'Cannot autowire service ".service_locator.bsYhYgq": it references class "App\\Entity\\ContratoRol" but no such service exists.'],
            'contratoRolRepository' => ['privates', 'App\\Repository\\ContratoRolRepository', 'getContratoRolRepositoryService', false],
            'juzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
        ], [
            'contratoRol' => 'App\\Entity\\ContratoRol',
            'contratoRolRepository' => 'App\\Repository\\ContratoRolRepository',
            'juzgadoRepository' => 'App\\Repository\\JuzgadoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.c2jZgF0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_C2jZgF0Service()
    {
        return $this->privates['.service_locator.c2jZgF0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.cD6F.y4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CD6F_Y4Service()
    {
        return $this->privates['.service_locator.cD6F.y4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuentum' => ['privates', '.errored..service_locator.cD6F.y4.App\\Entity\\Cuenta', NULL, 'Cannot autowire service ".service_locator.cD6F.y4": it references class "App\\Entity\\Cuenta" but no such service exists.'],
        ], [
            'cuentum' => 'App\\Entity\\Cuenta',
        ]);
    }

    /*
     * Gets the private '.service_locator.cNnViMJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_CNnViMJService()
    {
        return $this->privates['.service_locator.cNnViMJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator.cNnViMJ.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.cNnViMJ": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.dzE1eBI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_DzE1eBIService()
    {
        return $this->privates['.service_locator.dzE1eBI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator.dzE1eBI.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.dzE1eBI": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'pagoRepository' => ['privates', 'App\\Repository\\PagoRepository', 'getPagoRepositoryService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'pagoRepository' => 'App\\Repository\\PagoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.eXD55sI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_EXD55sIService()
    {
        return $this->privates['.service_locator.eXD55sI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.fReJfnS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_FReJfnSService()
    {
        return $this->privates['.service_locator.fReJfnS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.fY7iPWr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_FY7iPWrService()
    {
        return $this->privates['.service_locator.fY7iPWr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuota' => ['privates', '.errored..service_locator.fY7iPWr.App\\Entity\\Cuota', NULL, 'Cannot autowire service ".service_locator.fY7iPWr": it references class "App\\Entity\\Cuota" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'pagoCuotasRepository' => ['privates', 'App\\Repository\\PagoCuotasRepository', 'getPagoCuotasRepositoryService', false],
        ], [
            'cuota' => 'App\\Entity\\Cuota',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'pagoCuotasRepository' => 'App\\Repository\\PagoCuotasRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.gBsSb5L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_GBsSb5LService()
    {
        return $this->privates['.service_locator.gBsSb5L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'moduloRepository' => ['privates', 'App\\Repository\\ModuloRepository', 'getModuloRepositoryService', false],
        ], [
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'moduloRepository' => 'App\\Repository\\ModuloRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.h9rUVrY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_H9rUVrYService()
    {
        return $this->privates['.service_locator.h9rUVrY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'contrato' => ['privates', '.errored..service_locator.h9rUVrY.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.h9rUVrY": it references class "App\\Entity\\Contrato" but no such service exists.'],
        ], [
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'contrato' => 'App\\Entity\\Contrato',
        ]);
    }

    /*
     * Gets the private '.service_locator.hszs.DW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Hszs_DWService()
    {
        return $this->privates['.service_locator.hszs.DW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
        ], [
            'encoder' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.jWPN0B5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JWPN0B5Service()
    {
        return $this->privates['.service_locator.jWPN0B5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configuracion' => ['privates', '.errored..service_locator.jWPN0B5.App\\Entity\\Configuracion', NULL, 'Cannot autowire service ".service_locator.jWPN0B5": it references class "App\\Entity\\Configuracion" but no such service exists.'],
        ], [
            'configuracion' => 'App\\Entity\\Configuracion',
        ]);
    }

    /*
     * Gets the private '.service_locator.jucI2NL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JucI2NLService()
    {
        return $this->privates['.service_locator.jucI2NL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'pai' => ['privates', '.errored..service_locator.jucI2NL.App\\Entity\\Pais', NULL, 'Cannot autowire service ".service_locator.jucI2NL": it references class "App\\Entity\\Pais" but no such service exists.'],
        ], [
            'pai' => 'App\\Entity\\Pais',
        ]);
    }

    /*
     * Gets the private '.service_locator.k82ifbT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_K82ifbTService()
    {
        return $this->privates['.service_locator.k82ifbT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'vencimientoRepository' => ['privates', 'App\\Repository\\VencimientoRepository', 'getVencimientoRepositoryService', false],
        ], [
            'vencimientoRepository' => 'App\\Repository\\VencimientoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.l9ENZ48' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_L9ENZ48Service()
    {
        return $this->privates['.service_locator.l9ENZ48'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'cuenta' => ['privates', '.errored..service_locator.l9ENZ48.App\\Entity\\Cuenta', NULL, 'Cannot autowire service ".service_locator.l9ENZ48": it references class "App\\Entity\\Cuenta" but no such service exists.'],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'cuenta' => 'App\\Entity\\Cuenta',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.lq.nSOB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Lq_NSOBService()
    {
        return $this->privates['.service_locator.lq.nSOB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'tipoDocumento' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'usuario' => ['privates', '.errored..service_locator.lq.nSOB.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.lq.nSOB": it references class "App\\Entity\\Usuario" but no such service exists.'],
            'usuarioNoDisponibleRepository' => ['privates', 'App\\Repository\\UsuarioNoDisponibleRepository', 'getUsuarioNoDisponibleRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'tipoDocumento' => 'App\\Repository\\UsuarioTipoDocumentoRepository',
            'usuario' => 'App\\Entity\\Usuario',
            'usuarioNoDisponibleRepository' => 'App\\Repository\\UsuarioNoDisponibleRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.nIfFBcT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_NIfFBcTService()
    {
        return $this->privates['.service_locator.nIfFBcT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contrato' => ['privates', '.errored..service_locator.nIfFBcT.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.nIfFBcT": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'pagoCuotasRepository' => ['privates', 'App\\Repository\\PagoCuotasRepository', 'getPagoCuotasRepositoryService', false],
        ], [
            'contrato' => 'App\\Entity\\Contrato',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'pagoCuotasRepository' => 'App\\Repository\\PagoCuotasRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.nK.b2Ho' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_NK_B2HoService()
    {
        return $this->privates['.service_locator.nK.b2Ho'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRolRepository' => ['privates', 'App\\Repository\\ContratoRolRepository', 'getContratoRolRepositoryService', false],
        ], [
            'contratoRolRepository' => 'App\\Repository\\ContratoRolRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.onFC5Cx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_OnFC5CxService()
    {
        return $this->privates['.service_locator.onFC5Cx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'usuario' => ['privates', '.errored..service_locator.onFC5Cx.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.onFC5Cx": it references class "App\\Entity\\Usuario" but no such service exists.'],
        ], [
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'usuario' => 'App\\Entity\\Usuario',
        ]);
    }

    /*
     * Gets the private '.service_locator.pBYZih8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PBYZih8Service()
    {
        return $this->privates['.service_locator.pBYZih8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'paisRepository' => ['privates', 'App\\Repository\\PaisRepository', 'getPaisRepositoryService', false],
        ], [
            'paisRepository' => 'App\\Repository\\PaisRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.pNNo5z3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PNNo5z3Service()
    {
        return $this->privates['.service_locator.pNNo5z3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.q6jLs_L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Q6jLsLService()
    {
        return $this->privates['.service_locator.q6jLs_L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authenticationUtils' => '?',
        ]);
    }

    /*
     * Gets the private '.service_locator.qyoxXJZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_QyoxXJZService()
    {
        return $this->privates['.service_locator.qyoxXJZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'configuracionRepository' => ['privates', 'App\\Repository\\ConfiguracionRepository', 'getConfiguracionRepositoryService', false],
            'contrato' => ['privates', '.errored..service_locator.qyoxXJZ.App\\Entity\\Contrato', NULL, 'Cannot autowire service ".service_locator.qyoxXJZ": it references class "App\\Entity\\Contrato" but no such service exists.'],
            'cuotaRepository' => ['privates', 'App\\Repository\\CuotaRepository', 'getCuotaRepositoryService', false],
            'diasPagoRepository' => ['privates', 'App\\Repository\\DiasPagoRepository', 'getDiasPagoRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'configuracionRepository' => 'App\\Repository\\ConfiguracionRepository',
            'contrato' => 'App\\Entity\\Contrato',
            'cuotaRepository' => 'App\\Repository\\CuotaRepository',
            'diasPagoRepository' => 'App\\Repository\\DiasPagoRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.r5S5nuE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_R5S5nuEService()
    {
        return $this->privates['.service_locator.r5S5nuE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRol' => ['privates', '.errored..service_locator.r5S5nuE.App\\Entity\\ContratoRol', NULL, 'Cannot autowire service ".service_locator.r5S5nuE": it references class "App\\Entity\\ContratoRol" but no such service exists.'],
        ], [
            'contratoRol' => 'App\\Entity\\ContratoRol',
        ]);
    }

    /*
     * Gets the private '.service_locator.riFMhde' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RiFMhdeService()
    {
        return $this->privates['.service_locator.riFMhde'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'paginator' => '?',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.rpxV3kS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RpxV3kSService()
    {
        return $this->privates['.service_locator.rpxV3kS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'privilegio' => ['privates', '.errored..service_locator.rpxV3kS.App\\Entity\\Privilegio', NULL, 'Cannot autowire service ".service_locator.rpxV3kS": it references class "App\\Entity\\Privilegio" but no such service exists.'],
        ], [
            'privilegio' => 'App\\Entity\\Privilegio',
        ]);
    }

    /*
     * Gets the private '.service_locator.rqlU3E_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RqlU3EService()
    {
        return $this->privates['.service_locator.rqlU3E_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'encoder' => '?',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.sBhv2Cg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SBhv2CgService()
    {
        return $this->privates['.service_locator.sBhv2Cg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agenda' => ['privates', '.errored..service_locator.sBhv2Cg.App\\Entity\\Agenda', NULL, 'Cannot autowire service ".service_locator.sBhv2Cg": it references class "App\\Entity\\Agenda" but no such service exists.'],
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'contratoRolRepository' => ['privates', 'App\\Repository\\ContratoRolRepository', 'getContratoRolRepositoryService', false],
            'juzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
            'sucursalRepository' => ['privates', 'App\\Repository\\SucursalRepository', 'getSucursalRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agenda' => 'App\\Entity\\Agenda',
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'contratoRolRepository' => 'App\\Repository\\ContratoRolRepository',
            'juzgadoRepository' => 'App\\Repository\\JuzgadoRepository',
            'sucursalRepository' => 'App\\Repository\\SucursalRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.sJ4K5iu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SJ4K5iuService()
    {
        return $this->privates['.service_locator.sJ4K5iu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'moduloRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'privilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
            'usuarioTipo' => ['privates', '.errored..service_locator.sJ4K5iu.App\\Entity\\UsuarioTipo', NULL, 'Cannot autowire service ".service_locator.sJ4K5iu": it references class "App\\Entity\\UsuarioTipo" but no such service exists.'],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
            'moduloRepository' => 'App\\Repository\\ModuloPerRepository',
            'privilegioTipousuarioRepository' => 'App\\Repository\\PrivilegioTipousuarioRepository',
            'usuarioTipo' => 'App\\Entity\\UsuarioTipo',
        ]);
    }

    /*
     * Gets the private '.service_locator.sZu15Tb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SZu15TbService()
    {
        return $this->privates['.service_locator.sZu15Tb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
        ], [
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.sy1d2n_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Sy1d2nService()
    {
        return $this->privates['.service_locator.sy1d2n_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'privilegio' => ['privates', '.errored..service_locator.sy1d2n_.App\\Entity\\Privilegio', NULL, 'Cannot autowire service ".service_locator.sy1d2n_": it references class "App\\Entity\\Privilegio" but no such service exists.'],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
            'privilegio' => 'App\\Entity\\Privilegio',
        ]);
    }

    /*
     * Gets the private '.service_locator.tKHC2e8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_TKHC2e8Service()
    {
        return $this->privates['.service_locator.tKHC2e8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'usuarioNoDisponibleRepository' => ['privates', 'App\\Repository\\UsuarioNoDisponibleRepository', 'getUsuarioNoDisponibleRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
            'usuarioNoDisponibleRepository' => 'App\\Repository\\UsuarioNoDisponibleRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.tcvPBU9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_TcvPBU9Service()
    {
        return $this->privates['.service_locator.tcvPBU9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioNoDisponible' => ['privates', '.errored..service_locator.tcvPBU9.App\\Entity\\UsuarioNoDisponible', NULL, 'Cannot autowire service ".service_locator.tcvPBU9": it references class "App\\Entity\\UsuarioNoDisponible" but no such service exists.'],
        ], [
            'usuarioNoDisponible' => 'App\\Entity\\UsuarioNoDisponible',
        ]);
    }

    /*
     * Gets the private '.service_locator.uX2xS.X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_UX2xS_XService()
    {
        return $this->privates['.service_locator.uX2xS.X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'privilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'privilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
            'tipoDocumento' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'privilegioRepository' => 'App\\Repository\\PrivilegioRepository',
            'privilegioTipousuarioRepository' => 'App\\Repository\\PrivilegioTipousuarioRepository',
            'tipoDocumento' => 'App\\Repository\\UsuarioTipoDocumentoRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.vHOMGh2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VHOMGh2Service()
    {
        return $this->privates['.service_locator.vHOMGh2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'configuracionRepository' => ['privates', 'App\\Repository\\ConfiguracionRepository', 'getConfiguracionRepositoryService', false],
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'privilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'privilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
            'tipoDocumento' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'configuracionRepository' => 'App\\Repository\\ConfiguracionRepository',
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'privilegioRepository' => 'App\\Repository\\PrivilegioRepository',
            'privilegioTipousuarioRepository' => 'App\\Repository\\PrivilegioTipousuarioRepository',
            'tipoDocumento' => 'App\\Repository\\UsuarioTipoDocumentoRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.vozMxkb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VozMxkbService()
    {
        return $this->privates['.service_locator.vozMxkb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'empresaRepository' => ['privates', 'App\\Repository\\EmpresaRepository', 'getEmpresaRepositoryService', false],
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'empresaRepository' => 'App\\Repository\\EmpresaRepository',
            'menuRepository' => 'App\\Repository\\MenuRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.w037Jll' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_W037JllService()
    {
        return $this->privates['.service_locator.w037Jll'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'usuarioStatus' => ['privates', '.errored..service_locator.w037Jll.App\\Entity\\UsuarioStatus', NULL, 'Cannot autowire service ".service_locator.w037Jll": it references class "App\\Entity\\UsuarioStatus" but no such service exists.'],
        ], [
            'usuarioStatus' => 'App\\Entity\\UsuarioStatus',
        ]);
    }

    /*
     * Gets the private '.service_locator.w_BXEJJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_WBXEJJService()
    {
        return $this->privates['.service_locator.w_BXEJJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accion' => ['privates', '.errored..service_locator.w_BXEJJ.App\\Entity\\Accion', NULL, 'Cannot autowire service ".service_locator.w_BXEJJ": it references class "App\\Entity\\Accion" but no such service exists.'],
        ], [
            'accion' => 'App\\Entity\\Accion',
        ]);
    }

    /*
     * Gets the private '.service_locator.w_SvetQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_WSvetQService()
    {
        return $this->privates['.service_locator.w_SvetQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'menu' => ['privates', '.errored..service_locator.w_SvetQ.App\\Entity\\Menu', NULL, 'Cannot autowire service ".service_locator.w_SvetQ": it references class "App\\Entity\\Menu" but no such service exists.'],
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'menu' => 'App\\Entity\\Menu',
            'menuRepository' => 'App\\Repository\\MenuRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.wiQplfK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_WiQplfKService()
    {
        return $this->privates['.service_locator.wiQplfK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'accionRepository' => ['privates', 'App\\Repository\\AccionRepository', 'getAccionRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'privilegioRepository' => ['privates', 'App\\Repository\\PrivilegioRepository', 'getPrivilegioRepositoryService', false],
            'privilegioTipousuarioRepository' => ['privates', 'App\\Repository\\PrivilegioTipousuarioRepository', 'getPrivilegioTipousuarioRepositoryService', false],
            'usuarioTipo' => ['privates', '.errored..service_locator.wiQplfK.App\\Entity\\UsuarioTipo', NULL, 'Cannot autowire service ".service_locator.wiQplfK": it references class "App\\Entity\\UsuarioTipo" but no such service exists.'],
        ], [
            'accionRepository' => 'App\\Repository\\AccionRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'privilegioRepository' => 'App\\Repository\\PrivilegioRepository',
            'privilegioTipousuarioRepository' => 'App\\Repository\\PrivilegioTipousuarioRepository',
            'usuarioTipo' => 'App\\Entity\\UsuarioTipo',
        ]);
    }

    /*
     * Gets the private '.service_locator.xgo.uLQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Xgo_ULQService()
    {
        return $this->privates['.service_locator.xgo.uLQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contratoRolRepository' => ['privates', 'App\\Repository\\ContratoRolRepository', 'getContratoRolRepositoryService', false],
            'juzgadoRepository' => ['privates', 'App\\Repository\\JuzgadoRepository', 'getJuzgadoRepositoryService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
        ], [
            'contratoRolRepository' => 'App\\Repository\\ContratoRolRepository',
            'juzgadoRepository' => 'App\\Repository\\JuzgadoRepository',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.xoZum86' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XoZum86Service()
    {
        return $this->privates['.service_locator.xoZum86'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'agendaStatusRepository' => ['privates', 'App\\Repository\\AgendaStatusRepository', 'getAgendaStatusRepositoryService', false],
            'contratoRepository' => ['privates', 'App\\Repository\\ContratoRepository', 'getContratoRepositoryService', false],
            'cuentaRepository' => ['privates', 'App\\Repository\\CuentaRepository', 'getCuentaRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
            'agendaStatusRepository' => 'App\\Repository\\AgendaStatusRepository',
            'contratoRepository' => 'App\\Repository\\ContratoRepository',
            'cuentaRepository' => 'App\\Repository\\CuentaRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.yGoJWDw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_YGoJWDwService()
    {
        return $this->privates['.service_locator.yGoJWDw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'agenda' => ['privates', '.errored..service_locator.yGoJWDw.App\\Entity\\Agenda', NULL, 'Cannot autowire service ".service_locator.yGoJWDw": it references class "App\\Entity\\Agenda" but no such service exists.'],
            'agendaRepository' => ['privates', 'App\\Repository\\AgendaRepository', 'getAgendaRepositoryService', false],
            'usuarioRepository' => ['privates', 'App\\Repository\\UsuarioRepository', 'getUsuarioRepositoryService', false],
        ], [
            'agenda' => 'App\\Entity\\Agenda',
            'agendaRepository' => 'App\\Repository\\AgendaRepository',
            'usuarioRepository' => 'App\\Repository\\UsuarioRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.z9E6LMa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Z9E6LMaService()
    {
        return $this->privates['.service_locator.z9E6LMa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'moduloPerRepository' => ['privates', 'App\\Repository\\ModuloPerRepository', 'getModuloPerRepositoryService', false],
            'tipoDocumento' => ['privates', 'App\\Repository\\UsuarioTipoDocumentoRepository', 'getUsuarioTipoDocumentoRepositoryService', false],
            'usuarioTipoRepository' => ['privates', 'App\\Repository\\UsuarioTipoRepository', 'getUsuarioTipoRepositoryService', false],
        ], [
            'encoder' => '?',
            'moduloPerRepository' => 'App\\Repository\\ModuloPerRepository',
            'tipoDocumento' => 'App\\Repository\\UsuarioTipoDocumentoRepository',
            'usuarioTipoRepository' => 'App\\Repository\\UsuarioTipoRepository',
        ]);
    }

    /*
     * Gets the private '.service_locator.zGaaEJz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ZGaaEJzService()
    {
        return $this->privates['.service_locator.zGaaEJz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'empresa' => ['privates', '.errored..service_locator.zGaaEJz.App\\Entity\\Empresa', NULL, 'Cannot autowire service ".service_locator.zGaaEJz": it references class "App\\Entity\\Empresa" but no such service exists.'],
        ], [
            'empresa' => 'App\\Entity\\Empresa',
        ]);
    }

    /*
     * Gets the private '.service_locator.zSBANml' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ZSBANmlService()
    {
        return $this->privates['.service_locator.zSBANml'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'privilegioTipousuario' => ['privates', '.errored..service_locator.zSBANml.App\\Entity\\PrivilegioTipousuario', NULL, 'Cannot autowire service ".service_locator.zSBANml": it references class "App\\Entity\\PrivilegioTipousuario" but no such service exists.'],
        ], [
            'privilegioTipousuario' => 'App\\Entity\\PrivilegioTipousuario',
        ]);
    }

    /*
     * Gets the private 'App\Command\AsignarLeadsCommand' shared autowired service.
     *
     * @return \App\Command\AsignarLeadsCommand
     */
    protected function getAsignarLeadsCommandService()
    {
        $this->privates['App\\Command\\AsignarLeadsCommand'] = $instance = new \App\Command\AsignarLeadsCommand($this);

        $instance->setName('app:asignar-leads');

        return $instance;
    }

    /*
     * Gets the private 'App\Command\FondoFijoCommand' shared autowired service.
     *
     * @return \App\Command\FondoFijoCommand
     */
    protected function getFondoFijoCommandService()
    {
        $this->privates['App\\Command\\FondoFijoCommand'] = $instance = new \App\Command\FondoFijoCommand(($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['twig'] ?? $this->getTwigService()), $this);

        $instance->setName('fondo-fijo');

        return $instance;
    }

    /*
     * Gets the private 'App\Form\AccionType' shared autowired service.
     *
     * @return \App\Form\AccionType
     */
    protected function getAccionTypeService()
    {
        return $this->privates['App\\Form\\AccionType'] = new \App\Form\AccionType();
    }

    /*
     * Gets the private 'App\Form\AgendaType' shared autowired service.
     *
     * @return \App\Form\AgendaType
     */
    protected function getAgendaTypeService()
    {
        return $this->privates['App\\Form\\AgendaType'] = new \App\Form\AgendaType();
    }

    /*
     * Gets the private 'App\Form\ChangePasswordFormType' shared autowired service.
     *
     * @return \App\Form\ChangePasswordFormType
     */
    protected function getChangePasswordFormTypeService()
    {
        return $this->privates['App\\Form\\ChangePasswordFormType'] = new \App\Form\ChangePasswordFormType();
    }

    /*
     * Gets the private 'App\Form\ClientePotencialType' shared autowired service.
     *
     * @return \App\Form\ClientePotencialType
     */
    protected function getClientePotencialTypeService()
    {
        return $this->privates['App\\Form\\ClientePotencialType'] = new \App\Form\ClientePotencialType();
    }

    /*
     * Gets the private 'App\Form\ConfiguracionType' shared autowired service.
     *
     * @return \App\Form\ConfiguracionType
     */
    protected function getConfiguracionTypeService()
    {
        return $this->privates['App\\Form\\ConfiguracionType'] = new \App\Form\ConfiguracionType();
    }

    /*
     * Gets the private 'App\Form\ContratoRolType' shared autowired service.
     *
     * @return \App\Form\ContratoRolType
     */
    protected function getContratoRolTypeService()
    {
        return $this->privates['App\\Form\\ContratoRolType'] = new \App\Form\ContratoRolType();
    }

    /*
     * Gets the private 'App\Form\ContratoType' shared autowired service.
     *
     * @return \App\Form\ContratoType
     */
    protected function getContratoTypeService()
    {
        return $this->privates['App\\Form\\ContratoType'] = new \App\Form\ContratoType();
    }

    /*
     * Gets the private 'App\Form\CuentaType' shared autowired service.
     *
     * @return \App\Form\CuentaType
     */
    protected function getCuentaTypeService()
    {
        return $this->privates['App\\Form\\CuentaType'] = new \App\Form\CuentaType();
    }

    /*
     * Gets the private 'App\Form\CuotaType' shared autowired service.
     *
     * @return \App\Form\CuotaType
     */
    protected function getCuotaTypeService()
    {
        return $this->privates['App\\Form\\CuotaType'] = new \App\Form\CuotaType();
    }

    /*
     * Gets the private 'App\Form\EmpresaType' shared autowired service.
     *
     * @return \App\Form\EmpresaType
     */
    protected function getEmpresaTypeService()
    {
        return $this->privates['App\\Form\\EmpresaType'] = new \App\Form\EmpresaType();
    }

    /*
     * Gets the private 'App\Form\GestionarType' shared autowired service.
     *
     * @return \App\Form\GestionarType
     */
    protected function getGestionarTypeService()
    {
        return $this->privates['App\\Form\\GestionarType'] = new \App\Form\GestionarType();
    }

    /*
     * Gets the private 'App\Form\ImportacionType' shared autowired service.
     *
     * @return \App\Form\ImportacionType
     */
    protected function getImportacionTypeService()
    {
        return $this->privates['App\\Form\\ImportacionType'] = new \App\Form\ImportacionType();
    }

    /*
     * Gets the private 'App\Form\MenuCabezeraType' shared autowired service.
     *
     * @return \App\Form\MenuCabezeraType
     */
    protected function getMenuCabezeraTypeService()
    {
        return $this->privates['App\\Form\\MenuCabezeraType'] = new \App\Form\MenuCabezeraType();
    }

    /*
     * Gets the private 'App\Form\MenuType' shared autowired service.
     *
     * @return \App\Form\MenuType
     */
    protected function getMenuTypeService()
    {
        return $this->privates['App\\Form\\MenuType'] = new \App\Form\MenuType();
    }

    /*
     * Gets the private 'App\Form\ModuloPerType' shared autowired service.
     *
     * @return \App\Form\ModuloPerType
     */
    protected function getModuloPerTypeService()
    {
        return $this->privates['App\\Form\\ModuloPerType'] = new \App\Form\ModuloPerType();
    }

    /*
     * Gets the private 'App\Form\ModuloType' shared autowired service.
     *
     * @return \App\Form\ModuloType
     */
    protected function getModuloTypeService()
    {
        return $this->privates['App\\Form\\ModuloType'] = new \App\Form\ModuloType();
    }

    /*
     * Gets the private 'App\Form\PagoCanalType' shared autowired service.
     *
     * @return \App\Form\PagoCanalType
     */
    protected function getPagoCanalTypeService()
    {
        return $this->privates['App\\Form\\PagoCanalType'] = new \App\Form\PagoCanalType();
    }

    /*
     * Gets the private 'App\Form\PagoTipoType' shared autowired service.
     *
     * @return \App\Form\PagoTipoType
     */
    protected function getPagoTipoTypeService()
    {
        return $this->privates['App\\Form\\PagoTipoType'] = new \App\Form\PagoTipoType();
    }

    /*
     * Gets the private 'App\Form\PagoType' shared autowired service.
     *
     * @return \App\Form\PagoType
     */
    protected function getPagoTypeService()
    {
        return $this->privates['App\\Form\\PagoType'] = new \App\Form\PagoType();
    }

    /*
     * Gets the private 'App\Form\PaisType' shared autowired service.
     *
     * @return \App\Form\PaisType
     */
    protected function getPaisTypeService()
    {
        return $this->privates['App\\Form\\PaisType'] = new \App\Form\PaisType();
    }

    /*
     * Gets the private 'App\Form\PrivilegioTipousuarioType' shared autowired service.
     *
     * @return \App\Form\PrivilegioTipousuarioType
     */
    protected function getPrivilegioTipousuarioTypeService()
    {
        return $this->privates['App\\Form\\PrivilegioTipousuarioType'] = new \App\Form\PrivilegioTipousuarioType();
    }

    /*
     * Gets the private 'App\Form\PrivilegioType' shared autowired service.
     *
     * @return \App\Form\PrivilegioType
     */
    protected function getPrivilegioTypeService()
    {
        return $this->privates['App\\Form\\PrivilegioType'] = new \App\Form\PrivilegioType();
    }

    /*
     * Gets the private 'App\Form\ResetPasswordRequestFormType' shared autowired service.
     *
     * @return \App\Form\ResetPasswordRequestFormType
     */
    protected function getResetPasswordRequestFormTypeService()
    {
        return $this->privates['App\\Form\\ResetPasswordRequestFormType'] = new \App\Form\ResetPasswordRequestFormType();
    }

    /*
     * Gets the private 'App\Form\SucursalType' shared autowired service.
     *
     * @return \App\Form\SucursalType
     */
    protected function getSucursalTypeService()
    {
        return $this->privates['App\\Form\\SucursalType'] = new \App\Form\SucursalType();
    }

    /*
     * Gets the private 'App\Form\UsuarioCategoriaType' shared autowired service.
     *
     * @return \App\Form\UsuarioCategoriaType
     */
    protected function getUsuarioCategoriaTypeService()
    {
        return $this->privates['App\\Form\\UsuarioCategoriaType'] = new \App\Form\UsuarioCategoriaType();
    }

    /*
     * Gets the private 'App\Form\UsuarioCuentaType' shared autowired service.
     *
     * @return \App\Form\UsuarioCuentaType
     */
    protected function getUsuarioCuentaTypeService()
    {
        return $this->privates['App\\Form\\UsuarioCuentaType'] = new \App\Form\UsuarioCuentaType();
    }

    /*
     * Gets the private 'App\Form\UsuarioNoDisponibleType' shared autowired service.
     *
     * @return \App\Form\UsuarioNoDisponibleType
     */
    protected function getUsuarioNoDisponibleTypeService()
    {
        return $this->privates['App\\Form\\UsuarioNoDisponibleType'] = new \App\Form\UsuarioNoDisponibleType();
    }

    /*
     * Gets the private 'App\Form\UsuarioStatusType' shared autowired service.
     *
     * @return \App\Form\UsuarioStatusType
     */
    protected function getUsuarioStatusTypeService()
    {
        return $this->privates['App\\Form\\UsuarioStatusType'] = new \App\Form\UsuarioStatusType();
    }

    /*
     * Gets the private 'App\Form\UsuarioTipoType' shared autowired service.
     *
     * @return \App\Form\UsuarioTipoType
     */
    protected function getUsuarioTipoTypeService()
    {
        return $this->privates['App\\Form\\UsuarioTipoType'] = new \App\Form\UsuarioTipoType();
    }

    /*
     * Gets the private 'App\Form\UsuarioType' shared autowired service.
     *
     * @return \App\Form\UsuarioType
     */
    protected function getUsuarioTypeService()
    {
        return $this->privates['App\\Form\\UsuarioType'] = new \App\Form\UsuarioType();
    }

    /*
     * Gets the private 'App\Form\VencimientoType' shared autowired service.
     *
     * @return \App\Form\VencimientoType
     */
    protected function getVencimientoTypeService()
    {
        return $this->privates['App\\Form\\VencimientoType'] = new \App\Form\VencimientoType();
    }

    /*
     * Gets the private 'App\Repository\AccionRepository' shared autowired service.
     *
     * @return \App\Repository\AccionRepository
     */
    protected function getAccionRepositoryService()
    {
        return $this->privates['App\\Repository\\AccionRepository'] = new \App\Repository\AccionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\AgendaObservacionRepository' shared autowired service.
     *
     * @return \App\Repository\AgendaObservacionRepository
     */
    protected function getAgendaObservacionRepositoryService()
    {
        return $this->privates['App\\Repository\\AgendaObservacionRepository'] = new \App\Repository\AgendaObservacionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\AgendaRepository' shared autowired service.
     *
     * @return \App\Repository\AgendaRepository
     */
    protected function getAgendaRepositoryService()
    {
        return $this->privates['App\\Repository\\AgendaRepository'] = new \App\Repository\AgendaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\AgendaRolRepository' shared autowired service.
     *
     * @return \App\Repository\AgendaRolRepository
     */
    protected function getAgendaRolRepositoryService()
    {
        return $this->privates['App\\Repository\\AgendaRolRepository'] = new \App\Repository\AgendaRolRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\AgendaStatusRepository' shared autowired service.
     *
     * @return \App\Repository\AgendaStatusRepository
     */
    protected function getAgendaStatusRepositoryService()
    {
        return $this->privates['App\\Repository\\AgendaStatusRepository'] = new \App\Repository\AgendaStatusRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ClientePotencialRepository' shared autowired service.
     *
     * @return \App\Repository\ClientePotencialRepository
     */
    protected function getClientePotencialRepositoryService()
    {
        return $this->privates['App\\Repository\\ClientePotencialRepository'] = new \App\Repository\ClientePotencialRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ConfiguracionRepository' shared autowired service.
     *
     * @return \App\Repository\ConfiguracionRepository
     */
    protected function getConfiguracionRepositoryService()
    {
        return $this->privates['App\\Repository\\ConfiguracionRepository'] = new \App\Repository\ConfiguracionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContratoAnexoRepository' shared autowired service.
     *
     * @return \App\Repository\ContratoAnexoRepository
     */
    protected function getContratoAnexoRepositoryService()
    {
        return $this->privates['App\\Repository\\ContratoAnexoRepository'] = new \App\Repository\ContratoAnexoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContratoRepository' shared autowired service.
     *
     * @return \App\Repository\ContratoRepository
     */
    protected function getContratoRepositoryService()
    {
        return $this->privates['App\\Repository\\ContratoRepository'] = new \App\Repository\ContratoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContratoRolRepository' shared autowired service.
     *
     * @return \App\Repository\ContratoRolRepository
     */
    protected function getContratoRolRepositoryService()
    {
        return $this->privates['App\\Repository\\ContratoRolRepository'] = new \App\Repository\ContratoRolRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContratoTramitadorRepository' shared autowired service.
     *
     * @return \App\Repository\ContratoTramitadorRepository
     */
    protected function getContratoTramitadorRepositoryService()
    {
        return $this->privates['App\\Repository\\ContratoTramitadorRepository'] = new \App\Repository\ContratoTramitadorRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContratoVehiculoRepository' shared autowired service.
     *
     * @return \App\Repository\ContratoVehiculoRepository
     */
    protected function getContratoVehiculoRepositoryService()
    {
        return $this->privates['App\\Repository\\ContratoVehiculoRepository'] = new \App\Repository\ContratoVehiculoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ContratoViviendaRepository' shared autowired service.
     *
     * @return \App\Repository\ContratoViviendaRepository
     */
    protected function getContratoViviendaRepositoryService()
    {
        return $this->privates['App\\Repository\\ContratoViviendaRepository'] = new \App\Repository\ContratoViviendaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CuentaCorrienteRepository' shared autowired service.
     *
     * @return \App\Repository\CuentaCorrienteRepository
     */
    protected function getCuentaCorrienteRepositoryService()
    {
        return $this->privates['App\\Repository\\CuentaCorrienteRepository'] = new \App\Repository\CuentaCorrienteRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CuentaRepository' shared autowired service.
     *
     * @return \App\Repository\CuentaRepository
     */
    protected function getCuentaRepositoryService()
    {
        return $this->privates['App\\Repository\\CuentaRepository'] = new \App\Repository\CuentaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CuentasRepository' shared autowired service.
     *
     * @return \App\Repository\CuentasRepository
     */
    protected function getCuentasRepositoryService()
    {
        return $this->privates['App\\Repository\\CuentasRepository'] = new \App\Repository\CuentasRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CuotaRepository' shared autowired service.
     *
     * @return \App\Repository\CuotaRepository
     */
    protected function getCuotaRepositoryService()
    {
        return $this->privates['App\\Repository\\CuotaRepository'] = new \App\Repository\CuotaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\CuotasRepository' shared autowired service.
     *
     * @return \App\Repository\CuotasRepository
     */
    protected function getCuotasRepositoryService()
    {
        return $this->privates['App\\Repository\\CuotasRepository'] = new \App\Repository\CuotasRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\DiasPagoRepository' shared autowired service.
     *
     * @return \App\Repository\DiasPagoRepository
     */
    protected function getDiasPagoRepositoryService()
    {
        return $this->privates['App\\Repository\\DiasPagoRepository'] = new \App\Repository\DiasPagoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\EmpresaRepository' shared autowired service.
     *
     * @return \App\Repository\EmpresaRepository
     */
    protected function getEmpresaRepositoryService()
    {
        return $this->privates['App\\Repository\\EmpresaRepository'] = new \App\Repository\EmpresaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\EscrituraRepository' shared autowired service.
     *
     * @return \App\Repository\EscrituraRepository
     */
    protected function getEscrituraRepositoryService()
    {
        return $this->privates['App\\Repository\\EscrituraRepository'] = new \App\Repository\EscrituraRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\EstadoCivilRepository' shared autowired service.
     *
     * @return \App\Repository\EstadoCivilRepository
     */
    protected function getEstadoCivilRepositoryService()
    {
        return $this->privates['App\\Repository\\EstadoCivilRepository'] = new \App\Repository\EstadoCivilRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\EstrategiaJuridicaRepository' shared autowired service.
     *
     * @return \App\Repository\EstrategiaJuridicaRepository
     */
    protected function getEstrategiaJuridicaRepositoryService()
    {
        return $this->privates['App\\Repository\\EstrategiaJuridicaRepository'] = new \App\Repository\EstrategiaJuridicaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\GestionarRepository' shared autowired service.
     *
     * @return \App\Repository\GestionarRepository
     */
    protected function getGestionarRepositoryService()
    {
        return $this->privates['App\\Repository\\GestionarRepository'] = new \App\Repository\GestionarRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ImportacionRepository' shared autowired service.
     *
     * @return \App\Repository\ImportacionRepository
     */
    protected function getImportacionRepositoryService()
    {
        return $this->privates['App\\Repository\\ImportacionRepository'] = new \App\Repository\ImportacionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\JuzgadoRepository' shared autowired service.
     *
     * @return \App\Repository\JuzgadoRepository
     */
    protected function getJuzgadoRepositoryService()
    {
        return $this->privates['App\\Repository\\JuzgadoRepository'] = new \App\Repository\JuzgadoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\MenuCabezeraRepository' shared autowired service.
     *
     * @return \App\Repository\MenuCabezeraRepository
     */
    protected function getMenuCabezeraRepositoryService()
    {
        return $this->privates['App\\Repository\\MenuCabezeraRepository'] = new \App\Repository\MenuCabezeraRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\MenuRepository' shared autowired service.
     *
     * @return \App\Repository\MenuRepository
     */
    protected function getMenuRepositoryService()
    {
        return $this->privates['App\\Repository\\MenuRepository'] = new \App\Repository\MenuRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ModuloPerRepository' shared autowired service.
     *
     * @return \App\Repository\ModuloPerRepository
     */
    protected function getModuloPerRepositoryService()
    {
        return $this->privates['App\\Repository\\ModuloPerRepository'] = new \App\Repository\ModuloPerRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ModuloRepository' shared autowired service.
     *
     * @return \App\Repository\ModuloRepository
     */
    protected function getModuloRepositoryService()
    {
        return $this->privates['App\\Repository\\ModuloRepository'] = new \App\Repository\ModuloRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PagoCanalRepository' shared autowired service.
     *
     * @return \App\Repository\PagoCanalRepository
     */
    protected function getPagoCanalRepositoryService()
    {
        return $this->privates['App\\Repository\\PagoCanalRepository'] = new \App\Repository\PagoCanalRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PagoCuotasRepository' shared autowired service.
     *
     * @return \App\Repository\PagoCuotasRepository
     */
    protected function getPagoCuotasRepositoryService()
    {
        return $this->privates['App\\Repository\\PagoCuotasRepository'] = new \App\Repository\PagoCuotasRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PagoRepository' shared autowired service.
     *
     * @return \App\Repository\PagoRepository
     */
    protected function getPagoRepositoryService()
    {
        return $this->privates['App\\Repository\\PagoRepository'] = new \App\Repository\PagoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PagoTipoRepository' shared autowired service.
     *
     * @return \App\Repository\PagoTipoRepository
     */
    protected function getPagoTipoRepositoryService()
    {
        return $this->privates['App\\Repository\\PagoTipoRepository'] = new \App\Repository\PagoTipoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PaisRepository' shared autowired service.
     *
     * @return \App\Repository\PaisRepository
     */
    protected function getPaisRepositoryService()
    {
        return $this->privates['App\\Repository\\PaisRepository'] = new \App\Repository\PaisRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PrimeraCuotaRepository' shared autowired service.
     *
     * @return \App\Repository\PrimeraCuotaRepository
     */
    protected function getPrimeraCuotaRepositoryService()
    {
        return $this->privates['App\\Repository\\PrimeraCuotaRepository'] = new \App\Repository\PrimeraCuotaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PrivilegioRepository' shared autowired service.
     *
     * @return \App\Repository\PrivilegioRepository
     */
    protected function getPrivilegioRepositoryService()
    {
        return $this->privates['App\\Repository\\PrivilegioRepository'] = new \App\Repository\PrivilegioRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\PrivilegioTipousuarioRepository' shared autowired service.
     *
     * @return \App\Repository\PrivilegioTipousuarioRepository
     */
    protected function getPrivilegioTipousuarioRepositoryService()
    {
        return $this->privates['App\\Repository\\PrivilegioTipousuarioRepository'] = new \App\Repository\PrivilegioTipousuarioRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ResetPasswordRequestRepository' shared autowired service.
     *
     * @return \App\Repository\ResetPasswordRequestRepository
     */
    protected function getResetPasswordRequestRepositoryService()
    {
        return $this->privates['App\\Repository\\ResetPasswordRequestRepository'] = new \App\Repository\ResetPasswordRequestRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\ReunionRepository' shared autowired service.
     *
     * @return \App\Repository\ReunionRepository
     */
    protected function getReunionRepositoryService()
    {
        return $this->privates['App\\Repository\\ReunionRepository'] = new \App\Repository\ReunionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\SituacionLaboralRepository' shared autowired service.
     *
     * @return \App\Repository\SituacionLaboralRepository
     */
    protected function getSituacionLaboralRepositoryService()
    {
        return $this->privates['App\\Repository\\SituacionLaboralRepository'] = new \App\Repository\SituacionLaboralRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\SucursalRepository' shared autowired service.
     *
     * @return \App\Repository\SucursalRepository
     */
    protected function getSucursalRepositoryService()
    {
        return $this->privates['App\\Repository\\SucursalRepository'] = new \App\Repository\SucursalRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioCategoriaRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioCategoriaRepository
     */
    protected function getUsuarioCategoriaRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioCategoriaRepository'] = new \App\Repository\UsuarioCategoriaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioCuentaRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioCuentaRepository
     */
    protected function getUsuarioCuentaRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioCuentaRepository'] = new \App\Repository\UsuarioCuentaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioNoDisponibleRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioNoDisponibleRepository
     */
    protected function getUsuarioNoDisponibleRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioNoDisponibleRepository'] = new \App\Repository\UsuarioNoDisponibleRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioRepository
     */
    protected function getUsuarioRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioRepository'] = new \App\Repository\UsuarioRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioStatusRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioStatusRepository
     */
    protected function getUsuarioStatusRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioStatusRepository'] = new \App\Repository\UsuarioStatusRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioTipoDocumentoRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioTipoDocumentoRepository
     */
    protected function getUsuarioTipoDocumentoRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioTipoDocumentoRepository'] = new \App\Repository\UsuarioTipoDocumentoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioTipoRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioTipoRepository
     */
    protected function getUsuarioTipoRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioTipoRepository'] = new \App\Repository\UsuarioTipoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\UsuarioUsuariocategoriaRepository' shared autowired service.
     *
     * @return \App\Repository\UsuarioUsuariocategoriaRepository
     */
    protected function getUsuarioUsuariocategoriaRepositoryService()
    {
        return $this->privates['App\\Repository\\UsuarioUsuariocategoriaRepository'] = new \App\Repository\UsuarioUsuariocategoriaRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\VencimientoRepository' shared autowired service.
     *
     * @return \App\Repository\VencimientoRepository
     */
    protected function getVencimientoRepositoryService()
    {
        return $this->privates['App\\Repository\\VencimientoRepository'] = new \App\Repository\VencimientoRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Repository\WebhookRepository' shared autowired service.
     *
     * @return \App\Repository\WebhookRepository
     */
    protected function getWebhookRepositoryService()
    {
        return $this->privates['App\\Repository\\WebhookRepository'] = new \App\Repository\WebhookRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'App\Security\LoginAuthenticator' shared autowired service.
     *
     * @return \App\Security\LoginAuthenticator
     */
    protected function getLoginAuthenticatorService()
    {
        return $this->privates['App\\Security\\LoginAuthenticator'] = new \App\Security\LoginAuthenticator(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /*
     * Gets the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.
     *
     * @return \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
     */
    protected function getRunSqlCommandService()
    {
        $this->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(new \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider(new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default')));

        $instance->setName('dbal:run-sql');

        return $instance;
    }

    /*
     * Gets the private 'SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand
     */
    protected function getResetPasswordRemoveExpiredCommandService()
    {
        $this->privates['SymfonyCasts\\Bundle\\ResetPassword\\Command\\ResetPasswordRemoveExpiredCommand'] = $instance = new \SymfonyCasts\Bundle\ResetPassword\Command\ResetPasswordRemoveExpiredCommand(($this->privates['symfonycasts.reset_password.cleaner'] ?? $this->getSymfonycasts_ResetPassword_CleanerService()));

        $instance->setName('reset-password:remove-expired');

        return $instance;
    }

    /*
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /*
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', false);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheService(), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\AbogadosController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AbogadosController::edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AbogadosController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AbogadosController::new' => ['privates', '.service_locator.7IbcALy', 'get_ServiceLocator_7IbcALyService', false],
            'App\\Controller\\AbogadosController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AbogadosController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AccionController::delete' => ['privates', '.service_locator.w_BXEJJ', 'get_ServiceLocator_WBXEJJService', false],
            'App\\Controller\\AccionController::edit' => ['privates', '.service_locator.w_BXEJJ', 'get_ServiceLocator_WBXEJJService', false],
            'App\\Controller\\AccionController::index' => ['privates', '.service_locator.c2jZgF0', 'get_ServiceLocator_C2jZgF0Service', false],
            'App\\Controller\\AccionController::show' => ['privates', '.service_locator.w_BXEJJ', 'get_ServiceLocator_WBXEJJService', false],
            'App\\Controller\\AdministradorCuentasController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradorCuentasController::edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AdministradorCuentasController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AdministradorCuentasController::new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\AdministradorCuentasController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradorCuentasController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AdministradoresController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradoresController::edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AdministradoresController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AdministradoresController::new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\AdministradoresController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradoresController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AdministrativoController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministrativoController::edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\AdministrativoController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AdministrativoController::new' => ['privates', '.service_locator.z9E6LMa', 'get_ServiceLocator_Z9E6LMaService', false],
            'App\\Controller\\AdministrativoController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministrativoController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AgendaController::agendadores' => ['privates', '.service_locator.l9ENZ48', 'get_ServiceLocator_L9ENZ48Service', false],
            'App\\Controller\\AgendaController::delete' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\AgendaController::edit' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\AgendaController::index' => ['privates', '.service_locator.sZu15Tb', 'get_ServiceLocator_SZu15TbService', false],
            'App\\Controller\\AgendaController::new' => ['privates', '.service_locator.xoZum86', 'get_ServiceLocator_XoZum86Service', false],
            'App\\Controller\\AgendaController::resumenabogados' => ['privates', '.service_locator.sZu15Tb', 'get_ServiceLocator_SZu15TbService', false],
            'App\\Controller\\AgendaController::resumenagendadores' => ['privates', '.service_locator.sZu15Tb', 'get_ServiceLocator_SZu15TbService', false],
            'App\\Controller\\AgendaController::show' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\AgendadoresController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AgendadoresController::edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AgendadoresController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AgendadoresController::new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\AgendadoresController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AgendadoresController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\ChangecompController::index' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\ChangecompController::new' => ['privates', '.service_locator.ZtRYfF6', 'get_ServiceLocator_ZtRYfF6Service', false],
            'App\\Controller\\ClientePotencialController::delete' => ['privates', '.service_locator.2ecbgmo', 'get_ServiceLocator_2ecbgmoService', false],
            'App\\Controller\\ClientePotencialController::edit' => ['privates', '.service_locator.2ecbgmo', 'get_ServiceLocator_2ecbgmoService', false],
            'App\\Controller\\ClientePotencialController::index' => ['privates', '.service_locator.E2I33Py', 'get_ServiceLocator_E2I33PyService', false],
            'App\\Controller\\ClientePotencialController::show' => ['privates', '.service_locator.2ecbgmo', 'get_ServiceLocator_2ecbgmoService', false],
            'App\\Controller\\ClientesController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\ClientesController::edit' => ['privates', '.service_locator.abnZuor', 'get_ServiceLocator_AbnZuorService', false],
            'App\\Controller\\ClientesController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\ClientesController::new' => ['privates', '.service_locator.KOdFMEp', 'get_ServiceLocator_KOdFMEpService', false],
            'App\\Controller\\ClientesController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\ClientesController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\CobradoresController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\CobradoresController::edit' => ['privates', '.service_locator.3Zorq1H', 'get_ServiceLocator_3Zorq1HService', false],
            'App\\Controller\\CobradoresController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\CobradoresController::new' => ['privates', '.service_locator.vHOMGh2', 'get_ServiceLocator_VHOMGh2Service', false],
            'App\\Controller\\CobradoresController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\CobradoresController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\CobranzaController::delete' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\CobranzaController::detallepagos' => ['privates', '.service_locator.A0do.gc', 'get_ServiceLocator_A0do_GcService', false],
            'App\\Controller\\CobranzaController::edit' => ['privates', '.service_locator.77BaYbJ', 'get_ServiceLocator_77BaYbJService', false],
            'App\\Controller\\CobranzaController::finalizado' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\CobranzaController::generalotes' => ['privates', '.service_locator.0FOabxk', 'get_ServiceLocator_0FOabxkService', false],
            'App\\Controller\\CobranzaController::index' => ['privates', '.service_locator.3kOORk9', 'get_ServiceLocator_3kOORk9Service', false],
            'App\\Controller\\CobranzaController::new' => ['privates', '.service_locator.nIfFBcT', 'get_ServiceLocator_NIfFBcTService', false],
            'App\\Controller\\CobranzaController::resumen' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\CobranzaController::show' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\CobranzaController::verpagos' => ['privates', '.service_locator..OZbobJ', 'get_ServiceLocator__OZbobJService', false],
            'App\\Controller\\CobranzaController::verpagosShow' => ['privates', '.service_locator..OZbobJ', 'get_ServiceLocator__OZbobJService', false],
            'App\\Controller\\ConfiguracionController::delete' => ['privates', '.service_locator.jWPN0B5', 'get_ServiceLocator_JWPN0B5Service', false],
            'App\\Controller\\ConfiguracionController::edit' => ['privates', '.service_locator.jWPN0B5', 'get_ServiceLocator_JWPN0B5Service', false],
            'App\\Controller\\ConfiguracionController::index' => ['privates', '.service_locator.VYLHLQC', 'get_ServiceLocator_VYLHLQCService', false],
            'App\\Controller\\ConfiguracionController::show' => ['privates', '.service_locator.jWPN0B5', 'get_ServiceLocator_JWPN0B5Service', false],
            'App\\Controller\\ContratoController::actualizafecha' => ['privates', '.service_locator.ARLBz6w', 'get_ServiceLocator_ARLBz6wService', false],
            'App\\Controller\\ContratoController::delRol' => ['privates', '.service_locator.bsYhYgq', 'get_ServiceLocator_BsYhYgqService', false],
            'App\\Controller\\ContratoController::delete' => ['privates', '.service_locator.h9rUVrY', 'get_ServiceLocator_H9rUVrYService', false],
            'App\\Controller\\ContratoController::edit' => ['privates', '.service_locator.E6BUa1B', 'get_ServiceLocator_E6BUa1BService', false],
            'App\\Controller\\ContratoController::finalizar' => ['privates', '.service_locator.74f4Isy', 'get_ServiceLocator_74f4IsyService', false],
            'App\\Controller\\ContratoController::index' => ['privates', '.service_locator.b6NHBF9', 'get_ServiceLocator_B6NHBF9Service', false],
            'App\\Controller\\ContratoController::newRol' => ['privates', '.service_locator.GSHB7Tx', 'get_ServiceLocator_GSHB7TxService', false],
            'App\\Controller\\ContratoController::pdf' => ['privates', '.service_locator.FM9.TbL', 'get_ServiceLocator_FM9_TbLService', false],
            'App\\Controller\\ContratoController::regenerapdfs' => ['privates', '.service_locator.06JVMyl', 'get_ServiceLocator_06JVMylService', false],
            'App\\Controller\\ContratoController::show' => ['privates', '.service_locator.HsDA37j', 'get_ServiceLocator_HsDA37jService', false],
            'App\\Controller\\ContratoController::terminar' => ['privates', '.service_locator.qyoxXJZ', 'get_ServiceLocator_QyoxXJZService', false],
            'App\\Controller\\ContratoRolController::delete' => ['privates', '.service_locator.r5S5nuE', 'get_ServiceLocator_R5S5nuEService', false],
            'App\\Controller\\ContratoRolController::edit' => ['privates', '.service_locator.r5S5nuE', 'get_ServiceLocator_R5S5nuEService', false],
            'App\\Controller\\ContratoRolController::index' => ['privates', '.service_locator.nK.b2Ho', 'get_ServiceLocator_NK_B2HoService', false],
            'App\\Controller\\ContratoRolController::show' => ['privates', '.service_locator.r5S5nuE', 'get_ServiceLocator_R5S5nuEService', false],
            'App\\Controller\\CuentaController::delete' => ['privates', '.service_locator.cD6F.y4', 'get_ServiceLocator_CD6F_Y4Service', false],
            'App\\Controller\\CuentaController::edit' => ['privates', '.service_locator.cD6F.y4', 'get_ServiceLocator_CD6F_Y4Service', false],
            'App\\Controller\\CuentaController::index' => ['privates', '.service_locator.fReJfnS', 'get_ServiceLocator_FReJfnSService', false],
            'App\\Controller\\CuentaController::show' => ['privates', '.service_locator.cD6F.y4', 'get_ServiceLocator_CD6F_Y4Service', false],
            'App\\Controller\\DesconoceController::edit' => ['privates', '.service_locator.5MZ64ns', 'get_ServiceLocator_5MZ64nsService', false],
            'App\\Controller\\DesconoceController::index' => ['privates', '.service_locator.b6NHBF9', 'get_ServiceLocator_B6NHBF9Service', false],
            'App\\Controller\\DesconoceController::show' => ['privates', '.service_locator.HsDA37j', 'get_ServiceLocator_HsDA37jService', false],
            'App\\Controller\\EmpresaController::delete' => ['privates', '.service_locator.zGaaEJz', 'get_ServiceLocator_ZGaaEJzService', false],
            'App\\Controller\\EmpresaController::edit' => ['privates', '.service_locator.zGaaEJz', 'get_ServiceLocator_ZGaaEJzService', false],
            'App\\Controller\\EmpresaController::index' => ['privates', '.service_locator.1elOjJR', 'get_ServiceLocator_1elOjJRService', false],
            'App\\Controller\\EmpresaController::new' => ['privates', '.service_locator.3mnj3Pm', 'get_ServiceLocator_3mnj3PmService', false],
            'App\\Controller\\EmpresaController::show' => ['privates', '.service_locator.zGaaEJz', 'get_ServiceLocator_ZGaaEJzService', false],
            'App\\Controller\\GestionarController::delete' => ['privates', '.service_locator.Mm69KMM', 'get_ServiceLocator_Mm69KMMService', false],
            'App\\Controller\\GestionarController::edit' => ['privates', '.service_locator.Mm69KMM', 'get_ServiceLocator_Mm69KMMService', false],
            'App\\Controller\\GestionarController::index' => ['privates', '.service_locator.Q7y3H4c', 'get_ServiceLocator_Q7y3H4cService', false],
            'App\\Controller\\GestionarController::show' => ['privates', '.service_locator.Mm69KMM', 'get_ServiceLocator_Mm69KMMService', false],
            'App\\Controller\\ImportacionController::delete' => ['privates', '.service_locator.Rb7vt2Y', 'get_ServiceLocator_Rb7vt2YService', false],
            'App\\Controller\\ImportacionController::edit' => ['privates', '.service_locator.Rb7vt2Y', 'get_ServiceLocator_Rb7vt2YService', false],
            'App\\Controller\\ImportacionController::index' => ['privates', '.service_locator.QmhK1nQ', 'get_ServiceLocator_QmhK1nQService', false],
            'App\\Controller\\ImportacionController::new' => ['privates', '.service_locator.eXD55sI', 'get_ServiceLocator_EXD55sIService', false],
            'App\\Controller\\ImportacionController::newPer' => ['privates', '.service_locator.eXD55sI', 'get_ServiceLocator_EXD55sIService', false],
            'App\\Controller\\ImportacionController::show' => ['privates', '.service_locator.Rb7vt2Y', 'get_ServiceLocator_Rb7vt2YService', false],
            'App\\Controller\\JefeAbogadosController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeAbogadosController::edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\JefeAbogadosController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\JefeAbogadosController::new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\JefeAbogadosController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeAbogadosController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\JefeProcesosController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeProcesosController::edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\JefeProcesosController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\JefeProcesosController::new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\JefeProcesosController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeProcesosController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\Controller\\MenuCabezeraController::delete' => ['privates', '.service_locator.F2EPLF4', 'get_ServiceLocator_F2EPLF4Service', false],
            'App\\Controller\\MenuCabezeraController::edit' => ['privates', '.service_locator.F2EPLF4', 'get_ServiceLocator_F2EPLF4Service', false],
            'App\\Controller\\MenuCabezeraController::index' => ['privates', '.service_locator.KTzT3Id', 'get_ServiceLocator_KTzT3IdService', false],
            'App\\Controller\\MenuCabezeraController::new' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\MenuCabezeraController::show' => ['privates', '.service_locator.F2EPLF4', 'get_ServiceLocator_F2EPLF4Service', false],
            'App\\Controller\\MenuController::delete' => ['privates', '.service_locator.2NAKaUy', 'get_ServiceLocator_2NAKaUyService', false],
            'App\\Controller\\MenuController::edit' => ['privates', '.service_locator.w_SvetQ', 'get_ServiceLocator_WSvetQService', false],
            'App\\Controller\\MenuController::index' => ['privates', '.service_locator.C_f1mzT', 'get_ServiceLocator_CF1mzTService', false],
            'App\\Controller\\MenuController::mainMenu' => ['privates', '.service_locator.vozMxkb', 'get_ServiceLocator_VozMxkbService', false],
            'App\\Controller\\MenuController::new' => ['privates', '.service_locator.OPjaPZQ', 'get_ServiceLocator_OPjaPZQService', false],
            'App\\Controller\\MisDatosController::index' => ['privates', '.service_locator.Fws7FEo', 'get_ServiceLocator_Fws7FEoService', false],
            'App\\Controller\\MisDatosController::modificar' => ['privates', '.service_locator.Ee0e0h.', 'get_ServiceLocator_Ee0e0h_Service', false],
            'App\\Controller\\MisDatosController::password' => ['privates', '.service_locator.rqlU3E_', 'get_ServiceLocator_RqlU3EService', false],
            'App\\Controller\\ModuloController::edit' => ['privates', '.service_locator._1NEHi_', 'get_ServiceLocator_1NEHiService', false],
            'App\\Controller\\ModuloController::index' => ['privates', '.service_locator.4vbyOeV', 'get_ServiceLocator_4vbyOeVService', false],
            'App\\Controller\\ModuloController::new' => ['privates', '.service_locator.gBsSb5L', 'get_ServiceLocator_GBsSb5LService', false],
            'App\\Controller\\MultasController::edit' => ['privates', '.service_locator.fY7iPWr', 'get_ServiceLocator_FY7iPWrService', false],
            'App\\Controller\\MultasController::index' => ['privates', '.service_locator.cNnViMJ', 'get_ServiceLocator_CNnViMJService', false],
            'App\\Controller\\MultasController::new' => ['privates', '.service_locator.fY7iPWr', 'get_ServiceLocator_FY7iPWrService', false],
            'App\\Controller\\MultasController::view' => ['privates', '.service_locator.dzE1eBI', 'get_ServiceLocator_DzE1eBIService', false],
            'App\\Controller\\NocontestaController::index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\NocontestaController::show' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\NocontrataController::index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\NocontrataController::show' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\PagoCanalController::delete' => ['privates', '.service_locator.RhyREDn', 'get_ServiceLocator_RhyREDnService', false],
            'App\\Controller\\PagoCanalController::edit' => ['privates', '.service_locator.RhyREDn', 'get_ServiceLocator_RhyREDnService', false],
            'App\\Controller\\PagoCanalController::index' => ['privates', '.service_locator.UjsxOEZ', 'get_ServiceLocator_UjsxOEZService', false],
            'App\\Controller\\PagoCanalController::show' => ['privates', '.service_locator.RhyREDn', 'get_ServiceLocator_RhyREDnService', false],
            'App\\Controller\\PagoController::cargarPagos' => ['privates', '.service_locator._GMtc1I', 'get_ServiceLocator_GMtc1IService', false],
            'App\\Controller\\PagoController::delete' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\PagoController::detallepagos' => ['privates', '.service_locator.A0do.gc', 'get_ServiceLocator_A0do_GcService', false],
            'App\\Controller\\PagoController::edit' => ['privates', '.service_locator.77BaYbJ', 'get_ServiceLocator_77BaYbJService', false],
            'App\\Controller\\PagoController::finalizado' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\PagoController::generaCuotas' => ['privates', '.service_locator.XPvRhvX', 'get_ServiceLocator_XPvRhvXService', false],
            'App\\Controller\\PagoController::index' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\PagoController::new' => ['privates', '.service_locator.nIfFBcT', 'get_ServiceLocator_NIfFBcTService', false],
            'App\\Controller\\PagoController::resumen' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\PagoController::show' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\PagoController::verpagos' => ['privates', '.service_locator.dzE1eBI', 'get_ServiceLocator_DzE1eBIService', false],
            'App\\Controller\\PagoController::verpagosShow' => ['privates', '.service_locator..OZbobJ', 'get_ServiceLocator__OZbobJService', false],
            'App\\Controller\\PagoTipoController::delete' => ['privates', '.service_locator.J.1nOix', 'get_ServiceLocator_J_1nOixService', false],
            'App\\Controller\\PagoTipoController::edit' => ['privates', '.service_locator.J.1nOix', 'get_ServiceLocator_J_1nOixService', false],
            'App\\Controller\\PagoTipoController::index' => ['privates', '.service_locator.Mx_VGXK', 'get_ServiceLocator_MxVGXKService', false],
            'App\\Controller\\PagoTipoController::show' => ['privates', '.service_locator.J.1nOix', 'get_ServiceLocator_J_1nOixService', false],
            'App\\Controller\\PaisController::delete' => ['privates', '.service_locator.jucI2NL', 'get_ServiceLocator_JucI2NLService', false],
            'App\\Controller\\PaisController::edit' => ['privates', '.service_locator.jucI2NL', 'get_ServiceLocator_JucI2NLService', false],
            'App\\Controller\\PaisController::index' => ['privates', '.service_locator.pBYZih8', 'get_ServiceLocator_PBYZih8Service', false],
            'App\\Controller\\PaisController::show' => ['privates', '.service_locator.jucI2NL', 'get_ServiceLocator_JucI2NLService', false],
            'App\\Controller\\PanelAbogadoController::contrata' => ['privates', '.service_locator.XbWwFz7', 'get_ServiceLocator_XbWwFz7Service', false],
            'App\\Controller\\PanelAbogadoController::delRol' => ['privates', '.service_locator.bsYhYgq', 'get_ServiceLocator_BsYhYgqService', false],
            'App\\Controller\\PanelAbogadoController::index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\PanelAbogadoController::new' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\PanelAbogadoController::newRol' => ['privates', '.service_locator.xgo.uLQ', 'get_ServiceLocator_Xgo_ULQService', false],
            'App\\Controller\\PanelAbogadoController::noContrata' => ['privates', '.service_locator.sBhv2Cg', 'get_ServiceLocator_SBhv2CgService', false],
            'App\\Controller\\PanelAgendadorController::abogados' => ['privates', '.service_locator.D6xVyEO', 'get_ServiceLocator_D6xVyEOService', false],
            'App\\Controller\\PanelAgendadorController::calendario' => ['privates', '.service_locator.yGoJWDw', 'get_ServiceLocator_YGoJWDwService', false],
            'App\\Controller\\PanelAgendadorController::edit' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\PanelAgendadorController::engestion' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\PanelAgendadorController::hora' => ['privates', '.service_locator.tKHC2e8', 'get_ServiceLocator_TKHC2e8Service', false],
            'App\\Controller\\PanelAgendadorController::index' => ['privates', '.service_locator.VIDQ8NV', 'get_ServiceLocator_VIDQ8NVService', false],
            'App\\Controller\\PanelAgendadorController::new' => ['privates', '.service_locator.V3FRyj4', 'get_ServiceLocator_V3FRyj4Service', false],
            'App\\Controller\\PanelAgendadorController::reasignar' => ['privates', '.service_locator.Ee0e0h.', 'get_ServiceLocator_Ee0e0h_Service', false],
            'App\\Controller\\PrivilegioController::delete' => ['privates', '.service_locator.rpxV3kS', 'get_ServiceLocator_RpxV3kSService', false],
            'App\\Controller\\PrivilegioController::edit' => ['privates', '.service_locator.sy1d2n_', 'get_ServiceLocator_Sy1d2nService', false],
            'App\\Controller\\PrivilegioController::index' => ['privates', '.service_locator.HcMexkl', 'get_ServiceLocator_HcMexklService', false],
            'App\\Controller\\PrivilegioController::new' => ['privates', '.service_locator.J2.emP.', 'get_ServiceLocator_J2_EmP_Service', false],
            'App\\Controller\\PrivilegioController::regenerar' => ['privates', '.service_locator.J2.emP.', 'get_ServiceLocator_J2_EmP_Service', false],
            'App\\Controller\\PrivilegioController::show' => ['privates', '.service_locator.rpxV3kS', 'get_ServiceLocator_RpxV3kSService', false],
            'App\\Controller\\PrivilegioTipousuarioController::delete' => ['privates', '.service_locator.zSBANml', 'get_ServiceLocator_ZSBANmlService', false],
            'App\\Controller\\PrivilegioTipousuarioController::edit' => ['privates', '.service_locator.J0I48HS', 'get_ServiceLocator_J0I48HSService', false],
            'App\\Controller\\PrivilegioTipousuarioController::index' => ['privates', '.service_locator.sJ4K5iu', 'get_ServiceLocator_SJ4K5iuService', false],
            'App\\Controller\\PrivilegioTipousuarioController::new' => ['privates', '.service_locator.wiQplfK', 'get_ServiceLocator_WiQplfKService', false],
            'App\\Controller\\ReasignarController::index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\ReasignarController::show' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.BWknic2', 'get_ServiceLocator_BWknic2Service', false],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.8Z_jHRB', 'get_ServiceLocator_8ZJHRBService', false],
            'App\\Controller\\ResumenController::abogados' => ['privates', '.service_locator.D6xVyEO', 'get_ServiceLocator_D6xVyEOService', false],
            'App\\Controller\\ResumenController::calendario' => ['privates', '.service_locator.yGoJWDw', 'get_ServiceLocator_YGoJWDwService', false],
            'App\\Controller\\ResumenController::edit' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\ResumenController::engestion' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\ResumenController::index' => ['privates', '.service_locator.VIDQ8NV', 'get_ServiceLocator_VIDQ8NVService', false],
            'App\\Controller\\ResumenController::new' => ['privates', '.service_locator.V3FRyj4', 'get_ServiceLocator_V3FRyj4Service', false],
            'App\\Controller\\SucursalController::delete' => ['privates', '.service_locator.IU0Vrrj', 'get_ServiceLocator_IU0VrrjService', false],
            'App\\Controller\\SucursalController::edit' => ['privates', '.service_locator.IU0Vrrj', 'get_ServiceLocator_IU0VrrjService', false],
            'App\\Controller\\SucursalController::index' => ['privates', '.service_locator.2mo_tjD', 'get_ServiceLocator_2moTjDService', false],
            'App\\Controller\\SucursalController::new' => ['privates', '.service_locator.W4foxkB', 'get_ServiceLocator_W4foxkBService', false],
            'App\\Controller\\TerminosController::edit' => ['privates', '.service_locator.Dagvfg9', 'get_ServiceLocator_Dagvfg9Service', false],
            'App\\Controller\\TerminosController::index' => ['privates', '.service_locator.b6NHBF9', 'get_ServiceLocator_B6NHBF9Service', false],
            'App\\Controller\\TerminosController::pdf' => ['privates', '.service_locator.6k_BboC', 'get_ServiceLocator_6kBboCService', false],
            'App\\Controller\\TerminosController::show' => ['privates', '.service_locator.HsDA37j', 'get_ServiceLocator_HsDA37jService', false],
            'App\\Controller\\TramitadoresController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\TramitadoresController::edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\TramitadoresController::index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\TramitadoresController::new' => ['privates', '.service_locator.z9E6LMa', 'get_ServiceLocator_Z9E6LMaService', false],
            'App\\Controller\\TramitadoresController::restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\TramitadoresController::show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\UsuarioCategoriaController::delete' => ['privates', '.service_locator.UF_vGC_', 'get_ServiceLocator_UFVGCService', false],
            'App\\Controller\\UsuarioCategoriaController::edit' => ['privates', '.service_locator.UF_vGC_', 'get_ServiceLocator_UFVGCService', false],
            'App\\Controller\\UsuarioCategoriaController::index' => ['privates', '.service_locator.NseDBlA', 'get_ServiceLocator_NseDBlAService', false],
            'App\\Controller\\UsuarioCategoriaController::new' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\UsuarioCategoriaController::show' => ['privates', '.service_locator.UF_vGC_', 'get_ServiceLocator_UFVGCService', false],
            'App\\Controller\\UsuarioController::delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\UsuarioController::edit' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\UsuarioController::index' => ['privates', '.service_locator.Ee0e0h.', 'get_ServiceLocator_Ee0e0h_Service', false],
            'App\\Controller\\UsuarioController::new' => ['privates', '.service_locator.hszs.DW', 'get_ServiceLocator_Hszs_DWService', false],
            'App\\Controller\\UsuarioController::show' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\UsuarioCuentaController::delete' => ['privates', '.service_locator.BloIjNx', 'get_ServiceLocator_BloIjNxService', false],
            'App\\Controller\\UsuarioCuentaController::edit' => ['privates', '.service_locator.BloIjNx', 'get_ServiceLocator_BloIjNxService', false],
            'App\\Controller\\UsuarioCuentaController::index' => ['privates', '.service_locator.0LR1cBw', 'get_ServiceLocator_0LR1cBwService', false],
            'App\\Controller\\UsuarioCuentaController::show' => ['privates', '.service_locator.BloIjNx', 'get_ServiceLocator_BloIjNxService', false],
            'App\\Controller\\UsuarioNoDisponibleController::delete' => ['privates', '.service_locator.LzAFxPi', 'get_ServiceLocator_LzAFxPiService', false],
            'App\\Controller\\UsuarioNoDisponibleController::edit' => ['privates', '.service_locator.tcvPBU9', 'get_ServiceLocator_TcvPBU9Service', false],
            'App\\Controller\\UsuarioNoDisponibleController::index' => ['privates', '.service_locator.SYsIIrw', 'get_ServiceLocator_SYsIIrwService', false],
            'App\\Controller\\UsuarioNoDisponibleController::new' => ['privates', '.service_locator.SYsIIrw', 'get_ServiceLocator_SYsIIrwService', false],
            'App\\Controller\\UsuarioNoDisponibleController::show' => ['privates', '.service_locator.tcvPBU9', 'get_ServiceLocator_TcvPBU9Service', false],
            'App\\Controller\\UsuarioStatusController::delete' => ['privates', '.service_locator.w037Jll', 'get_ServiceLocator_W037JllService', false],
            'App\\Controller\\UsuarioStatusController::edit' => ['privates', '.service_locator.w037Jll', 'get_ServiceLocator_W037JllService', false],
            'App\\Controller\\UsuarioStatusController::index' => ['privates', '.service_locator.Y3JxyLC', 'get_ServiceLocator_Y3JxyLCService', false],
            'App\\Controller\\UsuarioStatusController::show' => ['privates', '.service_locator.w037Jll', 'get_ServiceLocator_W037JllService', false],
            'App\\Controller\\UsuarioTipoController::delete' => ['privates', '.service_locator.U3af4lB', 'get_ServiceLocator_U3af4lBService', false],
            'App\\Controller\\UsuarioTipoController::edit' => ['privates', '.service_locator.U3af4lB', 'get_ServiceLocator_U3af4lBService', false],
            'App\\Controller\\UsuarioTipoController::index' => ['privates', '.service_locator.6XyKr57', 'get_ServiceLocator_6XyKr57Service', false],
            'App\\Controller\\UsuarioTipoController::new' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\UsuarioTipoController::show' => ['privates', '.service_locator.U3af4lB', 'get_ServiceLocator_U3af4lBService', false],
            'App\\Controller\\VencimientoController::delete' => ['privates', '.service_locator.0ahK5zW', 'get_ServiceLocator_0ahK5zWService', false],
            'App\\Controller\\VencimientoController::edit' => ['privates', '.service_locator.0ahK5zW', 'get_ServiceLocator_0ahK5zWService', false],
            'App\\Controller\\VencimientoController::index' => ['privates', '.service_locator.k82ifbT', 'get_ServiceLocator_K82ifbTService', false],
            'App\\Controller\\VencimientoController::show' => ['privates', '.service_locator.0ahK5zW', 'get_ServiceLocator_0ahK5zWService', false],
            'App\\Controller\\WebhookController::index' => ['privates', '.service_locator.VYLHLQC', 'get_ServiceLocator_VYLHLQCService', false],
            'App\\Controller\\AbogadosController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AbogadosController:edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AbogadosController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AbogadosController:new' => ['privates', '.service_locator.7IbcALy', 'get_ServiceLocator_7IbcALyService', false],
            'App\\Controller\\AbogadosController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AbogadosController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AccionController:delete' => ['privates', '.service_locator.w_BXEJJ', 'get_ServiceLocator_WBXEJJService', false],
            'App\\Controller\\AccionController:edit' => ['privates', '.service_locator.w_BXEJJ', 'get_ServiceLocator_WBXEJJService', false],
            'App\\Controller\\AccionController:index' => ['privates', '.service_locator.c2jZgF0', 'get_ServiceLocator_C2jZgF0Service', false],
            'App\\Controller\\AccionController:show' => ['privates', '.service_locator.w_BXEJJ', 'get_ServiceLocator_WBXEJJService', false],
            'App\\Controller\\AdministradorCuentasController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradorCuentasController:edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AdministradorCuentasController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AdministradorCuentasController:new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\AdministradorCuentasController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradorCuentasController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AdministradoresController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradoresController:edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AdministradoresController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AdministradoresController:new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\AdministradoresController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministradoresController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AdministrativoController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministrativoController:edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\AdministrativoController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AdministrativoController:new' => ['privates', '.service_locator.z9E6LMa', 'get_ServiceLocator_Z9E6LMaService', false],
            'App\\Controller\\AdministrativoController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AdministrativoController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\AgendaController:agendadores' => ['privates', '.service_locator.l9ENZ48', 'get_ServiceLocator_L9ENZ48Service', false],
            'App\\Controller\\AgendaController:delete' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\AgendaController:edit' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\AgendaController:index' => ['privates', '.service_locator.sZu15Tb', 'get_ServiceLocator_SZu15TbService', false],
            'App\\Controller\\AgendaController:new' => ['privates', '.service_locator.xoZum86', 'get_ServiceLocator_XoZum86Service', false],
            'App\\Controller\\AgendaController:resumenabogados' => ['privates', '.service_locator.sZu15Tb', 'get_ServiceLocator_SZu15TbService', false],
            'App\\Controller\\AgendaController:resumenagendadores' => ['privates', '.service_locator.sZu15Tb', 'get_ServiceLocator_SZu15TbService', false],
            'App\\Controller\\AgendaController:show' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\AgendadoresController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AgendadoresController:edit' => ['privates', '.service_locator.lq.nSOB', 'get_ServiceLocator_Lq_NSOBService', false],
            'App\\Controller\\AgendadoresController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\AgendadoresController:new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\AgendadoresController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\AgendadoresController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\ChangecompController:index' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\ChangecompController:new' => ['privates', '.service_locator.ZtRYfF6', 'get_ServiceLocator_ZtRYfF6Service', false],
            'App\\Controller\\ClientePotencialController:delete' => ['privates', '.service_locator.2ecbgmo', 'get_ServiceLocator_2ecbgmoService', false],
            'App\\Controller\\ClientePotencialController:edit' => ['privates', '.service_locator.2ecbgmo', 'get_ServiceLocator_2ecbgmoService', false],
            'App\\Controller\\ClientePotencialController:index' => ['privates', '.service_locator.E2I33Py', 'get_ServiceLocator_E2I33PyService', false],
            'App\\Controller\\ClientePotencialController:show' => ['privates', '.service_locator.2ecbgmo', 'get_ServiceLocator_2ecbgmoService', false],
            'App\\Controller\\ClientesController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\ClientesController:edit' => ['privates', '.service_locator.abnZuor', 'get_ServiceLocator_AbnZuorService', false],
            'App\\Controller\\ClientesController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\ClientesController:new' => ['privates', '.service_locator.KOdFMEp', 'get_ServiceLocator_KOdFMEpService', false],
            'App\\Controller\\ClientesController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\ClientesController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\CobradoresController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\CobradoresController:edit' => ['privates', '.service_locator.3Zorq1H', 'get_ServiceLocator_3Zorq1HService', false],
            'App\\Controller\\CobradoresController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\CobradoresController:new' => ['privates', '.service_locator.vHOMGh2', 'get_ServiceLocator_VHOMGh2Service', false],
            'App\\Controller\\CobradoresController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\CobradoresController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\CobranzaController:delete' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\CobranzaController:detallepagos' => ['privates', '.service_locator.A0do.gc', 'get_ServiceLocator_A0do_GcService', false],
            'App\\Controller\\CobranzaController:edit' => ['privates', '.service_locator.77BaYbJ', 'get_ServiceLocator_77BaYbJService', false],
            'App\\Controller\\CobranzaController:finalizado' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\CobranzaController:generalotes' => ['privates', '.service_locator.0FOabxk', 'get_ServiceLocator_0FOabxkService', false],
            'App\\Controller\\CobranzaController:index' => ['privates', '.service_locator.3kOORk9', 'get_ServiceLocator_3kOORk9Service', false],
            'App\\Controller\\CobranzaController:new' => ['privates', '.service_locator.nIfFBcT', 'get_ServiceLocator_NIfFBcTService', false],
            'App\\Controller\\CobranzaController:resumen' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\CobranzaController:show' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\CobranzaController:verpagos' => ['privates', '.service_locator..OZbobJ', 'get_ServiceLocator__OZbobJService', false],
            'App\\Controller\\CobranzaController:verpagosShow' => ['privates', '.service_locator..OZbobJ', 'get_ServiceLocator__OZbobJService', false],
            'App\\Controller\\ConfiguracionController:delete' => ['privates', '.service_locator.jWPN0B5', 'get_ServiceLocator_JWPN0B5Service', false],
            'App\\Controller\\ConfiguracionController:edit' => ['privates', '.service_locator.jWPN0B5', 'get_ServiceLocator_JWPN0B5Service', false],
            'App\\Controller\\ConfiguracionController:index' => ['privates', '.service_locator.VYLHLQC', 'get_ServiceLocator_VYLHLQCService', false],
            'App\\Controller\\ConfiguracionController:show' => ['privates', '.service_locator.jWPN0B5', 'get_ServiceLocator_JWPN0B5Service', false],
            'App\\Controller\\ContratoController:actualizafecha' => ['privates', '.service_locator.ARLBz6w', 'get_ServiceLocator_ARLBz6wService', false],
            'App\\Controller\\ContratoController:delRol' => ['privates', '.service_locator.bsYhYgq', 'get_ServiceLocator_BsYhYgqService', false],
            'App\\Controller\\ContratoController:delete' => ['privates', '.service_locator.h9rUVrY', 'get_ServiceLocator_H9rUVrYService', false],
            'App\\Controller\\ContratoController:edit' => ['privates', '.service_locator.E6BUa1B', 'get_ServiceLocator_E6BUa1BService', false],
            'App\\Controller\\ContratoController:finalizar' => ['privates', '.service_locator.74f4Isy', 'get_ServiceLocator_74f4IsyService', false],
            'App\\Controller\\ContratoController:index' => ['privates', '.service_locator.b6NHBF9', 'get_ServiceLocator_B6NHBF9Service', false],
            'App\\Controller\\ContratoController:newRol' => ['privates', '.service_locator.GSHB7Tx', 'get_ServiceLocator_GSHB7TxService', false],
            'App\\Controller\\ContratoController:pdf' => ['privates', '.service_locator.FM9.TbL', 'get_ServiceLocator_FM9_TbLService', false],
            'App\\Controller\\ContratoController:regenerapdfs' => ['privates', '.service_locator.06JVMyl', 'get_ServiceLocator_06JVMylService', false],
            'App\\Controller\\ContratoController:show' => ['privates', '.service_locator.HsDA37j', 'get_ServiceLocator_HsDA37jService', false],
            'App\\Controller\\ContratoController:terminar' => ['privates', '.service_locator.qyoxXJZ', 'get_ServiceLocator_QyoxXJZService', false],
            'App\\Controller\\ContratoRolController:delete' => ['privates', '.service_locator.r5S5nuE', 'get_ServiceLocator_R5S5nuEService', false],
            'App\\Controller\\ContratoRolController:edit' => ['privates', '.service_locator.r5S5nuE', 'get_ServiceLocator_R5S5nuEService', false],
            'App\\Controller\\ContratoRolController:index' => ['privates', '.service_locator.nK.b2Ho', 'get_ServiceLocator_NK_B2HoService', false],
            'App\\Controller\\ContratoRolController:show' => ['privates', '.service_locator.r5S5nuE', 'get_ServiceLocator_R5S5nuEService', false],
            'App\\Controller\\CuentaController:delete' => ['privates', '.service_locator.cD6F.y4', 'get_ServiceLocator_CD6F_Y4Service', false],
            'App\\Controller\\CuentaController:edit' => ['privates', '.service_locator.cD6F.y4', 'get_ServiceLocator_CD6F_Y4Service', false],
            'App\\Controller\\CuentaController:index' => ['privates', '.service_locator.fReJfnS', 'get_ServiceLocator_FReJfnSService', false],
            'App\\Controller\\CuentaController:show' => ['privates', '.service_locator.cD6F.y4', 'get_ServiceLocator_CD6F_Y4Service', false],
            'App\\Controller\\DesconoceController:edit' => ['privates', '.service_locator.5MZ64ns', 'get_ServiceLocator_5MZ64nsService', false],
            'App\\Controller\\DesconoceController:index' => ['privates', '.service_locator.b6NHBF9', 'get_ServiceLocator_B6NHBF9Service', false],
            'App\\Controller\\DesconoceController:show' => ['privates', '.service_locator.HsDA37j', 'get_ServiceLocator_HsDA37jService', false],
            'App\\Controller\\EmpresaController:delete' => ['privates', '.service_locator.zGaaEJz', 'get_ServiceLocator_ZGaaEJzService', false],
            'App\\Controller\\EmpresaController:edit' => ['privates', '.service_locator.zGaaEJz', 'get_ServiceLocator_ZGaaEJzService', false],
            'App\\Controller\\EmpresaController:index' => ['privates', '.service_locator.1elOjJR', 'get_ServiceLocator_1elOjJRService', false],
            'App\\Controller\\EmpresaController:new' => ['privates', '.service_locator.3mnj3Pm', 'get_ServiceLocator_3mnj3PmService', false],
            'App\\Controller\\EmpresaController:show' => ['privates', '.service_locator.zGaaEJz', 'get_ServiceLocator_ZGaaEJzService', false],
            'App\\Controller\\GestionarController:delete' => ['privates', '.service_locator.Mm69KMM', 'get_ServiceLocator_Mm69KMMService', false],
            'App\\Controller\\GestionarController:edit' => ['privates', '.service_locator.Mm69KMM', 'get_ServiceLocator_Mm69KMMService', false],
            'App\\Controller\\GestionarController:index' => ['privates', '.service_locator.Q7y3H4c', 'get_ServiceLocator_Q7y3H4cService', false],
            'App\\Controller\\GestionarController:show' => ['privates', '.service_locator.Mm69KMM', 'get_ServiceLocator_Mm69KMMService', false],
            'App\\Controller\\ImportacionController:delete' => ['privates', '.service_locator.Rb7vt2Y', 'get_ServiceLocator_Rb7vt2YService', false],
            'App\\Controller\\ImportacionController:edit' => ['privates', '.service_locator.Rb7vt2Y', 'get_ServiceLocator_Rb7vt2YService', false],
            'App\\Controller\\ImportacionController:index' => ['privates', '.service_locator.QmhK1nQ', 'get_ServiceLocator_QmhK1nQService', false],
            'App\\Controller\\ImportacionController:new' => ['privates', '.service_locator.eXD55sI', 'get_ServiceLocator_EXD55sIService', false],
            'App\\Controller\\ImportacionController:newPer' => ['privates', '.service_locator.eXD55sI', 'get_ServiceLocator_EXD55sIService', false],
            'App\\Controller\\ImportacionController:show' => ['privates', '.service_locator.Rb7vt2Y', 'get_ServiceLocator_Rb7vt2YService', false],
            'App\\Controller\\JefeAbogadosController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeAbogadosController:edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\JefeAbogadosController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\JefeAbogadosController:new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\JefeAbogadosController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeAbogadosController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\JefeProcesosController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeProcesosController:edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\JefeProcesosController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\JefeProcesosController:new' => ['privates', '.service_locator.uX2xS.X', 'get_ServiceLocator_UX2xS_XService', false],
            'App\\Controller\\JefeProcesosController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\JefeProcesosController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\Controller\\MenuCabezeraController:delete' => ['privates', '.service_locator.F2EPLF4', 'get_ServiceLocator_F2EPLF4Service', false],
            'App\\Controller\\MenuCabezeraController:edit' => ['privates', '.service_locator.F2EPLF4', 'get_ServiceLocator_F2EPLF4Service', false],
            'App\\Controller\\MenuCabezeraController:index' => ['privates', '.service_locator.KTzT3Id', 'get_ServiceLocator_KTzT3IdService', false],
            'App\\Controller\\MenuCabezeraController:new' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\MenuCabezeraController:show' => ['privates', '.service_locator.F2EPLF4', 'get_ServiceLocator_F2EPLF4Service', false],
            'App\\Controller\\MenuController:delete' => ['privates', '.service_locator.2NAKaUy', 'get_ServiceLocator_2NAKaUyService', false],
            'App\\Controller\\MenuController:edit' => ['privates', '.service_locator.w_SvetQ', 'get_ServiceLocator_WSvetQService', false],
            'App\\Controller\\MenuController:index' => ['privates', '.service_locator.C_f1mzT', 'get_ServiceLocator_CF1mzTService', false],
            'App\\Controller\\MenuController:mainMenu' => ['privates', '.service_locator.vozMxkb', 'get_ServiceLocator_VozMxkbService', false],
            'App\\Controller\\MenuController:new' => ['privates', '.service_locator.OPjaPZQ', 'get_ServiceLocator_OPjaPZQService', false],
            'App\\Controller\\MisDatosController:index' => ['privates', '.service_locator.Fws7FEo', 'get_ServiceLocator_Fws7FEoService', false],
            'App\\Controller\\MisDatosController:modificar' => ['privates', '.service_locator.Ee0e0h.', 'get_ServiceLocator_Ee0e0h_Service', false],
            'App\\Controller\\MisDatosController:password' => ['privates', '.service_locator.rqlU3E_', 'get_ServiceLocator_RqlU3EService', false],
            'App\\Controller\\ModuloController:edit' => ['privates', '.service_locator._1NEHi_', 'get_ServiceLocator_1NEHiService', false],
            'App\\Controller\\ModuloController:index' => ['privates', '.service_locator.4vbyOeV', 'get_ServiceLocator_4vbyOeVService', false],
            'App\\Controller\\ModuloController:new' => ['privates', '.service_locator.gBsSb5L', 'get_ServiceLocator_GBsSb5LService', false],
            'App\\Controller\\MultasController:edit' => ['privates', '.service_locator.fY7iPWr', 'get_ServiceLocator_FY7iPWrService', false],
            'App\\Controller\\MultasController:index' => ['privates', '.service_locator.cNnViMJ', 'get_ServiceLocator_CNnViMJService', false],
            'App\\Controller\\MultasController:new' => ['privates', '.service_locator.fY7iPWr', 'get_ServiceLocator_FY7iPWrService', false],
            'App\\Controller\\MultasController:view' => ['privates', '.service_locator.dzE1eBI', 'get_ServiceLocator_DzE1eBIService', false],
            'App\\Controller\\NocontestaController:index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\NocontestaController:show' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\NocontrataController:index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\NocontrataController:show' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\PagoCanalController:delete' => ['privates', '.service_locator.RhyREDn', 'get_ServiceLocator_RhyREDnService', false],
            'App\\Controller\\PagoCanalController:edit' => ['privates', '.service_locator.RhyREDn', 'get_ServiceLocator_RhyREDnService', false],
            'App\\Controller\\PagoCanalController:index' => ['privates', '.service_locator.UjsxOEZ', 'get_ServiceLocator_UjsxOEZService', false],
            'App\\Controller\\PagoCanalController:show' => ['privates', '.service_locator.RhyREDn', 'get_ServiceLocator_RhyREDnService', false],
            'App\\Controller\\PagoController:cargarPagos' => ['privates', '.service_locator._GMtc1I', 'get_ServiceLocator_GMtc1IService', false],
            'App\\Controller\\PagoController:delete' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\PagoController:detallepagos' => ['privates', '.service_locator.A0do.gc', 'get_ServiceLocator_A0do_GcService', false],
            'App\\Controller\\PagoController:edit' => ['privates', '.service_locator.77BaYbJ', 'get_ServiceLocator_77BaYbJService', false],
            'App\\Controller\\PagoController:finalizado' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\PagoController:generaCuotas' => ['privates', '.service_locator.XPvRhvX', 'get_ServiceLocator_XPvRhvXService', false],
            'App\\Controller\\PagoController:index' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\PagoController:new' => ['privates', '.service_locator.nIfFBcT', 'get_ServiceLocator_NIfFBcTService', false],
            'App\\Controller\\PagoController:resumen' => ['privates', '.service_locator.HQMYHf1', 'get_ServiceLocator_HQMYHf1Service', false],
            'App\\Controller\\PagoController:show' => ['privates', '.service_locator.C3wYJvP', 'get_ServiceLocator_C3wYJvPService', false],
            'App\\Controller\\PagoController:verpagos' => ['privates', '.service_locator.dzE1eBI', 'get_ServiceLocator_DzE1eBIService', false],
            'App\\Controller\\PagoController:verpagosShow' => ['privates', '.service_locator..OZbobJ', 'get_ServiceLocator__OZbobJService', false],
            'App\\Controller\\PagoTipoController:delete' => ['privates', '.service_locator.J.1nOix', 'get_ServiceLocator_J_1nOixService', false],
            'App\\Controller\\PagoTipoController:edit' => ['privates', '.service_locator.J.1nOix', 'get_ServiceLocator_J_1nOixService', false],
            'App\\Controller\\PagoTipoController:index' => ['privates', '.service_locator.Mx_VGXK', 'get_ServiceLocator_MxVGXKService', false],
            'App\\Controller\\PagoTipoController:show' => ['privates', '.service_locator.J.1nOix', 'get_ServiceLocator_J_1nOixService', false],
            'App\\Controller\\PaisController:delete' => ['privates', '.service_locator.jucI2NL', 'get_ServiceLocator_JucI2NLService', false],
            'App\\Controller\\PaisController:edit' => ['privates', '.service_locator.jucI2NL', 'get_ServiceLocator_JucI2NLService', false],
            'App\\Controller\\PaisController:index' => ['privates', '.service_locator.pBYZih8', 'get_ServiceLocator_PBYZih8Service', false],
            'App\\Controller\\PaisController:show' => ['privates', '.service_locator.jucI2NL', 'get_ServiceLocator_JucI2NLService', false],
            'App\\Controller\\PanelAbogadoController:contrata' => ['privates', '.service_locator.XbWwFz7', 'get_ServiceLocator_XbWwFz7Service', false],
            'App\\Controller\\PanelAbogadoController:delRol' => ['privates', '.service_locator.bsYhYgq', 'get_ServiceLocator_BsYhYgqService', false],
            'App\\Controller\\PanelAbogadoController:index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\PanelAbogadoController:new' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\PanelAbogadoController:newRol' => ['privates', '.service_locator.xgo.uLQ', 'get_ServiceLocator_Xgo_ULQService', false],
            'App\\Controller\\PanelAbogadoController:noContrata' => ['privates', '.service_locator.sBhv2Cg', 'get_ServiceLocator_SBhv2CgService', false],
            'App\\Controller\\PanelAgendadorController:abogados' => ['privates', '.service_locator.D6xVyEO', 'get_ServiceLocator_D6xVyEOService', false],
            'App\\Controller\\PanelAgendadorController:calendario' => ['privates', '.service_locator.yGoJWDw', 'get_ServiceLocator_YGoJWDwService', false],
            'App\\Controller\\PanelAgendadorController:edit' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\PanelAgendadorController:engestion' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\PanelAgendadorController:hora' => ['privates', '.service_locator.tKHC2e8', 'get_ServiceLocator_TKHC2e8Service', false],
            'App\\Controller\\PanelAgendadorController:index' => ['privates', '.service_locator.VIDQ8NV', 'get_ServiceLocator_VIDQ8NVService', false],
            'App\\Controller\\PanelAgendadorController:new' => ['privates', '.service_locator.V3FRyj4', 'get_ServiceLocator_V3FRyj4Service', false],
            'App\\Controller\\PanelAgendadorController:reasignar' => ['privates', '.service_locator.Ee0e0h.', 'get_ServiceLocator_Ee0e0h_Service', false],
            'App\\Controller\\PrivilegioController:delete' => ['privates', '.service_locator.rpxV3kS', 'get_ServiceLocator_RpxV3kSService', false],
            'App\\Controller\\PrivilegioController:edit' => ['privates', '.service_locator.sy1d2n_', 'get_ServiceLocator_Sy1d2nService', false],
            'App\\Controller\\PrivilegioController:index' => ['privates', '.service_locator.HcMexkl', 'get_ServiceLocator_HcMexklService', false],
            'App\\Controller\\PrivilegioController:new' => ['privates', '.service_locator.J2.emP.', 'get_ServiceLocator_J2_EmP_Service', false],
            'App\\Controller\\PrivilegioController:regenerar' => ['privates', '.service_locator.J2.emP.', 'get_ServiceLocator_J2_EmP_Service', false],
            'App\\Controller\\PrivilegioController:show' => ['privates', '.service_locator.rpxV3kS', 'get_ServiceLocator_RpxV3kSService', false],
            'App\\Controller\\PrivilegioTipousuarioController:delete' => ['privates', '.service_locator.zSBANml', 'get_ServiceLocator_ZSBANmlService', false],
            'App\\Controller\\PrivilegioTipousuarioController:edit' => ['privates', '.service_locator.J0I48HS', 'get_ServiceLocator_J0I48HSService', false],
            'App\\Controller\\PrivilegioTipousuarioController:index' => ['privates', '.service_locator.sJ4K5iu', 'get_ServiceLocator_SJ4K5iuService', false],
            'App\\Controller\\PrivilegioTipousuarioController:new' => ['privates', '.service_locator.wiQplfK', 'get_ServiceLocator_WiQplfKService', false],
            'App\\Controller\\ReasignarController:index' => ['privates', '.service_locator.CK_KTx5', 'get_ServiceLocator_CKKTx5Service', false],
            'App\\Controller\\ReasignarController:show' => ['privates', '.service_locator.WSaRqqN', 'get_ServiceLocator_WSaRqqNService', false],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.BWknic2', 'get_ServiceLocator_BWknic2Service', false],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.8Z_jHRB', 'get_ServiceLocator_8ZJHRBService', false],
            'App\\Controller\\ResumenController:abogados' => ['privates', '.service_locator.D6xVyEO', 'get_ServiceLocator_D6xVyEOService', false],
            'App\\Controller\\ResumenController:calendario' => ['privates', '.service_locator.yGoJWDw', 'get_ServiceLocator_YGoJWDwService', false],
            'App\\Controller\\ResumenController:edit' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\ResumenController:engestion' => ['privates', '.service_locator.aMe1AiS', 'get_ServiceLocator_AMe1AiSService', false],
            'App\\Controller\\ResumenController:index' => ['privates', '.service_locator.VIDQ8NV', 'get_ServiceLocator_VIDQ8NVService', false],
            'App\\Controller\\ResumenController:new' => ['privates', '.service_locator.V3FRyj4', 'get_ServiceLocator_V3FRyj4Service', false],
            'App\\Controller\\SucursalController:delete' => ['privates', '.service_locator.IU0Vrrj', 'get_ServiceLocator_IU0VrrjService', false],
            'App\\Controller\\SucursalController:edit' => ['privates', '.service_locator.IU0Vrrj', 'get_ServiceLocator_IU0VrrjService', false],
            'App\\Controller\\SucursalController:index' => ['privates', '.service_locator.2mo_tjD', 'get_ServiceLocator_2moTjDService', false],
            'App\\Controller\\SucursalController:new' => ['privates', '.service_locator.W4foxkB', 'get_ServiceLocator_W4foxkBService', false],
            'App\\Controller\\TerminosController:edit' => ['privates', '.service_locator.Dagvfg9', 'get_ServiceLocator_Dagvfg9Service', false],
            'App\\Controller\\TerminosController:index' => ['privates', '.service_locator.b6NHBF9', 'get_ServiceLocator_B6NHBF9Service', false],
            'App\\Controller\\TerminosController:pdf' => ['privates', '.service_locator.6k_BboC', 'get_ServiceLocator_6kBboCService', false],
            'App\\Controller\\TerminosController:show' => ['privates', '.service_locator.HsDA37j', 'get_ServiceLocator_HsDA37jService', false],
            'App\\Controller\\TramitadoresController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\TramitadoresController:edit' => ['privates', '.service_locator.OGBTJpY', 'get_ServiceLocator_OGBTJpYService', false],
            'App\\Controller\\TramitadoresController:index' => ['privates', '.service_locator.riFMhde', 'get_ServiceLocator_RiFMhdeService', false],
            'App\\Controller\\TramitadoresController:new' => ['privates', '.service_locator.z9E6LMa', 'get_ServiceLocator_Z9E6LMaService', false],
            'App\\Controller\\TramitadoresController:restore' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\TramitadoresController:show' => ['privates', '.service_locator.onFC5Cx', 'get_ServiceLocator_OnFC5CxService', false],
            'App\\Controller\\UsuarioCategoriaController:delete' => ['privates', '.service_locator.UF_vGC_', 'get_ServiceLocator_UFVGCService', false],
            'App\\Controller\\UsuarioCategoriaController:edit' => ['privates', '.service_locator.UF_vGC_', 'get_ServiceLocator_UFVGCService', false],
            'App\\Controller\\UsuarioCategoriaController:index' => ['privates', '.service_locator.NseDBlA', 'get_ServiceLocator_NseDBlAService', false],
            'App\\Controller\\UsuarioCategoriaController:new' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\UsuarioCategoriaController:show' => ['privates', '.service_locator.UF_vGC_', 'get_ServiceLocator_UFVGCService', false],
            'App\\Controller\\UsuarioController:delete' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\UsuarioController:edit' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\UsuarioController:index' => ['privates', '.service_locator.Ee0e0h.', 'get_ServiceLocator_Ee0e0h_Service', false],
            'App\\Controller\\UsuarioController:new' => ['privates', '.service_locator.hszs.DW', 'get_ServiceLocator_Hszs_DWService', false],
            'App\\Controller\\UsuarioController:show' => ['privates', '.service_locator._g6XNTO', 'get_ServiceLocator_G6XNTOService', false],
            'App\\Controller\\UsuarioCuentaController:delete' => ['privates', '.service_locator.BloIjNx', 'get_ServiceLocator_BloIjNxService', false],
            'App\\Controller\\UsuarioCuentaController:edit' => ['privates', '.service_locator.BloIjNx', 'get_ServiceLocator_BloIjNxService', false],
            'App\\Controller\\UsuarioCuentaController:index' => ['privates', '.service_locator.0LR1cBw', 'get_ServiceLocator_0LR1cBwService', false],
            'App\\Controller\\UsuarioCuentaController:show' => ['privates', '.service_locator.BloIjNx', 'get_ServiceLocator_BloIjNxService', false],
            'App\\Controller\\UsuarioNoDisponibleController:delete' => ['privates', '.service_locator.LzAFxPi', 'get_ServiceLocator_LzAFxPiService', false],
            'App\\Controller\\UsuarioNoDisponibleController:edit' => ['privates', '.service_locator.tcvPBU9', 'get_ServiceLocator_TcvPBU9Service', false],
            'App\\Controller\\UsuarioNoDisponibleController:index' => ['privates', '.service_locator.SYsIIrw', 'get_ServiceLocator_SYsIIrwService', false],
            'App\\Controller\\UsuarioNoDisponibleController:new' => ['privates', '.service_locator.SYsIIrw', 'get_ServiceLocator_SYsIIrwService', false],
            'App\\Controller\\UsuarioNoDisponibleController:show' => ['privates', '.service_locator.tcvPBU9', 'get_ServiceLocator_TcvPBU9Service', false],
            'App\\Controller\\UsuarioStatusController:delete' => ['privates', '.service_locator.w037Jll', 'get_ServiceLocator_W037JllService', false],
            'App\\Controller\\UsuarioStatusController:edit' => ['privates', '.service_locator.w037Jll', 'get_ServiceLocator_W037JllService', false],
            'App\\Controller\\UsuarioStatusController:index' => ['privates', '.service_locator.Y3JxyLC', 'get_ServiceLocator_Y3JxyLCService', false],
            'App\\Controller\\UsuarioStatusController:show' => ['privates', '.service_locator.w037Jll', 'get_ServiceLocator_W037JllService', false],
            'App\\Controller\\UsuarioTipoController:delete' => ['privates', '.service_locator.U3af4lB', 'get_ServiceLocator_U3af4lBService', false],
            'App\\Controller\\UsuarioTipoController:edit' => ['privates', '.service_locator.U3af4lB', 'get_ServiceLocator_U3af4lBService', false],
            'App\\Controller\\UsuarioTipoController:index' => ['privates', '.service_locator.6XyKr57', 'get_ServiceLocator_6XyKr57Service', false],
            'App\\Controller\\UsuarioTipoController:new' => ['privates', '.service_locator.LOJoumX', 'get_ServiceLocator_LOJoumXService', false],
            'App\\Controller\\UsuarioTipoController:show' => ['privates', '.service_locator.U3af4lB', 'get_ServiceLocator_U3af4lBService', false],
            'App\\Controller\\VencimientoController:delete' => ['privates', '.service_locator.0ahK5zW', 'get_ServiceLocator_0ahK5zWService', false],
            'App\\Controller\\VencimientoController:edit' => ['privates', '.service_locator.0ahK5zW', 'get_ServiceLocator_0ahK5zWService', false],
            'App\\Controller\\VencimientoController:index' => ['privates', '.service_locator.k82ifbT', 'get_ServiceLocator_K82ifbTService', false],
            'App\\Controller\\VencimientoController:show' => ['privates', '.service_locator.0ahK5zW', 'get_ServiceLocator_0ahK5zWService', false],
            'App\\Controller\\WebhookController:index' => ['privates', '.service_locator.VYLHLQC', 'get_ServiceLocator_VYLHLQCService', false],
        ], [
            'App\\Controller\\AbogadosController::delete' => '?',
            'App\\Controller\\AbogadosController::edit' => '?',
            'App\\Controller\\AbogadosController::index' => '?',
            'App\\Controller\\AbogadosController::new' => '?',
            'App\\Controller\\AbogadosController::restore' => '?',
            'App\\Controller\\AbogadosController::show' => '?',
            'App\\Controller\\AccionController::delete' => '?',
            'App\\Controller\\AccionController::edit' => '?',
            'App\\Controller\\AccionController::index' => '?',
            'App\\Controller\\AccionController::show' => '?',
            'App\\Controller\\AdministradorCuentasController::delete' => '?',
            'App\\Controller\\AdministradorCuentasController::edit' => '?',
            'App\\Controller\\AdministradorCuentasController::index' => '?',
            'App\\Controller\\AdministradorCuentasController::new' => '?',
            'App\\Controller\\AdministradorCuentasController::restore' => '?',
            'App\\Controller\\AdministradorCuentasController::show' => '?',
            'App\\Controller\\AdministradoresController::delete' => '?',
            'App\\Controller\\AdministradoresController::edit' => '?',
            'App\\Controller\\AdministradoresController::index' => '?',
            'App\\Controller\\AdministradoresController::new' => '?',
            'App\\Controller\\AdministradoresController::restore' => '?',
            'App\\Controller\\AdministradoresController::show' => '?',
            'App\\Controller\\AdministrativoController::delete' => '?',
            'App\\Controller\\AdministrativoController::edit' => '?',
            'App\\Controller\\AdministrativoController::index' => '?',
            'App\\Controller\\AdministrativoController::new' => '?',
            'App\\Controller\\AdministrativoController::restore' => '?',
            'App\\Controller\\AdministrativoController::show' => '?',
            'App\\Controller\\AgendaController::agendadores' => '?',
            'App\\Controller\\AgendaController::delete' => '?',
            'App\\Controller\\AgendaController::edit' => '?',
            'App\\Controller\\AgendaController::index' => '?',
            'App\\Controller\\AgendaController::new' => '?',
            'App\\Controller\\AgendaController::resumenabogados' => '?',
            'App\\Controller\\AgendaController::resumenagendadores' => '?',
            'App\\Controller\\AgendaController::show' => '?',
            'App\\Controller\\AgendadoresController::delete' => '?',
            'App\\Controller\\AgendadoresController::edit' => '?',
            'App\\Controller\\AgendadoresController::index' => '?',
            'App\\Controller\\AgendadoresController::new' => '?',
            'App\\Controller\\AgendadoresController::restore' => '?',
            'App\\Controller\\AgendadoresController::show' => '?',
            'App\\Controller\\ChangecompController::index' => '?',
            'App\\Controller\\ChangecompController::new' => '?',
            'App\\Controller\\ClientePotencialController::delete' => '?',
            'App\\Controller\\ClientePotencialController::edit' => '?',
            'App\\Controller\\ClientePotencialController::index' => '?',
            'App\\Controller\\ClientePotencialController::show' => '?',
            'App\\Controller\\ClientesController::delete' => '?',
            'App\\Controller\\ClientesController::edit' => '?',
            'App\\Controller\\ClientesController::index' => '?',
            'App\\Controller\\ClientesController::new' => '?',
            'App\\Controller\\ClientesController::restore' => '?',
            'App\\Controller\\ClientesController::show' => '?',
            'App\\Controller\\CobradoresController::delete' => '?',
            'App\\Controller\\CobradoresController::edit' => '?',
            'App\\Controller\\CobradoresController::index' => '?',
            'App\\Controller\\CobradoresController::new' => '?',
            'App\\Controller\\CobradoresController::restore' => '?',
            'App\\Controller\\CobradoresController::show' => '?',
            'App\\Controller\\CobranzaController::delete' => '?',
            'App\\Controller\\CobranzaController::detallepagos' => '?',
            'App\\Controller\\CobranzaController::edit' => '?',
            'App\\Controller\\CobranzaController::finalizado' => '?',
            'App\\Controller\\CobranzaController::generalotes' => '?',
            'App\\Controller\\CobranzaController::index' => '?',
            'App\\Controller\\CobranzaController::new' => '?',
            'App\\Controller\\CobranzaController::resumen' => '?',
            'App\\Controller\\CobranzaController::show' => '?',
            'App\\Controller\\CobranzaController::verpagos' => '?',
            'App\\Controller\\CobranzaController::verpagosShow' => '?',
            'App\\Controller\\ConfiguracionController::delete' => '?',
            'App\\Controller\\ConfiguracionController::edit' => '?',
            'App\\Controller\\ConfiguracionController::index' => '?',
            'App\\Controller\\ConfiguracionController::show' => '?',
            'App\\Controller\\ContratoController::actualizafecha' => '?',
            'App\\Controller\\ContratoController::delRol' => '?',
            'App\\Controller\\ContratoController::delete' => '?',
            'App\\Controller\\ContratoController::edit' => '?',
            'App\\Controller\\ContratoController::finalizar' => '?',
            'App\\Controller\\ContratoController::index' => '?',
            'App\\Controller\\ContratoController::newRol' => '?',
            'App\\Controller\\ContratoController::pdf' => '?',
            'App\\Controller\\ContratoController::regenerapdfs' => '?',
            'App\\Controller\\ContratoController::show' => '?',
            'App\\Controller\\ContratoController::terminar' => '?',
            'App\\Controller\\ContratoRolController::delete' => '?',
            'App\\Controller\\ContratoRolController::edit' => '?',
            'App\\Controller\\ContratoRolController::index' => '?',
            'App\\Controller\\ContratoRolController::show' => '?',
            'App\\Controller\\CuentaController::delete' => '?',
            'App\\Controller\\CuentaController::edit' => '?',
            'App\\Controller\\CuentaController::index' => '?',
            'App\\Controller\\CuentaController::show' => '?',
            'App\\Controller\\DesconoceController::edit' => '?',
            'App\\Controller\\DesconoceController::index' => '?',
            'App\\Controller\\DesconoceController::show' => '?',
            'App\\Controller\\EmpresaController::delete' => '?',
            'App\\Controller\\EmpresaController::edit' => '?',
            'App\\Controller\\EmpresaController::index' => '?',
            'App\\Controller\\EmpresaController::new' => '?',
            'App\\Controller\\EmpresaController::show' => '?',
            'App\\Controller\\GestionarController::delete' => '?',
            'App\\Controller\\GestionarController::edit' => '?',
            'App\\Controller\\GestionarController::index' => '?',
            'App\\Controller\\GestionarController::show' => '?',
            'App\\Controller\\ImportacionController::delete' => '?',
            'App\\Controller\\ImportacionController::edit' => '?',
            'App\\Controller\\ImportacionController::index' => '?',
            'App\\Controller\\ImportacionController::new' => '?',
            'App\\Controller\\ImportacionController::newPer' => '?',
            'App\\Controller\\ImportacionController::show' => '?',
            'App\\Controller\\JefeAbogadosController::delete' => '?',
            'App\\Controller\\JefeAbogadosController::edit' => '?',
            'App\\Controller\\JefeAbogadosController::index' => '?',
            'App\\Controller\\JefeAbogadosController::new' => '?',
            'App\\Controller\\JefeAbogadosController::restore' => '?',
            'App\\Controller\\JefeAbogadosController::show' => '?',
            'App\\Controller\\JefeProcesosController::delete' => '?',
            'App\\Controller\\JefeProcesosController::edit' => '?',
            'App\\Controller\\JefeProcesosController::index' => '?',
            'App\\Controller\\JefeProcesosController::new' => '?',
            'App\\Controller\\JefeProcesosController::restore' => '?',
            'App\\Controller\\JefeProcesosController::show' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\MenuCabezeraController::delete' => '?',
            'App\\Controller\\MenuCabezeraController::edit' => '?',
            'App\\Controller\\MenuCabezeraController::index' => '?',
            'App\\Controller\\MenuCabezeraController::new' => '?',
            'App\\Controller\\MenuCabezeraController::show' => '?',
            'App\\Controller\\MenuController::delete' => '?',
            'App\\Controller\\MenuController::edit' => '?',
            'App\\Controller\\MenuController::index' => '?',
            'App\\Controller\\MenuController::mainMenu' => '?',
            'App\\Controller\\MenuController::new' => '?',
            'App\\Controller\\MisDatosController::index' => '?',
            'App\\Controller\\MisDatosController::modificar' => '?',
            'App\\Controller\\MisDatosController::password' => '?',
            'App\\Controller\\ModuloController::edit' => '?',
            'App\\Controller\\ModuloController::index' => '?',
            'App\\Controller\\ModuloController::new' => '?',
            'App\\Controller\\MultasController::edit' => '?',
            'App\\Controller\\MultasController::index' => '?',
            'App\\Controller\\MultasController::new' => '?',
            'App\\Controller\\MultasController::view' => '?',
            'App\\Controller\\NocontestaController::index' => '?',
            'App\\Controller\\NocontestaController::show' => '?',
            'App\\Controller\\NocontrataController::index' => '?',
            'App\\Controller\\NocontrataController::show' => '?',
            'App\\Controller\\PagoCanalController::delete' => '?',
            'App\\Controller\\PagoCanalController::edit' => '?',
            'App\\Controller\\PagoCanalController::index' => '?',
            'App\\Controller\\PagoCanalController::show' => '?',
            'App\\Controller\\PagoController::cargarPagos' => '?',
            'App\\Controller\\PagoController::delete' => '?',
            'App\\Controller\\PagoController::detallepagos' => '?',
            'App\\Controller\\PagoController::edit' => '?',
            'App\\Controller\\PagoController::finalizado' => '?',
            'App\\Controller\\PagoController::generaCuotas' => '?',
            'App\\Controller\\PagoController::index' => '?',
            'App\\Controller\\PagoController::new' => '?',
            'App\\Controller\\PagoController::resumen' => '?',
            'App\\Controller\\PagoController::show' => '?',
            'App\\Controller\\PagoController::verpagos' => '?',
            'App\\Controller\\PagoController::verpagosShow' => '?',
            'App\\Controller\\PagoTipoController::delete' => '?',
            'App\\Controller\\PagoTipoController::edit' => '?',
            'App\\Controller\\PagoTipoController::index' => '?',
            'App\\Controller\\PagoTipoController::show' => '?',
            'App\\Controller\\PaisController::delete' => '?',
            'App\\Controller\\PaisController::edit' => '?',
            'App\\Controller\\PaisController::index' => '?',
            'App\\Controller\\PaisController::show' => '?',
            'App\\Controller\\PanelAbogadoController::contrata' => '?',
            'App\\Controller\\PanelAbogadoController::delRol' => '?',
            'App\\Controller\\PanelAbogadoController::index' => '?',
            'App\\Controller\\PanelAbogadoController::new' => '?',
            'App\\Controller\\PanelAbogadoController::newRol' => '?',
            'App\\Controller\\PanelAbogadoController::noContrata' => '?',
            'App\\Controller\\PanelAgendadorController::abogados' => '?',
            'App\\Controller\\PanelAgendadorController::calendario' => '?',
            'App\\Controller\\PanelAgendadorController::edit' => '?',
            'App\\Controller\\PanelAgendadorController::engestion' => '?',
            'App\\Controller\\PanelAgendadorController::hora' => '?',
            'App\\Controller\\PanelAgendadorController::index' => '?',
            'App\\Controller\\PanelAgendadorController::new' => '?',
            'App\\Controller\\PanelAgendadorController::reasignar' => '?',
            'App\\Controller\\PrivilegioController::delete' => '?',
            'App\\Controller\\PrivilegioController::edit' => '?',
            'App\\Controller\\PrivilegioController::index' => '?',
            'App\\Controller\\PrivilegioController::new' => '?',
            'App\\Controller\\PrivilegioController::regenerar' => '?',
            'App\\Controller\\PrivilegioController::show' => '?',
            'App\\Controller\\PrivilegioTipousuarioController::delete' => '?',
            'App\\Controller\\PrivilegioTipousuarioController::edit' => '?',
            'App\\Controller\\PrivilegioTipousuarioController::index' => '?',
            'App\\Controller\\PrivilegioTipousuarioController::new' => '?',
            'App\\Controller\\ReasignarController::index' => '?',
            'App\\Controller\\ReasignarController::show' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\ResumenController::abogados' => '?',
            'App\\Controller\\ResumenController::calendario' => '?',
            'App\\Controller\\ResumenController::edit' => '?',
            'App\\Controller\\ResumenController::engestion' => '?',
            'App\\Controller\\ResumenController::index' => '?',
            'App\\Controller\\ResumenController::new' => '?',
            'App\\Controller\\SucursalController::delete' => '?',
            'App\\Controller\\SucursalController::edit' => '?',
            'App\\Controller\\SucursalController::index' => '?',
            'App\\Controller\\SucursalController::new' => '?',
            'App\\Controller\\TerminosController::edit' => '?',
            'App\\Controller\\TerminosController::index' => '?',
            'App\\Controller\\TerminosController::pdf' => '?',
            'App\\Controller\\TerminosController::show' => '?',
            'App\\Controller\\TramitadoresController::delete' => '?',
            'App\\Controller\\TramitadoresController::edit' => '?',
            'App\\Controller\\TramitadoresController::index' => '?',
            'App\\Controller\\TramitadoresController::new' => '?',
            'App\\Controller\\TramitadoresController::restore' => '?',
            'App\\Controller\\TramitadoresController::show' => '?',
            'App\\Controller\\UsuarioCategoriaController::delete' => '?',
            'App\\Controller\\UsuarioCategoriaController::edit' => '?',
            'App\\Controller\\UsuarioCategoriaController::index' => '?',
            'App\\Controller\\UsuarioCategoriaController::new' => '?',
            'App\\Controller\\UsuarioCategoriaController::show' => '?',
            'App\\Controller\\UsuarioController::delete' => '?',
            'App\\Controller\\UsuarioController::edit' => '?',
            'App\\Controller\\UsuarioController::index' => '?',
            'App\\Controller\\UsuarioController::new' => '?',
            'App\\Controller\\UsuarioController::show' => '?',
            'App\\Controller\\UsuarioCuentaController::delete' => '?',
            'App\\Controller\\UsuarioCuentaController::edit' => '?',
            'App\\Controller\\UsuarioCuentaController::index' => '?',
            'App\\Controller\\UsuarioCuentaController::show' => '?',
            'App\\Controller\\UsuarioNoDisponibleController::delete' => '?',
            'App\\Controller\\UsuarioNoDisponibleController::edit' => '?',
            'App\\Controller\\UsuarioNoDisponibleController::index' => '?',
            'App\\Controller\\UsuarioNoDisponibleController::new' => '?',
            'App\\Controller\\UsuarioNoDisponibleController::show' => '?',
            'App\\Controller\\UsuarioStatusController::delete' => '?',
            'App\\Controller\\UsuarioStatusController::edit' => '?',
            'App\\Controller\\UsuarioStatusController::index' => '?',
            'App\\Controller\\UsuarioStatusController::show' => '?',
            'App\\Controller\\UsuarioTipoController::delete' => '?',
            'App\\Controller\\UsuarioTipoController::edit' => '?',
            'App\\Controller\\UsuarioTipoController::index' => '?',
            'App\\Controller\\UsuarioTipoController::new' => '?',
            'App\\Controller\\UsuarioTipoController::show' => '?',
            'App\\Controller\\VencimientoController::delete' => '?',
            'App\\Controller\\VencimientoController::edit' => '?',
            'App\\Controller\\VencimientoController::index' => '?',
            'App\\Controller\\VencimientoController::show' => '?',
            'App\\Controller\\WebhookController::index' => '?',
            'App\\Controller\\AbogadosController:delete' => '?',
            'App\\Controller\\AbogadosController:edit' => '?',
            'App\\Controller\\AbogadosController:index' => '?',
            'App\\Controller\\AbogadosController:new' => '?',
            'App\\Controller\\AbogadosController:restore' => '?',
            'App\\Controller\\AbogadosController:show' => '?',
            'App\\Controller\\AccionController:delete' => '?',
            'App\\Controller\\AccionController:edit' => '?',
            'App\\Controller\\AccionController:index' => '?',
            'App\\Controller\\AccionController:show' => '?',
            'App\\Controller\\AdministradorCuentasController:delete' => '?',
            'App\\Controller\\AdministradorCuentasController:edit' => '?',
            'App\\Controller\\AdministradorCuentasController:index' => '?',
            'App\\Controller\\AdministradorCuentasController:new' => '?',
            'App\\Controller\\AdministradorCuentasController:restore' => '?',
            'App\\Controller\\AdministradorCuentasController:show' => '?',
            'App\\Controller\\AdministradoresController:delete' => '?',
            'App\\Controller\\AdministradoresController:edit' => '?',
            'App\\Controller\\AdministradoresController:index' => '?',
            'App\\Controller\\AdministradoresController:new' => '?',
            'App\\Controller\\AdministradoresController:restore' => '?',
            'App\\Controller\\AdministradoresController:show' => '?',
            'App\\Controller\\AdministrativoController:delete' => '?',
            'App\\Controller\\AdministrativoController:edit' => '?',
            'App\\Controller\\AdministrativoController:index' => '?',
            'App\\Controller\\AdministrativoController:new' => '?',
            'App\\Controller\\AdministrativoController:restore' => '?',
            'App\\Controller\\AdministrativoController:show' => '?',
            'App\\Controller\\AgendaController:agendadores' => '?',
            'App\\Controller\\AgendaController:delete' => '?',
            'App\\Controller\\AgendaController:edit' => '?',
            'App\\Controller\\AgendaController:index' => '?',
            'App\\Controller\\AgendaController:new' => '?',
            'App\\Controller\\AgendaController:resumenabogados' => '?',
            'App\\Controller\\AgendaController:resumenagendadores' => '?',
            'App\\Controller\\AgendaController:show' => '?',
            'App\\Controller\\AgendadoresController:delete' => '?',
            'App\\Controller\\AgendadoresController:edit' => '?',
            'App\\Controller\\AgendadoresController:index' => '?',
            'App\\Controller\\AgendadoresController:new' => '?',
            'App\\Controller\\AgendadoresController:restore' => '?',
            'App\\Controller\\AgendadoresController:show' => '?',
            'App\\Controller\\ChangecompController:index' => '?',
            'App\\Controller\\ChangecompController:new' => '?',
            'App\\Controller\\ClientePotencialController:delete' => '?',
            'App\\Controller\\ClientePotencialController:edit' => '?',
            'App\\Controller\\ClientePotencialController:index' => '?',
            'App\\Controller\\ClientePotencialController:show' => '?',
            'App\\Controller\\ClientesController:delete' => '?',
            'App\\Controller\\ClientesController:edit' => '?',
            'App\\Controller\\ClientesController:index' => '?',
            'App\\Controller\\ClientesController:new' => '?',
            'App\\Controller\\ClientesController:restore' => '?',
            'App\\Controller\\ClientesController:show' => '?',
            'App\\Controller\\CobradoresController:delete' => '?',
            'App\\Controller\\CobradoresController:edit' => '?',
            'App\\Controller\\CobradoresController:index' => '?',
            'App\\Controller\\CobradoresController:new' => '?',
            'App\\Controller\\CobradoresController:restore' => '?',
            'App\\Controller\\CobradoresController:show' => '?',
            'App\\Controller\\CobranzaController:delete' => '?',
            'App\\Controller\\CobranzaController:detallepagos' => '?',
            'App\\Controller\\CobranzaController:edit' => '?',
            'App\\Controller\\CobranzaController:finalizado' => '?',
            'App\\Controller\\CobranzaController:generalotes' => '?',
            'App\\Controller\\CobranzaController:index' => '?',
            'App\\Controller\\CobranzaController:new' => '?',
            'App\\Controller\\CobranzaController:resumen' => '?',
            'App\\Controller\\CobranzaController:show' => '?',
            'App\\Controller\\CobranzaController:verpagos' => '?',
            'App\\Controller\\CobranzaController:verpagosShow' => '?',
            'App\\Controller\\ConfiguracionController:delete' => '?',
            'App\\Controller\\ConfiguracionController:edit' => '?',
            'App\\Controller\\ConfiguracionController:index' => '?',
            'App\\Controller\\ConfiguracionController:show' => '?',
            'App\\Controller\\ContratoController:actualizafecha' => '?',
            'App\\Controller\\ContratoController:delRol' => '?',
            'App\\Controller\\ContratoController:delete' => '?',
            'App\\Controller\\ContratoController:edit' => '?',
            'App\\Controller\\ContratoController:finalizar' => '?',
            'App\\Controller\\ContratoController:index' => '?',
            'App\\Controller\\ContratoController:newRol' => '?',
            'App\\Controller\\ContratoController:pdf' => '?',
            'App\\Controller\\ContratoController:regenerapdfs' => '?',
            'App\\Controller\\ContratoController:show' => '?',
            'App\\Controller\\ContratoController:terminar' => '?',
            'App\\Controller\\ContratoRolController:delete' => '?',
            'App\\Controller\\ContratoRolController:edit' => '?',
            'App\\Controller\\ContratoRolController:index' => '?',
            'App\\Controller\\ContratoRolController:show' => '?',
            'App\\Controller\\CuentaController:delete' => '?',
            'App\\Controller\\CuentaController:edit' => '?',
            'App\\Controller\\CuentaController:index' => '?',
            'App\\Controller\\CuentaController:show' => '?',
            'App\\Controller\\DesconoceController:edit' => '?',
            'App\\Controller\\DesconoceController:index' => '?',
            'App\\Controller\\DesconoceController:show' => '?',
            'App\\Controller\\EmpresaController:delete' => '?',
            'App\\Controller\\EmpresaController:edit' => '?',
            'App\\Controller\\EmpresaController:index' => '?',
            'App\\Controller\\EmpresaController:new' => '?',
            'App\\Controller\\EmpresaController:show' => '?',
            'App\\Controller\\GestionarController:delete' => '?',
            'App\\Controller\\GestionarController:edit' => '?',
            'App\\Controller\\GestionarController:index' => '?',
            'App\\Controller\\GestionarController:show' => '?',
            'App\\Controller\\ImportacionController:delete' => '?',
            'App\\Controller\\ImportacionController:edit' => '?',
            'App\\Controller\\ImportacionController:index' => '?',
            'App\\Controller\\ImportacionController:new' => '?',
            'App\\Controller\\ImportacionController:newPer' => '?',
            'App\\Controller\\ImportacionController:show' => '?',
            'App\\Controller\\JefeAbogadosController:delete' => '?',
            'App\\Controller\\JefeAbogadosController:edit' => '?',
            'App\\Controller\\JefeAbogadosController:index' => '?',
            'App\\Controller\\JefeAbogadosController:new' => '?',
            'App\\Controller\\JefeAbogadosController:restore' => '?',
            'App\\Controller\\JefeAbogadosController:show' => '?',
            'App\\Controller\\JefeProcesosController:delete' => '?',
            'App\\Controller\\JefeProcesosController:edit' => '?',
            'App\\Controller\\JefeProcesosController:index' => '?',
            'App\\Controller\\JefeProcesosController:new' => '?',
            'App\\Controller\\JefeProcesosController:restore' => '?',
            'App\\Controller\\JefeProcesosController:show' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\MenuCabezeraController:delete' => '?',
            'App\\Controller\\MenuCabezeraController:edit' => '?',
            'App\\Controller\\MenuCabezeraController:index' => '?',
            'App\\Controller\\MenuCabezeraController:new' => '?',
            'App\\Controller\\MenuCabezeraController:show' => '?',
            'App\\Controller\\MenuController:delete' => '?',
            'App\\Controller\\MenuController:edit' => '?',
            'App\\Controller\\MenuController:index' => '?',
            'App\\Controller\\MenuController:mainMenu' => '?',
            'App\\Controller\\MenuController:new' => '?',
            'App\\Controller\\MisDatosController:index' => '?',
            'App\\Controller\\MisDatosController:modificar' => '?',
            'App\\Controller\\MisDatosController:password' => '?',
            'App\\Controller\\ModuloController:edit' => '?',
            'App\\Controller\\ModuloController:index' => '?',
            'App\\Controller\\ModuloController:new' => '?',
            'App\\Controller\\MultasController:edit' => '?',
            'App\\Controller\\MultasController:index' => '?',
            'App\\Controller\\MultasController:new' => '?',
            'App\\Controller\\MultasController:view' => '?',
            'App\\Controller\\NocontestaController:index' => '?',
            'App\\Controller\\NocontestaController:show' => '?',
            'App\\Controller\\NocontrataController:index' => '?',
            'App\\Controller\\NocontrataController:show' => '?',
            'App\\Controller\\PagoCanalController:delete' => '?',
            'App\\Controller\\PagoCanalController:edit' => '?',
            'App\\Controller\\PagoCanalController:index' => '?',
            'App\\Controller\\PagoCanalController:show' => '?',
            'App\\Controller\\PagoController:cargarPagos' => '?',
            'App\\Controller\\PagoController:delete' => '?',
            'App\\Controller\\PagoController:detallepagos' => '?',
            'App\\Controller\\PagoController:edit' => '?',
            'App\\Controller\\PagoController:finalizado' => '?',
            'App\\Controller\\PagoController:generaCuotas' => '?',
            'App\\Controller\\PagoController:index' => '?',
            'App\\Controller\\PagoController:new' => '?',
            'App\\Controller\\PagoController:resumen' => '?',
            'App\\Controller\\PagoController:show' => '?',
            'App\\Controller\\PagoController:verpagos' => '?',
            'App\\Controller\\PagoController:verpagosShow' => '?',
            'App\\Controller\\PagoTipoController:delete' => '?',
            'App\\Controller\\PagoTipoController:edit' => '?',
            'App\\Controller\\PagoTipoController:index' => '?',
            'App\\Controller\\PagoTipoController:show' => '?',
            'App\\Controller\\PaisController:delete' => '?',
            'App\\Controller\\PaisController:edit' => '?',
            'App\\Controller\\PaisController:index' => '?',
            'App\\Controller\\PaisController:show' => '?',
            'App\\Controller\\PanelAbogadoController:contrata' => '?',
            'App\\Controller\\PanelAbogadoController:delRol' => '?',
            'App\\Controller\\PanelAbogadoController:index' => '?',
            'App\\Controller\\PanelAbogadoController:new' => '?',
            'App\\Controller\\PanelAbogadoController:newRol' => '?',
            'App\\Controller\\PanelAbogadoController:noContrata' => '?',
            'App\\Controller\\PanelAgendadorController:abogados' => '?',
            'App\\Controller\\PanelAgendadorController:calendario' => '?',
            'App\\Controller\\PanelAgendadorController:edit' => '?',
            'App\\Controller\\PanelAgendadorController:engestion' => '?',
            'App\\Controller\\PanelAgendadorController:hora' => '?',
            'App\\Controller\\PanelAgendadorController:index' => '?',
            'App\\Controller\\PanelAgendadorController:new' => '?',
            'App\\Controller\\PanelAgendadorController:reasignar' => '?',
            'App\\Controller\\PrivilegioController:delete' => '?',
            'App\\Controller\\PrivilegioController:edit' => '?',
            'App\\Controller\\PrivilegioController:index' => '?',
            'App\\Controller\\PrivilegioController:new' => '?',
            'App\\Controller\\PrivilegioController:regenerar' => '?',
            'App\\Controller\\PrivilegioController:show' => '?',
            'App\\Controller\\PrivilegioTipousuarioController:delete' => '?',
            'App\\Controller\\PrivilegioTipousuarioController:edit' => '?',
            'App\\Controller\\PrivilegioTipousuarioController:index' => '?',
            'App\\Controller\\PrivilegioTipousuarioController:new' => '?',
            'App\\Controller\\ReasignarController:index' => '?',
            'App\\Controller\\ReasignarController:show' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\ResumenController:abogados' => '?',
            'App\\Controller\\ResumenController:calendario' => '?',
            'App\\Controller\\ResumenController:edit' => '?',
            'App\\Controller\\ResumenController:engestion' => '?',
            'App\\Controller\\ResumenController:index' => '?',
            'App\\Controller\\ResumenController:new' => '?',
            'App\\Controller\\SucursalController:delete' => '?',
            'App\\Controller\\SucursalController:edit' => '?',
            'App\\Controller\\SucursalController:index' => '?',
            'App\\Controller\\SucursalController:new' => '?',
            'App\\Controller\\TerminosController:edit' => '?',
            'App\\Controller\\TerminosController:index' => '?',
            'App\\Controller\\TerminosController:pdf' => '?',
            'App\\Controller\\TerminosController:show' => '?',
            'App\\Controller\\TramitadoresController:delete' => '?',
            'App\\Controller\\TramitadoresController:edit' => '?',
            'App\\Controller\\TramitadoresController:index' => '?',
            'App\\Controller\\TramitadoresController:new' => '?',
            'App\\Controller\\TramitadoresController:restore' => '?',
            'App\\Controller\\TramitadoresController:show' => '?',
            'App\\Controller\\UsuarioCategoriaController:delete' => '?',
            'App\\Controller\\UsuarioCategoriaController:edit' => '?',
            'App\\Controller\\UsuarioCategoriaController:index' => '?',
            'App\\Controller\\UsuarioCategoriaController:new' => '?',
            'App\\Controller\\UsuarioCategoriaController:show' => '?',
            'App\\Controller\\UsuarioController:delete' => '?',
            'App\\Controller\\UsuarioController:edit' => '?',
            'App\\Controller\\UsuarioController:index' => '?',
            'App\\Controller\\UsuarioController:new' => '?',
            'App\\Controller\\UsuarioController:show' => '?',
            'App\\Controller\\UsuarioCuentaController:delete' => '?',
            'App\\Controller\\UsuarioCuentaController:edit' => '?',
            'App\\Controller\\UsuarioCuentaController:index' => '?',
            'App\\Controller\\UsuarioCuentaController:show' => '?',
            'App\\Controller\\UsuarioNoDisponibleController:delete' => '?',
            'App\\Controller\\UsuarioNoDisponibleController:edit' => '?',
            'App\\Controller\\UsuarioNoDisponibleController:index' => '?',
            'App\\Controller\\UsuarioNoDisponibleController:new' => '?',
            'App\\Controller\\UsuarioNoDisponibleController:show' => '?',
            'App\\Controller\\UsuarioStatusController:delete' => '?',
            'App\\Controller\\UsuarioStatusController:edit' => '?',
            'App\\Controller\\UsuarioStatusController:index' => '?',
            'App\\Controller\\UsuarioStatusController:show' => '?',
            'App\\Controller\\UsuarioTipoController:delete' => '?',
            'App\\Controller\\UsuarioTipoController:edit' => '?',
            'App\\Controller\\UsuarioTipoController:index' => '?',
            'App\\Controller\\UsuarioTipoController:new' => '?',
            'App\\Controller\\UsuarioTipoController:show' => '?',
            'App\\Controller\\VencimientoController:delete' => '?',
            'App\\Controller\\VencimientoController:edit' => '?',
            'App\\Controller\\VencimientoController:index' => '?',
            'App\\Controller\\VencimientoController:show' => '?',
            'App\\Controller\\WebhookController:index' => '?',
        ]));
    }

    /*
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('uwICCZI8bl', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->privates['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('HI-O1N7Y4W', 0, $this->getParameter('container.build_id'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ra59jhUj-F', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /*
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'doctrine.result_cache_pool', 7 => 'doctrine.system_cache_pool', 8 => 'cache.property_access', 9 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService());
        }, 2));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /*
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /*
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /*
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /*
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /*
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\AccionType', 1 => 'App\\Form\\AgendaType', 2 => 'App\\Form\\ChangePasswordFormType', 3 => 'App\\Form\\ClientePotencialType', 4 => 'App\\Form\\ConfiguracionType', 5 => 'App\\Form\\ContratoRolType', 6 => 'App\\Form\\ContratoType', 7 => 'App\\Form\\CuentaType', 8 => 'App\\Form\\CuotaType', 9 => 'App\\Form\\EmpresaType', 10 => 'App\\Form\\GestionarType', 11 => 'App\\Form\\ImportacionType', 12 => 'App\\Form\\MenuCabezeraType', 13 => 'App\\Form\\MenuType', 14 => 'App\\Form\\ModuloPerType', 15 => 'App\\Form\\ModuloType', 16 => 'App\\Form\\PagoCanalType', 17 => 'App\\Form\\PagoTipoType', 18 => 'App\\Form\\PagoType', 19 => 'App\\Form\\PaisType', 20 => 'App\\Form\\PrivilegioTipousuarioType', 21 => 'App\\Form\\PrivilegioType', 22 => 'App\\Form\\ResetPasswordRequestFormType', 23 => 'App\\Form\\SucursalType', 24 => 'App\\Form\\UsuarioCategoriaType', 25 => 'App\\Form\\UsuarioCuentaType', 26 => 'App\\Form\\UsuarioNoDisponibleType', 27 => 'App\\Form\\UsuarioStatusType', 28 => 'App\\Form\\UsuarioTipoType', 29 => 'App\\Form\\UsuarioType', 30 => 'App\\Form\\VencimientoType', 31 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 32 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 33 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 34 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:form');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:router');

        return $instance;
    }

    /*
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /*
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.prod.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ValidatorBuilder.php'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /*
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        $a = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'es', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleAwareListener.php'), 3 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php'), 4 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php'), 5 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php'), 6 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php'), 7 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php'), 8 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ValidatorBuilder.php'), 9 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php'), 10 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle\\src\\Helper\\Processor.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /*
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /*
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /*
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/prod'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false);
    }

    /*
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('kibKccai7I', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('nRt3Z5KR1g', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand();

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand();

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /*
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /*
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false);
    }

    /*
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\AccionType' => ['privates', 'App\\Form\\AccionType', 'getAccionTypeService', false],
            'App\\Form\\AgendaType' => ['privates', 'App\\Form\\AgendaType', 'getAgendaTypeService', false],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', false],
            'App\\Form\\ClientePotencialType' => ['privates', 'App\\Form\\ClientePotencialType', 'getClientePotencialTypeService', false],
            'App\\Form\\ConfiguracionType' => ['privates', 'App\\Form\\ConfiguracionType', 'getConfiguracionTypeService', false],
            'App\\Form\\ContratoRolType' => ['privates', 'App\\Form\\ContratoRolType', 'getContratoRolTypeService', false],
            'App\\Form\\ContratoType' => ['privates', 'App\\Form\\ContratoType', 'getContratoTypeService', false],
            'App\\Form\\CuentaType' => ['privates', 'App\\Form\\CuentaType', 'getCuentaTypeService', false],
            'App\\Form\\CuotaType' => ['privates', 'App\\Form\\CuotaType', 'getCuotaTypeService', false],
            'App\\Form\\EmpresaType' => ['privates', 'App\\Form\\EmpresaType', 'getEmpresaTypeService', false],
            'App\\Form\\GestionarType' => ['privates', 'App\\Form\\GestionarType', 'getGestionarTypeService', false],
            'App\\Form\\ImportacionType' => ['privates', 'App\\Form\\ImportacionType', 'getImportacionTypeService', false],
            'App\\Form\\MenuCabezeraType' => ['privates', 'App\\Form\\MenuCabezeraType', 'getMenuCabezeraTypeService', false],
            'App\\Form\\MenuType' => ['privates', 'App\\Form\\MenuType', 'getMenuTypeService', false],
            'App\\Form\\ModuloPerType' => ['privates', 'App\\Form\\ModuloPerType', 'getModuloPerTypeService', false],
            'App\\Form\\ModuloType' => ['privates', 'App\\Form\\ModuloType', 'getModuloTypeService', false],
            'App\\Form\\PagoCanalType' => ['privates', 'App\\Form\\PagoCanalType', 'getPagoCanalTypeService', false],
            'App\\Form\\PagoTipoType' => ['privates', 'App\\Form\\PagoTipoType', 'getPagoTipoTypeService', false],
            'App\\Form\\PagoType' => ['privates', 'App\\Form\\PagoType', 'getPagoTypeService', false],
            'App\\Form\\PaisType' => ['privates', 'App\\Form\\PaisType', 'getPaisTypeService', false],
            'App\\Form\\PrivilegioTipousuarioType' => ['privates', 'App\\Form\\PrivilegioTipousuarioType', 'getPrivilegioTipousuarioTypeService', false],
            'App\\Form\\PrivilegioType' => ['privates', 'App\\Form\\PrivilegioType', 'getPrivilegioTypeService', false],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', false],
            'App\\Form\\SucursalType' => ['privates', 'App\\Form\\SucursalType', 'getSucursalTypeService', false],
            'App\\Form\\UsuarioCategoriaType' => ['privates', 'App\\Form\\UsuarioCategoriaType', 'getUsuarioCategoriaTypeService', false],
            'App\\Form\\UsuarioCuentaType' => ['privates', 'App\\Form\\UsuarioCuentaType', 'getUsuarioCuentaTypeService', false],
            'App\\Form\\UsuarioNoDisponibleType' => ['privates', 'App\\Form\\UsuarioNoDisponibleType', 'getUsuarioNoDisponibleTypeService', false],
            'App\\Form\\UsuarioStatusType' => ['privates', 'App\\Form\\UsuarioStatusType', 'getUsuarioStatusTypeService', false],
            'App\\Form\\UsuarioTipoType' => ['privates', 'App\\Form\\UsuarioTipoType', 'getUsuarioTipoTypeService', false],
            'App\\Form\\UsuarioType' => ['privates', 'App\\Form\\UsuarioType', 'getUsuarioTypeService', false],
            'App\\Form\\VencimientoType' => ['privates', 'App\\Form\\VencimientoType', 'getVencimientoTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\Form\\AccionType' => '?',
            'App\\Form\\AgendaType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\ClientePotencialType' => '?',
            'App\\Form\\ConfiguracionType' => '?',
            'App\\Form\\ContratoRolType' => '?',
            'App\\Form\\ContratoType' => '?',
            'App\\Form\\CuentaType' => '?',
            'App\\Form\\CuotaType' => '?',
            'App\\Form\\EmpresaType' => '?',
            'App\\Form\\GestionarType' => '?',
            'App\\Form\\ImportacionType' => '?',
            'App\\Form\\MenuCabezeraType' => '?',
            'App\\Form\\MenuType' => '?',
            'App\\Form\\ModuloPerType' => '?',
            'App\\Form\\ModuloType' => '?',
            'App\\Form\\PagoCanalType' => '?',
            'App\\Form\\PagoTipoType' => '?',
            'App\\Form\\PagoType' => '?',
            'App\\Form\\PaisType' => '?',
            'App\\Form\\PrivilegioTipousuarioType' => '?',
            'App\\Form\\PrivilegioType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\SucursalType' => '?',
            'App\\Form\\UsuarioCategoriaType' => '?',
            'App\\Form\\UsuarioCuentaType' => '?',
            'App\\Form\\UsuarioNoDisponibleType' => '?',
            'App\\Form\\UsuarioStatusType' => '?',
            'App\\Form\\UsuarioTipoType' => '?',
            'App\\Form\\UsuarioType' => '?',
            'App\\Form\\VencimientoType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
    }

    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /*
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /*
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /*
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /*
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /*
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /*
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /*
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->privates['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(['defaultPaginationTemplate' => '@KnpPaginator/Pagination/sliding_ajax.html.twig', 'defaultSortableTemplate' => '@KnpPaginator/Pagination/sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 5, 'defaultPageLimit' => 100]);
    }

    /*
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->services['translator'] ?? $this->getTranslatorService());
        }, 1), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'es', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'mailer.mailer' shared service.
     *
     * @return \Symfony\Component\Mailer\Mailer
     */
    protected function getMailer_MailerService()
    {
        return $this->privates['mailer.mailer'] = new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () {
            yield 0 => ($this->privates['mailer.transport_factory.gmail'] ?? $this->getMailer_TransportFactory_GmailService());
            yield 1 => ($this->privates['mailer.transport_factory.sendgrid'] ?? $this->getMailer_TransportFactory_SendgridService());
            yield 2 => ($this->privates['mailer.transport_factory.null'] ?? $this->getMailer_TransportFactory_NullService());
            yield 3 => ($this->privates['mailer.transport_factory.sendmail'] ?? $this->getMailer_TransportFactory_SendmailService());
            yield 4 => ($this->privates['mailer.transport_factory.smtp'] ?? $this->getMailer_TransportFactory_SmtpService());
        }, 5)))->fromStrings(['main' => $this->getEnv('MAILER_DSN')]), NULL, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /*
     * Gets the private 'mailer.transport_factory.gmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory
     */
    protected function getMailer_TransportFactory_GmailService()
    {
        return $this->privates['mailer.transport_factory.gmail'] = new \Symfony\Component\Mailer\Bridge\Google\Transport\GmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    protected function getMailer_TransportFactory_NullService()
    {
        return $this->privates['mailer.transport_factory.null'] = new \Symfony\Component\Mailer\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'mailer.transport_factory.sendgrid' shared service.
     *
     * @return \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory
     */
    protected function getMailer_TransportFactory_SendgridService()
    {
        return $this->privates['mailer.transport_factory.sendgrid'] = new \Symfony\Component\Mailer\Bridge\Sendgrid\Transport\SendgridTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    protected function getMailer_TransportFactory_SendmailService()
    {
        return $this->privates['mailer.transport_factory.sendmail'] = new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'mailer.transport_factory.smtp' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory
     */
    protected function getMailer_TransportFactory_SmtpService()
    {
        return $this->privates['mailer.transport_factory.smtp'] = new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? $this->getCache_PropertyAccessService()), true);
    }

    /*
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), false);
    }

    /*
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())));
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()));
            yield 2 => ($this->privates['App\\Security\\Voter\\PrincipalVoter'] ?? ($this->privates['App\\Security\\Voter\\PrincipalVoter'] = new \App\Security\Voter\PrincipalVoter($this)));
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/dashboard');

        $instance->add($a, [0 => 'ROLE_ADMIN'], NULL);
        $instance->add($a, [0 => 'ROLE_USER'], NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /*
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);
        $a->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        $this->privates['security.authentication.listener.guard.main'] = $instance = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginAuthenticator'] ?? $this->getLoginAuthenticatorService());
        }, 1), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        $instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.listener.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\RememberMeListener
     */
    protected function getSecurity_Authentication_Listener_Rememberme_MainService()
    {
        return $this->privates['security.authentication.listener.rememberme.main'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), true, ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 1 => ($this->privates['security.authentication.provider.rememberme.main'] ?? $this->getSecurity_Authentication_Provider_Rememberme_MainService());
            yield 2 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 3), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\LoginAuthenticator'] ?? $this->getLoginAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService()), 'main', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /*
     * Gets the private 'security.authentication.provider.rememberme.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Rememberme_MainService()
    {
        return $this->privates['security.authentication.provider.rememberme.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider(($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), $this->getEnv('APP_SECRET'), 'main');
    }

    /*
     * Gets the private 'security.authentication.rememberme.services.simplehash.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices
     */
    protected function getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()
    {
        return $this->privates['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices([0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService())], $this->getEnv('APP_SECRET'), 'main', ['lifetime' => 604800, 'path' => '/', 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => NULL, 'httponly' => true, 'samesite' => 'lax', 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\Usuario']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /*
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        $this->privates['security.context_listener.0'] = $instance = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->getSecurity_User_Provider_Concrete_AppUserProviderService());
        }, 1), 'main', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);

        $instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /*
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\Usuario' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => 4, 3 => '2y']]]);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => NULL;
        }, 2)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL));
    }

    /*
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->services['router'] ?? $this->getRouterService());

        $c = new \Symfony\Component\Security\Http\HttpUtils($b, $b, '{^https?://%s$}i', '{^https://%s$}i');
        $d = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $c, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($c, '/'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'app_logout']);
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())));
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $d->addHandler(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()));

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.listener.rememberme.main'] ?? $this->getSecurity_Authentication_Listener_Rememberme_MainService());
            yield 4 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $c, 'main', ($this->privates['App\\Security\\LoginAuthenticator'] ?? $this->getLoginAuthenticatorService()), NULL, NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false), $d, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.app_user_provider', 'main', 'App\\Security\\LoginAuthenticator', NULL, NULL, [0 => 'guard', 1 => 'remember_me', 2 => 'anonymous'], NULL), ($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'app_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.user.provider.concrete.app_user_provider' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AppUserProviderService()
    {
        return $this->privates['security.user.provider.concrete.app_user_provider'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\Usuario', 'username', NULL);
    }

    /*
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->privates['security.user_value_resolver'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /*
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), NULL), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), NULL, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), new \Symfony\Component\Security\Core\Role\RoleHierarchy([]), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /*
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /*
     * Gets the private 'swiftmailer.command.debug' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand
     */
    protected function getSwiftmailer_Command_DebugService()
    {
        $this->privates['swiftmailer.command.debug'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand();

        $instance->setName('debug:swiftmailer');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.command.new_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    protected function getSwiftmailer_Command_NewEmailService()
    {
        $this->privates['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.command.send_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand
     */
    protected function getSwiftmailer_Command_SendEmailService()
    {
        $this->privates['swiftmailer.command.send_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand();

        $instance->setName('swiftmailer:spool:send');

        return $instance;
    }

    /*
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /*
     * Gets the private 'symfonycasts.reset_password.cleaner' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner
     */
    protected function getSymfonycasts_ResetPassword_CleanerService()
    {
        return $this->privates['symfonycasts.reset_password.cleaner'] = new \SymfonyCasts\Bundle\ResetPassword\Util\ResetPasswordCleaner(($this->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $this->getResetPasswordRequestRepositoryService()), true);
    }

    /*
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /*
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /*
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /*
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

        $instance->setName('debug:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /*
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /*
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false));
    }

    /*
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /*
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), [(\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        if ($this->has('translator')) {
            $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        }
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService())));
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /*
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /*
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /*
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(NULL, 'UTF-8', true, NULL);
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'\\log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'SymfonyCastsResetPasswordBundle' => 'SymfonyCasts\\Bundle\\ResetPassword\\SymfonyCastsResetPasswordBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'KnpSnappyBundle' => 'Knp\\Bundle\\SnappyBundle\\KnpSnappyBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'SymfonyCastsResetPasswordBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfonycasts\\reset-password-bundle\\src'),
                    'namespace' => 'SymfonyCasts\\Bundle\\ResetPassword',
                ],
                'KnpPaginatorBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\knplabs\\knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ],
                'KnpSnappyBundle' => [
                    'path' => 'D:/htdocs/desarrollos_symfony/micrm/crm v.2/vendor/knplabs/knp-snappy-bundle/src',
                    'namespace' => 'Knp\\Bundle\\SnappyBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'App_KernelProdContainer',
            'container.dumper.inline_class_loader' => false,
            'container.dumper.inline_factories' => true,
            'url_root' => (\dirname(__DIR__, 4).'/public'),
            'url_web' => 'http://crmtest.fuica.cl',
            'pdf_contratos' => '/build/contratos/pdf/',
            'logos_empresa' => (\dirname(__DIR__, 4).'/public/build/img/empresas/'),
            'csv_importacion' => (\dirname(__DIR__, 4).'/public/build/csv/'),
            'img_pagos' => '/build/contratos/pagos/',
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'es',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.migrations_paths' => [

            ],
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'knp_paginator.template.pagination' => '@KnpPaginator/Pagination/sliding_ajax.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => '@KnpPaginator/Pagination/sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'knp_paginator.page_limit' => 100,
            'knp_snappy.pdf.binary' => '"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe"',
            'knp_snappy.pdf.options' => [

            ],
            'knp_snappy.pdf.env' => [

            ],
            'knp_snappy.image.binary' => 'wkhtmltoimage',
            'knp_snappy.image.options' => [

            ],
            'knp_snappy.image.env' => [

            ],
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'console.command.ids' => [

            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
