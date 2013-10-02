<?php

namespace FTC56\ForumBundle\Controller;

use FTC56\ForumBundle\Entity\Topic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopicController extends Controller
{
    public function viewAction(Topic $topic)
    {
        return $this->render('FTC56ForumBundle:Topic:view.html.twig', array('topic' => $topic));
    }

    public function deleteAction($id)
    {
    }

    public function moveAction($id)
    {
    }

}
