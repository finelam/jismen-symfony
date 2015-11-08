<?php

namespace ClientsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function headerAction(){
      $em           = $this->get('doctrine')->getManager();
      $repoCategory = $em->getRepository('AppBundle:Category');
      $categories   = $repoCategory->findAll();
      return $this->render('ClientsBundle:Default:header.html.twig', array('categories' => $categories));
    }

    public function indexAction()
    {
        return $this->render('ClientsBundle:Default:index.html.twig');
    }
}
