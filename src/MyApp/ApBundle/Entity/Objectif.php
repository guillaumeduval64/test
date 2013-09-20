<?php
namespace MyApp\ApBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="ObjectifRepository")
 */
class Objectif
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
     /**
     * @ORM\Column(type="string",length=255)
     */    
    private $montant;

    /**
     * @ORM\Column(type="string",length=255)
     */    
    private $année;
    
     /**
     * @ORM\OneToOne(targetEntity="MyApp\UtilisateurBundle\Entity\Utilisateur", cascade={"remove", "persist"})
     */    
    private $utilisateur;

     /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;
    
    public function __construct()
    {
        $this->titles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Objectif
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Objectif
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Objectif
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set utilisateur
     *
     * @param \MyApp\UtilisateurBundle\Entity\Utilisateur $utilisateur
     * @return Objectif
     */
    public function setUtilisateur(\MyApp\UtilisateurBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;
    
        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \MyApp\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set année
     *
     * @param string $année
     * @return Objectif
     */
    public function setAnnée($année)
    {
        $this->année = $année;
    
        return $this;
    }

    /**
     * Get année
     *
     * @return string 
     */
    public function getAnnée()
    {
        return $this->année;
    }
}