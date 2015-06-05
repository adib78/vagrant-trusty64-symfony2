<?php

namespace Game\Bundle\LocaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
	    $em = $this->getDoctrine()->getManager();
	    $languages = $em->getRepository('GameLocaleBundle:Language')->findAll();

        return $this->render('GameLocaleBundle:Default:index.html.twig', array(
			'languages' => $languages,
	        'active'    => $request->getLocale()
        ));
    }

	public function setLanguageAction(Request $request)
	{
		$url = $request->headers->get('referer');
		return $this->redirect($url);
	}
}
