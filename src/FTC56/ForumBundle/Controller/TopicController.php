<?php

namespace FTC56\ForumBundle\Controller;

use FTC56\ForumBundle\Entity\Topic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopicController extends Controller
{
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $topic = $em->getRepository('FTC56ForumBundle:Topic')->find($id);
        $posts = $em->getRepository('FTC56ForumBundle:Post')->getPosts($id);

        return $this->render('FTC56ForumBundle:Topic:view.html.twig', array('topic' => $topic, 'posts' => $posts));
    }

    public function deleteAction($id)
    {
    }

    public function moveAction(Topic $topic)
    {
    }

}
