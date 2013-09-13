<?php

namespace FTC56\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfileControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{name}');
    }

    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{name}/contact');
    }

}
