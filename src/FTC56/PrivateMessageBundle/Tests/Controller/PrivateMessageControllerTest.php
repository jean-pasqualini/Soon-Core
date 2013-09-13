<?php

namespace FTC56\PrivateMessageBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PrivateMessageControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}/view');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id]/delete');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '{id}/edit');
    }

    public function testSend()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/send');
    }

}
