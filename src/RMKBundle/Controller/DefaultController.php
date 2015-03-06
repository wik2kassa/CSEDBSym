<?php

namespace RMKBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RMKBundle:Default:index.html.twig', array('name' => $name));
    }
}
