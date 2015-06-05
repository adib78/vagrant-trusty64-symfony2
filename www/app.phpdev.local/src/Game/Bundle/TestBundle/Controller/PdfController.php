<?php

namespace Game\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class PdfController extends Controller
  {

  public function indexAction()
    {

    $container = $this->get('service_container');

	    $dir = __DIR__.'/../../../../../web/upload/pdf/image.jpg';

    $container->get('knp_snappy.image')->generate('http://www.google.fr', $dir);
    }

  }
