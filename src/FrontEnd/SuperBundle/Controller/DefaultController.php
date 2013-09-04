<?php

namespace FrontEnd\SuperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontEndSuperBundle:Default:index.html.twig');
    }
}
