<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 12/8/15
 * Time: 10:45 AM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
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
            //->add('author', new UserType())
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
                'constraints' => new Length(array('min' => '10'))
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
                'multiple' => false,
            ))
            ->add('save', 'submit', array('label' => 'Uložit '));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'form_post';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post',
        ));
    }
}