<?php

namespace FTC56\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FTC56\BlogBundle\Entity\Article;

class ArticleFixtures implements FixtureInterface
{
    private $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur convallis orci dolor. Phasellus dignissim massa ipsum, ut consectetur justo volutpat quis. Nunc vitae erat tortor. Curabitur pretium, risus ut volutpat semper, sem justo porttitor nisl, id faucibus tellus enim quis sapien. Donec non magna a lectus pellentesque consectetur. Sed vel vulputate turpis. Praesent lobortis non nisl vel imperdiet. Morbi tempor eros ut felis ullamcorper hendrerit. Aliquam vitae diam orci. Donec ut est convallis, scelerisque metus sit amet, imperdiet justo. Duis tempor nec sapien ut rutrum. Suspendisse potenti. Phasellus sed semper est. Vivamus lacinia quis lectus sed ultrices.';

    public function load(ObjectManager $manager)
    {
        $names  = array('Bienvenue', 'Nouveau MJ', 'La SimZone', 'Évènement');
        $author = array('FTC56', 'Krelek', 'Cassandra', 'FTC56');

        foreach ($names as $i => $name) {
            $list_article[$i] = new Article();
            $list_article[$i]->setTitle($name);
            $list_article[$i]->setContent($this->lorem);
            $list_article[$i]->setAuthor($author[$i]);

            $manager->persist($list_article[$i]);
        }

        $manager->flush();
    }
}