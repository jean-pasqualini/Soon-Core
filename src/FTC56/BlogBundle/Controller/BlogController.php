<?php

namespace FTC56\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    // Controller index blog
    public function indexAction($page)
    {
        $em = $this
              ->getDoctrine()
              ->getManager();

        $list_articles = $em
                         ->getRepository('FTC56BlogBundle:Article')
                         ->findAll();

        return $this->render(
            "FTC56BlogBundle:Blog:index.html.twig",
            array('list_articles' => $list_articles)
        );
    }

    // Controller vue article spécifique

    public function viewAction($id)
    {
        $em = $this
              ->getDoctrine()
              ->getManager();

        $article = $em
                   ->getRepository('FTC56BlogBundle:Article')
                   ->find($id);

        if ($article === null) {
            throw $this->createNotFoundException('Article[id=' . $id . '] inexistant.');
        }

        return $this->render('FTC56BlogBundle:Blog:view.html.twig', array('article' => $article));
    }

    // Controller ajout article

    public function addAction()
    {
        $article = new article();

        $form = $this->createFormBuilder($article)
                ->add('creation', 'date')
                ->add('title', 'text')
                ->add('content', 'textarea')
                ->add('author', 'text')
                ->add('published', 'checkbox', array('required' => false))
                ->getForm();

        $request = $this->get('request');

        if ($request->getMethod() == 'POST'){
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();

                $this->get('session')->getFlashBag()->add('info', 'L\' article a bien été créé !');

                return $this->redirect($this->generateUrl('blog_view', array('id' => $article->getId())));
            }
        }

        return $this->render('FTC56BlogBundle:Blog:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    // Controller suppression article

    public function deleteAction($id)
    {
        $em = $this
              ->getDoctrine()
              ->getManager();

        $article = $em->getRepository('FTC56BlogBundle:Article')->find($id);
        $em->remove($article);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'L\' article a bien été supprimé !');

        return $this->redirect($this->generateUrl('site_home'));
    }

    // Controller modification article

    public function editAction($id)
    {
    }

    // Controller menu BlogBundle

    public function menuAction($number)
    {
        $list = 'test';

        return $this->render('FTC56BlogBundle:Blog:menu.html.twig', array('liste_articles' => $list));
    }
}
