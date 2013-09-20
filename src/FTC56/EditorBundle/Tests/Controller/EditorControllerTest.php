<?php

namespace FTC56\EditorBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EditorControllerTest extends WebTestCase
{
    public function testTestbbcode()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/testBBCode');
    }

}
