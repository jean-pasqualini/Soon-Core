<?php

namespace FTC56\UserBundle\Controller;

use FTC56\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function viewAction(User $user)
    {
        return $this->render('FTC56UserBundle:Profile:view.html.twig', array('user' => $user));
    }

    public function contactAction($name)
    {
    }

}
