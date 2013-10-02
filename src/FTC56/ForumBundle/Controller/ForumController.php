<?php

namespace FTC56\ForumBundle\Controller;

use FTC56\ForumBundle\Entity\Forum;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $forums = $em->getRepository('FTC56ForumBundle:Forum')->findBy(array('parent' => '0'), array('position' => 'desc', 'name' => 'asc'));

        return $this->render('FTC56ForumBundle:Forum:index.html.twig', array('forums' => $forums));
    }

    public function forumAction(Forum $forum, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $sub_forums = $em->getRepository('FTC56ForumBundle:Forum')->findBy(array('parent' => $id), array('position' => 'asc', 'name' => 'asc'));
        $topics = $em->getRepository('FTC56ForumBundle:Topic')->findBy(array('forum' => $id));

        return $this->render('FTC56ForumBundle:Forum:forum.html.twig', array('forum' => $forum, 'sub_forums' => $sub_forums, 'topics' => $topics));
    }
}
