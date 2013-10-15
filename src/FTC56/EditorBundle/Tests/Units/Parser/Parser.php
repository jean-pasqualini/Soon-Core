<?php

namespace FTC56\EditorBundle\Tests\Units\Parser;

use atoum\AtoumBundle\Test\Units;

class Parser extends Units\Test
{
    /**
     * @dataProvider bbcodeDataProvied
     */
    public function testBbcode($file)
    {
        $parser = new \FTC56\EditorBundle\Parser\Parser();

        $parsed = $parser->parser(file_get_contents(__DIR__."/Input/$file"));

        $this
            ->string($parsed)
                ->isEqualToContentsOfFile(__DIR__."/Output/$file")
            ->dump($parsed)
        ;
    }

    public function bbcodeDataProvied()
    {
        return array(
            "test1.txt",
            "test2.txt",
            "test3.txt"
        );
    }

    public function testInfo()
    {

    }
}