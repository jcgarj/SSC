<?php

namespace StudentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StudentsBundle:Default:index.html.twig');
    }
}
