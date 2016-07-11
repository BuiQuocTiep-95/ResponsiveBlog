<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/11/16
 * Time: 5:50 AM
 */
namespace Cvut\Fit\BiWT1\Blog\UiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'label' => 'Autor: ',
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User',
        ));
    }

    public function getName()
    {
        return 'cvut_fit_bi_wt1blog_ui_bundle_user_type';
    }
}