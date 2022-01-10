<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Attribute\Key\Settings;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ImageFileSettings extends \Concrete\Core\Entity\Attribute\Key\Settings\ImageFileSettings implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', 'akFileManagerMode', 'key'];
        }

        return ['__isInitialized__', 'akFileManagerMode', 'key'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ImageFileSettings $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMode', []);

        return parent::getMode();
    }

    /**
     * {@inheritDoc}
     */
    public function isModeFileManager()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isModeFileManager', []);

        return parent::isModeFileManager();
    }

    /**
     * {@inheritDoc}
     */
    public function isModeHtmlInput()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isModeHtmlInput', []);

        return parent::isModeHtmlInput();
    }

    /**
     * {@inheritDoc}
     */
    public function setModeToFileManager()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModeToFileManager', []);

        return parent::setModeToFileManager();
    }

    /**
     * {@inheritDoc}
     */
    public function setModeToHtmlInput()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModeToHtmlInput', []);

        return parent::setModeToHtmlInput();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKey', []);

        return parent::getAttributeKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeKey($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeKey', [$key]);

        return parent::setAttributeKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeType', []);

        return parent::getAttributeType();
    }

    /**
     * {@inheritDoc}
     */
    public function mergeAndPersist(\Doctrine\ORM\EntityManagerInterface $entityManager)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'mergeAndPersist', [$entityManager]);

        return parent::mergeAndPersist($entityManager);
    }

    /**
     * {@inheritDoc}
     */
    public function createController()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createController', []);

        return parent::createController();
    }

    /**
     * {@inheritDoc}
     */
    public function getController()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getController', []);

        return parent::getController();
    }

}
