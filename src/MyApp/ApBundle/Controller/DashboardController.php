<?php

namespace MyApp\ApBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DashboardController extends ContainerAware
{
    public function voirAction() 
     {   
        return $this->container->get('templating')->renderResponse('MyAppApBundle:Dashboard:lister.html.twig');
     }
        
public function nbEstimationAction()
{   
                $user = $this->container->get('security.context')->getToken()->getUsername();
  $nbEstimation = $this->container->get('doctrine.orm.entity_manager')
                         ->getRepository('MyAppApBundle:ClientService')
                         ->getAllEstimationsFranchiseCount($user);

        return $this->container->get('templating')->renderResponse('MyAppApBundle:Dashboard:nbEstimation.html.twig', 
  array(
                'nbEstimation' => $nbEstimation,
                'user' => $user,
  ));
}  
         

    public function nbContratAction()
     {
        $em = $this->container->get('doctrine')->getEntityManager();
        $username = $this->container->get('security.context')->getToken()->getUsername();
        
       //Query nombre de $ signés par user par an
                $qb = $em->createQueryBuilder();
                $qb ->select('COUNT(a.prix)')
                  ->from('MyAppApBundle:ClientService', 'a')
                  ->join('a.client', 's')
                  ->join('s.contrat', 'c')
                  ->where("s.user LIKE :username ")
                  ->andWhere("c.contratEstimation LIKE :Contrat")
                  ->setParameters(array('username' => $username,'Contrat' => 'Contrat'));
        $query = $qb->getQuery();               
        $nbDollarContrats = $query->getResult();

        
        return $this->container->get('templating')->renderResponse('MyAppApBundle:Dashboard:nbContrat.html.twig', 
	array(
                'nbDollarContrats' => $nbDollarContrats,
                            'username' => $username,

 	));
         }
public function nbClientAction()
     {   
                $user = $this->container->get('security.context')->getToken()->getUsername();
  $nbClient = $this->container->get('doctrine.orm.entity_manager')
                         ->getRepository('MyAppApBundle:Client')
                         ->getAllClientsByFranchiseCount($user);

$nbClientWeek = $this->container->get('doctrine.orm.entity_manager')
                         ->getRepository('MyAppApBundle:Client')
                         ->getAllClientsByFranchiseCountWeek($user);

$nbClientMonth = $this->container->get('doctrine.orm.entity_manager')
                         ->getRepository('MyAppApBundle:Client')
                         ->getAllClientsByFranchiseCountMonth($user);
        return $this->container->get('templating')->renderResponse('MyAppApBundle:Dashboard:nbClient.html.twig', 
	array(
                'nbClient' => $nbClient,
                'nbClientWeek' => $nbClientWeek,
                'nbClientMonth' => $nbClientMonth,
                'user' => $user,
 	));
}   

public function produitUtilisateurAction()
     {   
          $em = $this->container->get('doctrine')->getEntityManager();
                $username = $this->container->get('security.context')->getToken()->getUsername();

                $qb = $em->createQueryBuilder();
                $qb ->select('sum (a.prix)')
                  ->from('MyAppApBundle:ClientService', 'a')
                  ->join('a.client', 's')
                  ->join('s.contrat', 'c')
                  ->join('c.production', 'p')
                  ->where("s.user LIKE :username ")
                  ->andWhere("p.statut LIKE :Termine")
                  ->setParameters(array('username' => $username,'Termine' => 'Terminé'));
        $query = $qb->getQuery();               
        $nbDollarProduit = $query->getResult();
        
                     $qbcount = $em->createQueryBuilder();
                $qbcount ->select('COUNT (a.prix)')
                  ->from('MyAppApBundle:ClientService', 'a')
                  ->join('a.client', 's')
                  ->join('s.contrat', 'c')
                  ->join('c.production', 'p')
                  ->where("s.user LIKE :username ")
                  ->andWhere("p.statut LIKE :Termine")
                  ->setParameters(array('username' => $username,'Termine' => 'Terminé'));
        $querycount = $qbcount->getQuery();               
        $nbProduit = $querycount->getResult();

        return $this->container->get('templating')->renderResponse('MyAppApBundle:Dashboard:produitUtilisateur.html.twig', 
	array(
                'nbDollarProduit' => $nbDollarProduit,
                'nbProduit' => $nbProduit,
                'username' => $username,
 	));
    }    
   public function produitUtilisateurSemaineAction()
     {   
        
       //Query nombre de $ prosuit par user par semaine prend -7 jours mais pas la semaine...
                $em = $this->container->get('doctrine')->getEntityManager();
                $username = $this->container->get('security.context')->getToken()->getUsername();
                
                $qb = $em->createQueryBuilder();
                $qb ->select('sum (a.prix)')
                  ->from('MyAppApBundle:ClientService', 'a')
                  ->join('a.client', 's')
                  ->join('s.contrat', 'c')
                  ->join('c.production', 'p')
                  ->where("s.user LIKE :username ")
                  ->andWhere("p.statut LIKE :Termine")
                  ->andWhere ("p.created >= :date")
                  ->setParameters(array(
                      'username' => $username,
                      'Termine' => 'Terminé',
                      'date' =>new \DateTime('-1 week')
                      ));
        $query = $qb->getQuery();               
        $nbDollarProduitSemaine = $query->getResult();

        return $this->container->get('templating')->renderResponse('MyAppApBundle:Dashboard:produitUtilisateurSemaine.html.twig', 
	array(
                'nbDollarProduitSemaine' => $nbDollarProduitSemaine,
                'username' => $username,
 	));
    }    
}