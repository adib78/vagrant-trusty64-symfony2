<?php

namespace Game\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller
  {

  public function indexAction($name)
    {

    
    $message = \Swift_Message::newInstance()
    ->setSubject('Welcome in Typing Matches!')
    ->setFrom('typingmatches@gmail.com','Typing Matches')
    ->setTo($name)
    ->setBody(
    $this->renderView('GameTestBundle:Mail:email.txt.twig', array(
      'name' => $name
    ))
    )
    ;
    $this->get('mailer')->send($message);

    return $this->render('GameTestBundle:Mail:index.html.twig', array(
      'name' => $name
    ));
    
    
    }

  }
