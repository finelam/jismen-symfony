<?php

namespace ClientsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ClientsBundle:Default:index.html.twig', array('name' => $name));
    }
}
