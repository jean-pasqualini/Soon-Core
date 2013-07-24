<?php

namespace FTC56\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function listAction()
    {
        $em = $this
              ->getDoctrine()
              ->getManager();

        $list_categories = $em
                           ->getRepository('FTC56BlogBundle:Category')
                           ->findAll();

        return $this->render('FTC56BlogBundle:Categories:list.html.twig', array('list_categories' => $list_categories));
    }

    public function viewAction($id)
    {
        $em = $this
              ->getDoctrine()
              ->getManager();

        $category = $em
                    ->getRepository('FTC56BlogBundle:Category')
                    ->find($id);

        if ($category === null) {
            throw $this->createNotFoundException('Catégorie[id=' . $id . '] inexistante.');
        }

        return $this->render('FTC56BlogBundle:Categories:view.html.twig', array('category' => $category));
    }

    public function addAction()
    {
    }

    public function editAction($id)
    {
    }

    public function deleteAction($id)
    {
    }
}
