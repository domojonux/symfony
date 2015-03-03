<?php

namespace DJonux\Bundle\DJonuxUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DJonuxUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
