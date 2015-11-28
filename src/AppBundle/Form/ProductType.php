<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled', null, array(
                'label' => 'Afficher'
            ))
            ->add('vip', null, array(
                'label' => 'VIP'))
            ->add('new', null, array(
                'label' => 'Nouveauté'))
            ->add('promo', null, array(
                'label' => 'Bon plan'))
            ->add('name', null, array(
                'label' => 'Nom'
            ))
            ->add('sub_category', null, array(
                'label' => 'Sous-catégorie',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
            ->add('supplier', null, array(
                'label' => 'Fournisseur',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
            ->add('priceht', null, array(
                'label' => 'Prix HT',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
            ->add('tva', null, array(
                'label' => 'TVA',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
            ->add('quantity', null, array(
                'label' => 'Quantité en stock'
            ))
            ->add('color', null, array(
                'label' => 'Couleur',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
            ->add('size', null, array(
                'label' => 'Taille',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
            ->add('file', null, array(
                'label' => 'Image'
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_product';
    }
}
