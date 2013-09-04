<?php

namespace Proxies\__CG__\MyApp\ApBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Comptabilite extends \MyApp\ApBundle\Entity\Comptabilite implements \Doctrine\ORM\Proxy\Proxy
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

    public function setMontant($montant)
    {
        $this->__load();
        return parent::setMontant($montant);
    }

    public function getMontant()
    {
        $this->__load();
        return parent::getMontant();
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

    public function setType(\MyApp\ApBundle\Entity\Type $type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setCreated($created)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setUpdated($updated)
    {
        $this->__load();
        return parent::setUpdated($updated);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function setPaiement($paiement)
    {
        $this->__load();
        return parent::setPaiement($paiement);
    }

    public function getPaiement()
    {
        $this->__load();
        return parent::getPaiement();
    }

    public function setUser($user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setBilan($bilan)
    {
        $this->__load();
        return parent::setBilan($bilan);
    }

    public function getBilan()
    {
        $this->__load();
        return parent::getBilan();
    }

    public function setNote($note)
    {
        $this->__load();
        return parent::setNote($note);
    }

    public function getNote()
    {
        $this->__load();
        return parent::getNote();
    }

    public function setDateTable(\MyApp\ApBundle\Entity\DateTable $dateTable)
    {
        $this->__load();
        return parent::setDateTable($dateTable);
    }

    public function getDateTable()
    {
        $this->__load();
        return parent::getDateTable();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'montant', 'paiement', 'bilan', 'note', 'date', 'created', 'updated', 'user', 'type', 'dateTable', 'production');
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