<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/1/16
 * Time: 6:17 PM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'text', array(
            'label' => 'Tag: ',
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag',
        ));
    }

    public function getName()
    {
        return 'form_tag';
    }
}