<?php

namespace FTC56\ForumBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TopicControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/view/{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete/{id}');
    }

    public function testMove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/move/{id}');
    }

}
