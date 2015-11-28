<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('paiement', null, array('label' => 'Type de Paiement'))
            ->add('address', null, array('label' => 'Adresse'))
            ->add('postalCode', null, array('label' => 'Code Postal'))
            ->add('city', null, array('label' => 'Ville'))
            ->add('recipient', null, array('label' => 'Destinataire'))
            ->add('user', null, array(
                'label' => 'Utilisateur',
                'attr'  => array(
                    'class' => 'chosen-select'
            )))
            ->add('products', null, array(
                'label' => 'Produits',
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
            'data_class' => 'AppBundle\Entity\Command'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_command';
    }
}
