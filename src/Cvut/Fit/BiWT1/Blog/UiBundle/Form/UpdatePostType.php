<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/12/16
 * Time: 10:01 AM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdatePostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'label' => 'Titulek ',
                'required' => true))
            ->add('author', new UserType())
            ->add('publishFrom', 'date', array('label' => 'Datum zveřejnění '))
            ->add('publishTo', 'date', array('label' => 'Datum uzavření '))
            ->add('private', 'checkbox', array('label' => 'Osobní   ', 'required' => false))
            ->add('text', 'textarea', array(
                'label' => 'Obsah ',
            ))
            ->add('tags', 'collection', array(
                'type' => new TagType(),
                'allow_add'    => true,
                'allow_delete' => true,
            ))/*
            ->add('files', 'collection', array(
                'label' => 'Přílohy: ',
                'type' => new FileType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))*/
            ->add('files', 'file', array(
                'label' => 'Přílohy: ',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
            ))
            ->add('save', 'submit', array('label' => 'Uložit změny'));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'form_postUpdate';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post',
        ));
    }
}