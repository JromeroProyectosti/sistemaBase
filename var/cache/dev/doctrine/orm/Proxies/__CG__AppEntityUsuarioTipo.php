<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UsuarioTipo extends \App\Entity\UsuarioTipo implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'id', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'orden', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'usuarios', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'privilegioTipousuarios', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'fijar', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'nombreInterno', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'menuCabezera', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'empresa', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'statues'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'id', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'orden', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'usuarios', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'privilegioTipousuarios', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'fijar', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'nombreInterno', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'menuCabezera', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'empresa', '' . "\0" . 'App\\Entity\\UsuarioTipo' . "\0" . 'statues'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UsuarioTipo $proxy) {
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
    public function setNombre(string $nombre): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrden(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrden', []);

        return parent::getOrden();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrden(?int $orden): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrden', [$orden]);

        return parent::setOrden($orden);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarios(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarios', []);

        return parent::getUsuarios();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsuario(\App\Entity\Usuario $usuario): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuario', [$usuario]);

        return parent::addUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuario(\App\Entity\Usuario $usuario): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuario', [$usuario]);

        return parent::removeUsuario($usuario);
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
    public function getPrivilegioTipousuarios(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivilegioTipousuarios', []);

        return parent::getPrivilegioTipousuarios();
    }

    /**
     * {@inheritDoc}
     */
    public function addPrivilegioTipousuario(\App\Entity\PrivilegioTipousuario $privilegioTipousuario): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPrivilegioTipousuario', [$privilegioTipousuario]);

        return parent::addPrivilegioTipousuario($privilegioTipousuario);
    }

    /**
     * {@inheritDoc}
     */
    public function removePrivilegioTipousuario(\App\Entity\PrivilegioTipousuario $privilegioTipousuario): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePrivilegioTipousuario', [$privilegioTipousuario]);

        return parent::removePrivilegioTipousuario($privilegioTipousuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getFijar(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFijar', []);

        return parent::getFijar();
    }

    /**
     * {@inheritDoc}
     */
    public function setFijar(bool $fijar): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFijar', [$fijar]);

        return parent::setFijar($fijar);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreInterno(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreInterno', []);

        return parent::getNombreInterno();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreInterno(string $nombreInterno): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreInterno', [$nombreInterno]);

        return parent::setNombreInterno($nombreInterno);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuCabezera(): ?\App\Entity\MenuCabezera
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuCabezera', []);

        return parent::getMenuCabezera();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuCabezera(?\App\Entity\MenuCabezera $menuCabezera): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuCabezera', [$menuCabezera]);

        return parent::setMenuCabezera($menuCabezera);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpresa(): ?\App\Entity\Empresa
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpresa', []);

        return parent::getEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpresa(?\App\Entity\Empresa $empresa): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpresa', [$empresa]);

        return parent::setEmpresa($empresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatues(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatues', []);

        return parent::getStatues();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatues(?array $statues): \App\Entity\UsuarioTipo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatues', [$statues]);

        return parent::setStatues($statues);
    }

}