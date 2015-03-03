<?php

namespace DJonux\Bundle\DJonuxUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UsersController extends Controller
{
    /**
     * @Route("/Default")
     * @Template()
     */
    public function DefaultAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/Profil")
     * @Template()
     */
    public function ProfilAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/Edit")
     * @Template()
     */
    public function EditAction()
    {
        return array(
                // ...
            );    }

}
