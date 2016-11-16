<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

	/**
	 * @Route("/fondamentaux", name="fondamentaux")
	 */
	public function fondamentauxAction()
	{
		return $this->render('FrontBundle:Default:fondamentaux.html.twig');
	}
}


