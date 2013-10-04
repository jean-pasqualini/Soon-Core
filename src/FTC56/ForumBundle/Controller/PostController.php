<?php

namespace FTC56\ForumBundle\Controller;

use FTC56\ForumBundle\Entity\Post;
use FTC56\ForumBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function viewAction(Post $post)
    {
        return $this->render('FTC56ForumBundle:Post:view.html.twig', array('post' => $post, 'user' => $post->getAuthor()));
    }

    public function addAction()
    {
    }

    public function editAction(Post $post)
    {
        $form = $this->createForm(new PostType(), $post);
    }

    public function deleteAction()
    {
    }

}
