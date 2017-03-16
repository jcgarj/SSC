<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('students_homepage', new Route('/', array(
    '_controller' => 'StudentsBundle:Default:index',
)));

return $collection;
