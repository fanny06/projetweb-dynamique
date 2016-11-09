<?php
namespace PP\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ViewsController
 *
 * @author Fanny
 */
class ViewsController extends Controller{

    public function indexAction(){
        return $this->render('PPCoreBundle:Views:index.html.twig');
    }
    
    public function recettesAction(){
        return $this->render('PPCoreBundle:Views:recettes.html.twig');
    }
    
    public function astucesAction(){
        return $this->render('PPCoreBundle:Views:astuces.html.twig');
    }
    
    public function contactAction(){
        return $this->render('PPCoreBundle:Views:contact.html.twig');
    }
    
    public function recetteAction(){
        return $this->render('PPCoreBundle:Views:recette.html.twig');
    }
    
    public function loginAction(){
        return $this->render('PPCoreBundle:Views:login.html.twig');
    }
}



