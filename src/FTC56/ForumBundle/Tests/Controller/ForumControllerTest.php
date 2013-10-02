<?php

namespace FTC56\ForumBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ForumControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testForum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/forum/{id}');
    }
}
