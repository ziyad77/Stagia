<?php

namespace Stagia\UtilisateurBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends BaseType
{
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email')
        ;
    }
    public function getName()
    {
        return 'stagia_user_profile';
    }
}