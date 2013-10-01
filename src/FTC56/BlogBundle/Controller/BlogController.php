<?php

namespace FTC56\BlogBundle\Controller;

use FTC56\BlogBundle\Entity\Article;
use FTC56\BlogBundle\Form\ArticleType;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

    public function indexAction() // $page
    {
        $em            = $this->getDoctrine()->getManager();
        $list_articles = $em->getRepository('FTC56BlogBundle:Article')->findAll();

        return $this->render("FTC56BlogBundle:Blog:index.html.twig", array('list_articles' => $list_articles)
        );
    }

    public function viewAction(Article $article)
    {
        return $this->render('FTC56BlogBundle:Blog:view.html.twig', array('article' => $article));
    }

    /**
     * @Secure(roles="ROLE_AUTHOR")
     */
    public function addAction()
    {
        $article = new article();
        $form    = $this->createForm(new ArticleType(), $article);
        $article->setAuthor($this->getUser());

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'L\' article a bien été créé !');

                return $this->redirect($this->generateUrl('blog_view', array('id' => $article->getId())));
            }
        }

        return $this->render('FTC56BlogBundle:Blog:add.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Secure(roles="ROLE_AUTHOR")
     */
    public function editAction(Article $article)
    {
        $form = $this->createForm(new ArticleType(), $article);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'L\'article a bien été édité !');

                return $this->redirect($this->generateUrl('blog_view', array('id' => $article->getID())));
            }
        }

        return $this->render('FTC56BlogBundle:Blog:edit.html.twig', array('form' => $form->createView(), 'article' => $article));
    }

    /**
     * @Secure(roles="ROLE_AUTHOR")
     */
    public function deleteAction(Article $article)
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();

            $article = $em->getRepository('FTC56BlogBundle:Article')->find($id);
            $em->remove($article);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'L\' article a bien été supprimé !');

            return $this->redirect($this->generateUrl('site_home'));
        }
        return $this->render('FTC56BlogBundle:Blog:delete.html.twig', array('id' => $article->getId()));
    }
}
