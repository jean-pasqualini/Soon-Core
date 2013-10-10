<?php

namespace FTC56\BlogBundle\Controller;

use FTC56\BlogBundle\Entity\Article;
use FTC56\BlogBundle\Entity\Comment;
use FTC56\BlogBundle\Form\CommentType;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentController extends Controller
{
    /**
     * @Secure(roles="ROLE_USER")
     */
    public function addAction(Article $article)
    {   /*
        $comment = new Comment();
        $form = $this->createForm(new CommentType(), $comment);
        $request = $this->getRequest();
        $comment->setAuthor($this->getUser());
        $comment->setArticle($article);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($comment);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'Commentaire bien enregistré !');

                return $this->redirect($this->generateUrl(''));
            }
        }

        $this->get('session')->getFlashBag()->add('error', 'Votre formulaire contient des erreurs');

        return $this->forward('FTC56BlogBundle:Blog:view', array('article' => $article, 'form' => $form));
    // */}

    /**
     * @Secure(roles="ROLE_AUTHOR")
     */
    public function editAction($id)
    {
    }

    /**
     * @Secure(roles="ROLE_AUTHOR")
     */
    public function deleteAction($id)
    {
    }

}
