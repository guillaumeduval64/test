<?php

namespace Proxies\__CG__\MyApp\ApBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Image extends \MyApp\ApBundle\Entity\Image implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function setFile($file)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setAlt($alt)
    {
        $this->__load();
        return parent::setAlt($alt);
    }

    public function getAlt()
    {
        $this->__load();
        return parent::getAlt();
    }

    public function preUpload()
    {
        $this->__load();
        return parent::preUpload();
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function preRemoveUpload()
    {
        $this->__load();
        return parent::preRemoveUpload();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }

    public function getUploadDir()
    {
        $this->__load();
        return parent::getUploadDir();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'url', 'alt');
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