<?php

namespace FTC56\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoriesControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories/list');
    }

    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories/view/{id}');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories/add');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories/edit/{id}');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories/delete/{id}');
    }
}
