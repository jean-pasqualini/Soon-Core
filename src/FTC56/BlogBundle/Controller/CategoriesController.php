<?php

namespace FTC56\BlogBundle\Controller;

use FTC56\BlogBundle\Entity\Category as Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function listAction()
    {
        $em              = $this->getDoctrine()->getManager();
        $list_categories = $em->getRepository('FTC56BlogBundle:Category')->findAll();

        return $this->render('FTC56BlogBundle:Categories:list.html.twig', array('list_categories' => $list_categories));
    }

    public function viewAction(Category $category)
    {
        return $this->render('FTC56BlogBundle:Categories:view.html.twig', array('category' => $category));
    }

    public function addAction()
    {
    }

    public function editAction($id, Category $category)
    {
    }

    public function deleteAction($id)
    {
    }
}
