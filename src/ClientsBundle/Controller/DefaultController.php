<?php

namespace ClientsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
        $em             = $this->get('doctrine')->getManager();
        $repoProduct    = $em->getRepository('AppBundle:Product');
        $news           = $repoProduct->findBy(array('new' => true), array('id' => 'DESC'), 8);
        $promos         = $repoProduct->findBy(array('promo' => true), array('id' => 'DESC'), 8);

        return $this->render('ClientsBundle:Default:index.html.twig', array(
            'promos'    => $promos,
            'news'      => $news
        ));
    }

    public function categoryAction($id)
    {
        $user           = $this->get('security.token_storage')->getToken()->getUser();
        $em             = $this->get('doctrine')->getManager();
        $subCatRepo     = $em->getRepository('AppBundle:Sub_category');
        $productRepo    = $em->getRepository('AppBundle:Product');
        $subcat         = $subCatRepo->find($id);
        $products       = is_string($user)
                        ? $productRepo->findBy(array('sub_category' => $subcat, 'enabled' => true, 'vip' => false))
                        : $productRepo->findBy(array('sub_category' => $subcat, 'enabled' => true));

        return $this->render('ClientsBundle:Products:subcat.html.twig', array(
            'subcat'    => $subcat,
            'products'  => $products
        ));
    }

    public function productAction($id)
    {
        $user           = $this->get('security.token_storage')->getToken()->getUser();
        $em             = $this->get('doctrine')->getManager();
        $repoProduct    = $em->getRepository('AppBundle:Product');
        $product        = $repoProduct->find($id);
        if($product->getVip() && is_string($user)){
            $this->redirectToToute('fos_user_security_login');
        }

        return $this->render('ClientsBundle:Products:product.html.twig', array(
            'product' => $product
        ));
    }
}
