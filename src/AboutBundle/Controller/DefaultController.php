<?php

namespace AboutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AboutBundle:Default:index.html.twig');
    }
}
