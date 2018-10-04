<?php

namespace MP\LogistiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('employer_liste'));
    }
}
