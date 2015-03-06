<?php

namespace RMKBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
    public function registerAction()
    {
        return $this->render('RMKBundle:Register:register.html.twig', array(
                // ...
            ));    }

    public function loginAction()
    {
        return $this->render('RMKBundle:Register:login.html.twig', array(
                // ...
            ));    }

}
