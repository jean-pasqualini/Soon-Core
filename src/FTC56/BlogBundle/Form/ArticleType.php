<?php

namespace FTC56\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('author', 'text')
            ->add('content', 'textarea')
            ->add('creation', 'date')
            ->add('published', 'checkbox', array('requiered' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FTC56\BlogBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'ftc56_blogbundle_articletype';
    }
}
