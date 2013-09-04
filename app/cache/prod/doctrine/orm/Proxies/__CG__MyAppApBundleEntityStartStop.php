<?php

namespace Proxies\__CG__\MyApp\ApBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class StartStop extends \MyApp\ApBundle\Entity\StartStop implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setHeureD($heureD)
    {
        $this->__load();
        return parent::setHeureD($heureD);
    }

    public function getHeureD()
    {
        $this->__load();
        return parent::getHeureD();
    }

    public function setHeureF($heureF)
    {
        $this->__load();
        return parent::setHeureF($heureF);
    }

    public function getHeureF()
    {
        $this->__load();
        return parent::getHeureF();
    }

    public function setProduction(\MyApp\ApBundle\Entity\Production $production)
    {
        $this->__load();
        return parent::setProduction($production);
    }

    public function getProduction()
    {
        $this->__load();
        return parent::getProduction();
    }

    public function addTravailleur(\MyApp\ApBundle\Entity\Travailleur $travailleur)
    {
        $this->__load();
        return parent::addTravailleur($travailleur);
    }

    public function getTravailleur()
    {
        $this->__load();
        return parent::getTravailleur();
    }

    public function removeTravailleur(\MyApp\ApBundle\Entity\Travailleur $travailleur)
    {
        $this->__load();
        return parent::removeTravailleur($travailleur);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'heureD', 'heureF', 'production', 'travailleur');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}