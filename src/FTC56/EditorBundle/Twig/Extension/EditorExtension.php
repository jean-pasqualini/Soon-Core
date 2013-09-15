<?php

namespace FTC56\EditorBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;

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
        return '{% include FTC56EditorBundle:Editor:' . $editor . '.html.twig %}';
    }

    public function getName()
    {
        return 'twigext';
    }
}