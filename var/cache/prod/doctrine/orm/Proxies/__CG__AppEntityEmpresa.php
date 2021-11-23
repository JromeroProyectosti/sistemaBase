<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Empresa extends \App\Entity\Empresa implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'rol', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'rut', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'logo', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'fechaIngreso', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'fechaUltimamodificacion', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'fechaVigencia', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'cuentas', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'modulos', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'acciones', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'menus', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'logoAlt', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'moduloPers', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'menuCabezeras', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'usuarioTipos', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'usuarioCategorias', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'estadoCivils', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'situacionLaborals', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'estrategiaJuridicas', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'escrituras', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'juzgados', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'reunions', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'pais', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'contratoViviendas', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'contratoVehiculos'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'rol', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'rut', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'logo', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'fechaIngreso', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'fechaUltimamodificacion', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'fechaVigencia', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'cuentas', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'modulos', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'acciones', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'menus', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'logoAlt', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'moduloPers', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'menuCabezeras', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'usuarioTipos', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'usuarioCategorias', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'estadoCivils', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'situacionLaborals', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'estrategiaJuridicas', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'escrituras', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'juzgados', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'reunions', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'pais', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'contratoViviendas', '' . "\0" . 'App\\Entity\\Empresa' . "\0" . 'contratoVehiculos'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Empresa $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(string $nombre): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getRol(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRol', []);

        return parent::getRol();
    }

    /**
     * {@inheritDoc}
     */
    public function setRol(?string $rol): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRol', [$rol]);

        return parent::setRol($rol);
    }

    /**
     * {@inheritDoc}
     */
    public function getRut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRut', []);

        return parent::getRut();
    }

    /**
     * {@inheritDoc}
     */
    public function setRut(string $rut): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRut', [$rut]);

        return parent::setRut($rut);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo(?string $logo): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$logo]);

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaIngreso(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaIngreso', []);

        return parent::getFechaIngreso();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaIngreso(\DateTimeInterface $fechaIngreso): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaIngreso', [$fechaIngreso]);

        return parent::setFechaIngreso($fechaIngreso);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaUltimamodificacion(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaUltimamodificacion', []);

        return parent::getFechaUltimamodificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaUltimamodificacion(?\DateTimeInterface $fechaUltimamodificacion): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaUltimamodificacion', [$fechaUltimamodificacion]);

        return parent::setFechaUltimamodificacion($fechaUltimamodificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaVigencia(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaVigencia', []);

        return parent::getFechaVigencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaVigencia(\DateTimeInterface $fechaVigencia): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaVigencia', [$fechaVigencia]);

        return parent::setFechaVigencia($fechaVigencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getCuentas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCuentas', []);

        return parent::getCuentas();
    }

    /**
     * {@inheritDoc}
     */
    public function addCuenta(\App\Entity\Cuenta $cuenta): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCuenta', [$cuenta]);

        return parent::addCuenta($cuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCuenta(\App\Entity\Cuenta $cuenta): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCuenta', [$cuenta]);

        return parent::removeCuenta($cuenta);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getAcciones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcciones', []);

        return parent::getAcciones();
    }

    /**
     * {@inheritDoc}
     */
    public function addAccione(\App\Entity\Accion $accione): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAccione', [$accione]);

        return parent::addAccione($accione);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAccione(\App\Entity\Accion $accione): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAccione', [$accione]);

        return parent::removeAccione($accione);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenus(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenus', []);

        return parent::getMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function addMenu(\App\Entity\Menu $menu): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMenu', [$menu]);

        return parent::addMenu($menu);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMenu(\App\Entity\Menu $menu): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMenu', [$menu]);

        return parent::removeMenu($menu);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoAlt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoAlt', []);

        return parent::getLogoAlt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoAlt(?string $logoAlt): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoAlt', [$logoAlt]);

        return parent::setLogoAlt($logoAlt);
    }

    /**
     * {@inheritDoc}
     */
    public function getModuloPers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModuloPers', []);

        return parent::getModuloPers();
    }

    /**
     * {@inheritDoc}
     */
    public function addModuloPer(\App\Entity\ModuloPer $moduloPer): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addModuloPer', [$moduloPer]);

        return parent::addModuloPer($moduloPer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeModuloPer(\App\Entity\ModuloPer $moduloPer): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeModuloPer', [$moduloPer]);

        return parent::removeModuloPer($moduloPer);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuCabezeras(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuCabezeras', []);

        return parent::getMenuCabezeras();
    }

    /**
     * {@inheritDoc}
     */
    public function addMenuCabezera(\App\Entity\MenuCabezera $menuCabezera): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMenuCabezera', [$menuCabezera]);

        return parent::addMenuCabezera($menuCabezera);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMenuCabezera(\App\Entity\MenuCabezera $menuCabezera): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMenuCabezera', [$menuCabezera]);

        return parent::removeMenuCabezera($menuCabezera);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioTipos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioTipos', []);

        return parent::getUsuarioTipos();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsuarioTipo(\App\Entity\UsuarioTipo $usuarioTipo): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuarioTipo', [$usuarioTipo]);

        return parent::addUsuarioTipo($usuarioTipo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuarioTipo(\App\Entity\UsuarioTipo $usuarioTipo): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuarioTipo', [$usuarioTipo]);

        return parent::removeUsuarioTipo($usuarioTipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioCategorias(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioCategorias', []);

        return parent::getUsuarioCategorias();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsuarioCategoria(\App\Entity\UsuarioCategoria $usuarioCategoria): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuarioCategoria', [$usuarioCategoria]);

        return parent::addUsuarioCategoria($usuarioCategoria);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuarioCategoria(\App\Entity\UsuarioCategoria $usuarioCategoria): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuarioCategoria', [$usuarioCategoria]);

        return parent::removeUsuarioCategoria($usuarioCategoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstadoCivils(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstadoCivils', []);

        return parent::getEstadoCivils();
    }

    /**
     * {@inheritDoc}
     */
    public function addEstadoCivil(\App\Entity\EstadoCivil $estadoCivil): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEstadoCivil', [$estadoCivil]);

        return parent::addEstadoCivil($estadoCivil);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEstadoCivil(\App\Entity\EstadoCivil $estadoCivil): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEstadoCivil', [$estadoCivil]);

        return parent::removeEstadoCivil($estadoCivil);
    }

    /**
     * {@inheritDoc}
     */
    public function getSituacionLaborals(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSituacionLaborals', []);

        return parent::getSituacionLaborals();
    }

    /**
     * {@inheritDoc}
     */
    public function addSituacionLaboral(\App\Entity\SituacionLaboral $situacionLaboral): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSituacionLaboral', [$situacionLaboral]);

        return parent::addSituacionLaboral($situacionLaboral);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSituacionLaboral(\App\Entity\SituacionLaboral $situacionLaboral): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSituacionLaboral', [$situacionLaboral]);

        return parent::removeSituacionLaboral($situacionLaboral);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstrategiaJuridicas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstrategiaJuridicas', []);

        return parent::getEstrategiaJuridicas();
    }

    /**
     * {@inheritDoc}
     */
    public function addEstrategiaJuridica(\App\Entity\EstrategiaJuridica $estrategiaJuridica): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEstrategiaJuridica', [$estrategiaJuridica]);

        return parent::addEstrategiaJuridica($estrategiaJuridica);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEstrategiaJuridica(\App\Entity\EstrategiaJuridica $estrategiaJuridica): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEstrategiaJuridica', [$estrategiaJuridica]);

        return parent::removeEstrategiaJuridica($estrategiaJuridica);
    }

    /**
     * {@inheritDoc}
     */
    public function getEscrituras(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEscrituras', []);

        return parent::getEscrituras();
    }

    /**
     * {@inheritDoc}
     */
    public function addEscritura(\App\Entity\Escritura $escritura): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEscritura', [$escritura]);

        return parent::addEscritura($escritura);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEscritura(\App\Entity\Escritura $escritura): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEscritura', [$escritura]);

        return parent::removeEscritura($escritura);
    }

    /**
     * {@inheritDoc}
     */
    public function getJuzgados(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJuzgados', []);

        return parent::getJuzgados();
    }

    /**
     * {@inheritDoc}
     */
    public function addJuzgado(\App\Entity\Juzgado $juzgado): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJuzgado', [$juzgado]);

        return parent::addJuzgado($juzgado);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJuzgado(\App\Entity\Juzgado $juzgado): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJuzgado', [$juzgado]);

        return parent::removeJuzgado($juzgado);
    }

    /**
     * {@inheritDoc}
     */
    public function getReunions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReunions', []);

        return parent::getReunions();
    }

    /**
     * {@inheritDoc}
     */
    public function addReunion(\App\Entity\Reunion $reunion): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReunion', [$reunion]);

        return parent::addReunion($reunion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReunion(\App\Entity\Reunion $reunion): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReunion', [$reunion]);

        return parent::removeReunion($reunion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPais(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPais', []);

        return parent::getPais();
    }

    /**
     * {@inheritDoc}
     */
    public function addPai(\App\Entity\Pais $pai): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPai', [$pai]);

        return parent::addPai($pai);
    }

    /**
     * {@inheritDoc}
     */
    public function removePai(\App\Entity\Pais $pai): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePai', [$pai]);

        return parent::removePai($pai);
    }

    /**
     * {@inheritDoc}
     */
    public function getContratoViviendas(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContratoViviendas', []);

        return parent::getContratoViviendas();
    }

    /**
     * {@inheritDoc}
     */
    public function addContratoVivienda(\App\Entity\ContratoVivienda $contratoVivienda): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContratoVivienda', [$contratoVivienda]);

        return parent::addContratoVivienda($contratoVivienda);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContratoVivienda(\App\Entity\ContratoVivienda $contratoVivienda): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContratoVivienda', [$contratoVivienda]);

        return parent::removeContratoVivienda($contratoVivienda);
    }

    /**
     * {@inheritDoc}
     */
    public function getContratoVehiculos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContratoVehiculos', []);

        return parent::getContratoVehiculos();
    }

    /**
     * {@inheritDoc}
     */
    public function addContratoVehiculo(\App\Entity\ContratoVehiculo $contratoVehiculo): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContratoVehiculo', [$contratoVehiculo]);

        return parent::addContratoVehiculo($contratoVehiculo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContratoVehiculo(\App\Entity\ContratoVehiculo $contratoVehiculo): \App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContratoVehiculo', [$contratoVehiculo]);

        return parent::removeContratoVehiculo($contratoVehiculo);
    }

}