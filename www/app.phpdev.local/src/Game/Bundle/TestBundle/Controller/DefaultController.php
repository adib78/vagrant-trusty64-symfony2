<?php

namespace Game\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GameTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
