<?php


namespace FTC56\BlogBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'blog_index'));
        $menu->addChild(
            'View',
            array(
                'route'           => 'blog_view',
                'routeParameters' => array('id' => 1)
            )
        );

        $menu->setChildrenAttribute('class', 'nav');

        return $menu;
    }
}