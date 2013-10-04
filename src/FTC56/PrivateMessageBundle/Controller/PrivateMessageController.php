<?php

namespace FTC56\PrivateMessageBundle\Controller;

use FTC56\PrivateMessageBundle\Entity\Message;
use FTC56\PrivateMessageBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrivateMessageController extends Controller
{
    public function indexAction()
    {
        $em      = $this->getDoctrine()->getManager();
        $message = $em->getRepository('FTC56PrivateMessageBundle:Message')->findBy(array('receiver' => $this->getUser()->getId()), array('date' => 'desc'), 25, 0);;

        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:index.html.twig', array('messages' => $message));
    }

    public function sentViewAction()
    {
        $em      = $this->getDoctrine()->getManager();
        $user    = $this->getUser();
        $message = $em->getRepository('FTC56PrivateMessageBundle:Message')->findBy(array('author' => $user->getId()), array('date' => 'desc'), 25, 0);

        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:sent.html.twig', array('message' => $message));
    }

    public function viewAction(Message $message)
    {
        $message->setSeen(true);
        $em = $this->getDoctrine()->getManager();
        $em->flush($message);

        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:view.html.twig', array('message' => $message));
    }

    public function deleteAction($id)
    {
    }

    public function editAction(Message $message)
    {
        $form    = $this->createForm(new MessageType(), $message);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Le message a bien été édité !');

                return $this->redirect($this->generateUrl('pm_index'));
            }
        }

        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:send.html.twig', array('form' => $form->createView()));
    }

    public function sendAction()
    {
        $message = new message();
        $message->setAuthor($this->getUser());
        $form    = $this->createForm(new MessageType(), $message);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($message);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Le message a bien été envoyé !');

                return $this->redirect($this->generateUrl('pm_index'));
            }
        }

        return $this->render('FTC56PrivateMessageBundle:PrivateMessage:send.html.twig', array('form' => $form->createView()));
    }
}
