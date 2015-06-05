<?php

namespace Game\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class BreadcrumpsController extends Controller
  {

  public function indexAction()
    {

    
    $breadcrumbs = $this->get("white_october_breadcrumbs");
    // Simple example
    $breadcrumbs->addItem("Home", $this->get("router")->generate("game_mailing_breadcrumps"));

    // Example without URL
    $breadcrumbs->addItem("Some text without link");

    // Example with parameter injected into translation "user.profile"
//    $breadcrumbs->addItem($txt, $url, array("%user%" => $user->getName()));
    
    
// return $this->render('GameTestBundle:Breadcrumps:index.html.twig', array('name' => $name));    
 return $this->render('GameTestBundle:Breadcrumps:index.html.twig');    
    
    }

  }
