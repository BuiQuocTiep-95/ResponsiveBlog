<?php

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text', 'textarea', array(
                'label' => 'Komentar: ',
                'trim' => false,
                'required' => true
            ))
            ->add('author', new UserType())
            ->add('files', 'collection', array(
                'label' => 'Přílohy: ',
                'type' => new FileType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('save','submit', array('label' => 'Odeslat'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment',
        ));
    }

    public function getName()
    {
        return 'cvut_fit_bi_wt1blog_ui_bundle_comment_type';
    }
}
