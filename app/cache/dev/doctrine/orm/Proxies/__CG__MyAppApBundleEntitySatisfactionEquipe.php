<?php

namespace Proxies\__CG__\MyApp\ApBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SatisfactionEquipe extends \MyApp\ApBundle\Entity\SatisfactionEquipe implements \Doctrine\ORM\Proxy\Proxy
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

    public function setReponse($reponse)
    {
        $this->__load();
        return parent::setReponse($reponse);
    }

    public function getReponse()
    {
        $this->__load();
        return parent::getReponse();
    }

    public function setCourtoisie($courtoisie)
    {
        $this->__load();
        return parent::setCourtoisie($courtoisie);
    }

    public function getCourtoisie()
    {
        $this->__load();
        return parent::getCourtoisie();
    }

    public function setQualite($qualite)
    {
        $this->__load();
        return parent::setQualite($qualite);
    }

    public function getQualite()
    {
        $this->__load();
        return parent::getQualite();
    }

    public function setGrade($grade)
    {
        $this->__load();
        return parent::setGrade($grade);
    }

    public function getGrade()
    {
        $this->__load();
        return parent::getGrade();
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

    public function setQuestion($question)
    {
        $this->__load();
        return parent::setQuestion($question);
    }

    public function getQuestion()
    {
        $this->__load();
        return parent::getQuestion();
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

    public function setAppel($appel)
    {
        $this->__load();
        return parent::setAppel($appel);
    }

    public function getAppel()
    {
        $this->__load();
        return parent::getAppel();
    }

    public function setEquipe($equipe)
    {
        $this->__load();
        return parent::setEquipe($equipe);
    }

    public function getEquipe()
    {
        $this->__load();
        return parent::getEquipe();
    }

    public function setService($service)
    {
        $this->__load();
        return parent::setService($service);
    }

    public function getService()
    {
        $this->__load();
        return parent::getService();
    }

    public function setPeinture($peinture)
    {
        $this->__load();
        return parent::setPeinture($peinture);
    }

    public function getPeinture()
    {
        $this->__load();
        return parent::getPeinture();
    }

    public function setSympathie($sympathie)
    {
        $this->__load();
        return parent::setSympathie($sympathie);
    }

    public function getSympathie()
    {
        $this->__load();
        return parent::getSympathie();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function setDifficulte($difficulte)
    {
        $this->__load();
        return parent::setDifficulte($difficulte);
    }

    public function getDifficulte()
    {
        $this->__load();
        return parent::getDifficulte();
    }

    public function addParticularite(\MyApp\ApBundle\Entity\Particularite $particularite)
    {
        $this->__load();
        return parent::addParticularite($particularite);
    }

    public function getParticularite()
    {
        $this->__load();
        return parent::getParticularite();
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

    public function removeParticularite(\MyApp\ApBundle\Entity\Particularite $particularite)
    {
        $this->__load();
        return parent::removeParticularite($particularite);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'user', 'difficulte', 'sympathie', 'notes', 'created', 'updated', 'dateTable', 'particularite');
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