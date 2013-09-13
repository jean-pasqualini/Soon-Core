<?php

namespace FTC56\EditorBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as controller;

class EditorExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'editor' => new \Twig_Function_Method($this, 'editor', array('is_safe' => array('html'))),
        );
    }

    public function editor($editor)
    {
        $controller = new controller();

        return $controller->render('FTC56EditorBundle:Editor:' . $editor . '.html.twig', array());
    }

    public function getName()
    {
        return 'twigext';
    }
}