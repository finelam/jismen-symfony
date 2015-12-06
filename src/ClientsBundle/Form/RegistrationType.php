<?php

namespace ClientsBundle\Form;

use SymfonyComponentFormAbstractType;
use SymfonyComponentFormFormBuilderInterface;

class NameType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('birthday')
            ->add('address')
            ->add('postal_code')
            ->add('city')
            ->add('newletter')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'app_user_registration';
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
}
