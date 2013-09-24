<?php

namespace FTC56\EditorBundle\Controller;

use FTC56\EditorBundle\Parser\Parser as Parser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditorController extends Controller
{
    private $text = '[i][b]Salut, je m\'appelle Krelek[/b][/i]';

    public function testBBCodeAction()
    {
        $parser = new Parser();
        $text = $parser->parser($this->text);

        return $this->render('FTC56EditorBundle:Editor:testBBCode.html.twig', array('text' => $text));
    }

}
