<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Sub_categoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled', null, array('label' => 'Afficher'))
            ->add('name', null, array('label' => 'Nom'))
            ->add('category', null, array(
                'label' => 'Catégorie',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Sub_category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_sub_category';
    }
}
