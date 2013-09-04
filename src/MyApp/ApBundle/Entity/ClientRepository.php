<?php

namespace MyApp\ApBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends EntityRepository
{
    
  public function getAllClientsByFranchise($user)
  {
 
$qb = $this->createQueryBuilder('a')
                  ->join('a.city', 'c')           
                  ->where("a.user LIKE :user ")
                  ->setParameter('user', $user)    
                  ->orderBy('a.id', 'DESC');
    return $qb->getQuery()
              ->getResult();
  }

      public function myFindNextClient()
    {
$qb = $this ->_em->createQueryBuilder();
    $qb->select('a')
     ->from('MyAppApBundle:Client', 'a');
 
    return $qb->getQuery()
              ->getResult();
    }
    public function myFindNextClientEtat($etat)
    {
$qb = $this->createQueryBuilder('a');
    $qb->where('a.etat = :etat')
      ->setParameter('etat', $etat);

 
    return $qb->getQuery()
              ->getResult();
    }
}



