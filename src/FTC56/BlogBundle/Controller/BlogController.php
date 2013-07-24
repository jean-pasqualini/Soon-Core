<?php

namespace FTC56\BlogBundle\Controller;

use FTC56\BlogBundle\Entity\Article;
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

        return $this->render("FTC56BlogBundle:Blog:index.html.twig", array('list_articles' => $list_articles));
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

        if ($this
            ->getRequest()
            ->getMethod() == 'POST'
        ) {
            $this
            ->get('session')
            ->getFlashBag()
            ->add('info', 'Article bien enregistré');

            return $this->redirect($this->generateUrl('blog_view', array('id' => $article->getId())));
        }

        return $this->render('FTC56BlogBundle:Blog:add.html.twig');
    }

    // Controller suppression article

    public function deleteAction($id)
    {
        if ($request->request->get('valid') == true) {
            $em = $this
                  ->getDoctrine()
                  ->getManager();

            $em->remove($id);

            return $this->redirect($this->generateUrl('home'));
        } else {

            return $this->render('FTC56BlogBundle:Blog:delete.html.twig');
        }
    }

    // Controller modification article

    public function editAction($id)
    {
        $em      = $this
                   ->getDoctrine()
                   ->getManager();
        $article = $em->getRepository('FTC56BlogBundle:Artcile');

        if ($article === null) {
            throw $this->createNotFoundException('Article[id=' . $id . '] inexistant.');
        }

        return $this->render('FTC56BlogBundle:Blog:edit.html.twig');
    }

    // Controller menu BlogBundle

    public function menuAction($number)
    {
        $list = 'test';

        return $this->render('FTC56BlogBundle:Blog:menu.html.twig', array('liste_articles' => $list));
    }
}
