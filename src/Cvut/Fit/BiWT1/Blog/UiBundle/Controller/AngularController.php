<?php
namespace Cvut\Fit\BiWT1\Blog\UiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\Common\Collections\ArrayCollection;

class AngularController extends Controller
{
    /**
     * @Route("/") name="ng_list"
     * @Template
     */
    public function indexAction()
    {
        return $this->render('@CvutFitBiWT1BlogUi/Angular/index.html.twig');
    }

}