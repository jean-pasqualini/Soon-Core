<?php

namespace FTC56\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function viewAction($name)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($name);

        return $this->render('FTC56UserBundle:Profile:view.html.twig', array('user' => $user));
    }

    public function contactAction($name)
    {
    }

}
