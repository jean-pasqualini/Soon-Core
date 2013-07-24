<?php

namespace FTC56\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FTC56\BlogBundle\Entity\Category;

class CategoryFixtures implements FixtureInterface
{
    private $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur convallis orci dolor. Phasellus dignissim massa ipsum, ut consectetur justo volutpat quis. Nunc vitae erat tortor. Curabitur pretium, risus ut volutpat semper, sem justo porttitor nisl, id faucibus tellus enim quis sapien. Donec non magna a lectus pellentesque consectetur. Sed vel vulputate turpis. Praesent lobortis non nisl vel imperdiet. Morbi tempor eros ut felis ullamcorper hendrerit. Aliquam vitae diam orci. Donec ut est convallis, scelerisque metus sit amet, imperdiet justo. Duis tempor nec sapien ut rutrum. Suspendisse potenti. Phasellus sed semper est. Vivamus lacinia quis lectus sed ultrices.';

    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager

    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $names = array('Symfony2', 'Doctrine2', 'Tutoriel', 'Évènement');

        foreach ($names as $i => $name) {
            // On crée la catégorie
            $liste_categories[$i] = new Category();
            $liste_categories[$i]->setName($name);
            $liste_categories[$i]->setDescription($this->lorem);

            // On la persiste
            $manager->persist($liste_categories[$i]);
        }

        // On déclenche l'enregistrement
        $manager->flush();
    }
}