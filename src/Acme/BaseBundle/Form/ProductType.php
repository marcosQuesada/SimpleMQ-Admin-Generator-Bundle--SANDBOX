<?php

namespace Acme\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('slug')
            ->add('type')
            ->add('attribute1')
            ->add('attribute2')
            ->add('attribute3')
        ;
    }

    public function getName()
    {
        return 'acme_basebundle_producttype';
    }
}
