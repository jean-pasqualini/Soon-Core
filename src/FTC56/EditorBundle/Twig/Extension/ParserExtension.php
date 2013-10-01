<?php

namespace FTC56\EditorBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;
use FTC56\EditorBundle\Parser\Parser;
use Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;

class ParserExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'parse' => new \Twig_Filter_Method($this, 'parseFilter'),
        );
    }

    public function parseFilter($text)
    {
        $parser = new Parser();

        return $parser->parser($text);
    }

    public function getName()
    {
        return 'parser';
    }
}