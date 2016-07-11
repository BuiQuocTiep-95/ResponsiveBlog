<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/12/16
 * Time: 4:11 AM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostFilterType extends AbstractType
{
    private $request;

    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('authors', 'entity', array(
                'class' => 'CvutFitBiWT1BlogBaseBundle:User',
                'choice_label' => 'name',
                'required' => false,
                'label' => 'Autor: ',
            ))
            ->add('month', 'choice', array(
                'choices' => array(
                    'Leden' => 1,
                    'Únor' => 2,
                    'Březen' => 3,
                    'Duben' => 4,
                    'Květen' => 5,
                    'Červen' => 6,
                    'Červenec' => 7,
                    'Srpen' => 8,
                    'Září' => 9,
                    'Říjen' => 10,
                    'Listopad' => 11,
                    'Prosinec' => 12,
                ),
                'label' => 'Mesic: ',
                'choices_as_values' => true,
                'required' => false,
            ))
            ->add('tags', 'entity', array(
                'class' => 'CvutFitBiWT1BlogBaseBundle:Tag',
                'choice_label' => 'title',
                'required' => false,
                'label' => 'Tag: '
            ))
            ->add('private', 'choice', array(
                'choices' => array(
                    'Soukromé' => 1,
                    'Veřejné' => 0
                ),
                'choices_as_values' => true,
                'label' => 'Pristup: ',
                'required' => false
            ))
            ->add('published', 'checkbox', array(
                'label' => 'Zobrazit jen platné příspěvky ',
                'required' => false,
            ))
            ->add('save','submit', array('label' => 'Vyhledat'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getName()
    {
        return 'cvut_fit_bi_wt1blog_ui_bundle_post_filter_type';
    }
}
