<?php

namespace Proxies\__CG__\MyApp\ApBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ClientService extends \MyApp\ApBundle\Entity\ClientService implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getServiceCreated()
    {
        $this->__load();
        return parent::getServiceCreated();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setPrix($prix)
    {
        $this->__load();
        return parent::setPrix($prix);
    }

    public function getPrix()
    {
        $this->__load();
        return parent::getPrix();
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

    public function setClient(\MyApp\ApBundle\Entity\Client $client)
    {
        $this->__load();
        return parent::setClient($client);
    }

    public function getClient()
    {
        $this->__load();
        return parent::getClient();
    }

    public function setService(\MyApp\ApBundle\Entity\Service $service)
    {
        $this->__load();
        return parent::setService($service);
    }

    public function getService()
    {
        $this->__load();
        return parent::getService();
    }

    public function addContrat(\MyApp\ApBundle\Entity\Contrat $contrat)
    {
        $this->__load();
        return parent::addContrat($contrat);
    }

    public function getContrat()
    {
        $this->__load();
        return parent::getContrat();
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

    public function setImage(\MyApp\ApBundle\Entity\Image $image = NULL)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'prix', 'note', 'created', 'updated', 'client', 'dateTable', 'service', 'image');
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