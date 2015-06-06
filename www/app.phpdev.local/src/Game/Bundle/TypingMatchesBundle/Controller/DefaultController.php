<?php

namespace Game\Bundle\TypingMatchesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GameTypingMatchesBundle:Default:index.html.twig');
    }
}
