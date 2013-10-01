<?php

namespace FTC56\EditorBundle\Parser;

class Smiley
{
    public function smiley($text)
    {
        $text = $this->smileys($text);

        return $text;
    }

    private function smileys($text)
    {
        $pattern = array();
        $replace = array();

        $text = preg_replace($pattern, $replace,$text);

        return $text;
    }
}