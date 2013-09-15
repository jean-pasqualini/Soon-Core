<?php

namespace FTC56\PrivateMessageBundle\Controller;

use FTC56\PrivateMessageBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrivateMessageController extends Controller
{
    public function indexAction()
    {
        $em      = $this->getDoctrine()->getManager();
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $message = $em->getRepository('FTC56PrivateMessageBundle:Message');

        $pm_list = $message->findBy(array('receiver' => $user->getUsername()), array('date' => 'desc'), 25, 0);

        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:index.html.twig', array('pm_list' => $pm_list));
    }

    public function sendedViewAction()
    {
        $em      = $this->getDoctrine()->getManager();
        $user    = $this->container->get('security.context')->getToken()->getUser();
        $message = $em->getRepository('FTC56PrivateMessageBundle:Message');

        $pm_list = $message->findBy(array('author' => $user->getUsername()), array('date' => 'desc'), 25, 0);

        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:sended.html.twig', array('pm_list' => $pm_list));
    }

    public function viewAction(Message $message)
    {
        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:view.html.twig', array('message' => $message));
    }

    public function deleteAction($id)
    {
    }

    public function editAction($id)
    {
    }

    public function sendAction()
    {
    }
}
