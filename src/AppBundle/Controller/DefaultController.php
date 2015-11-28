<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * DefaultController
 *
 */
Class DefaultController extends Controller
{
    /**
     *
     */
    public function indexAction(){
        return $this->render('AppBundle:Default:index.html.twig');
    }
}
