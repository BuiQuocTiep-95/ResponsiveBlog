<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/13/16
 * Time: 5:58 AM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Controller;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class FileController extends Controller
{
    /**
     * @Route("/files/{id}", name="file")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function fileAction($id)
    {
        try {
            $file = $this->get('cvut_fit_biwt1_blog_base.service.functionality.file')->findById($id);
        }catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('File not found');
        }
        $response = new Response();

        $response->headers->set('Content-Type', 'mime/type');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$file->getName());

        $response->setContent(stream_get_contents($file->getData()));
        return $response;
        //return $this->render('', array('name' => $name));
    }

    /**
     * @Route("/image/{id}", name="image")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function imageAction($id)
    {
        try {
            $image = $this->get('cvut_fit_biwt1_blog_base.service.functionality.image')->findById($id);
        }catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('Image not found');
        }
        $image->setData(base64_encode(stream_get_contents($image->getData())));
        $image->setPreview(base64_encode(stream_get_contents($image->getPreview())));

        return $this->render('CvutFitBiWT1BlogUiBundle:File:image.html.twig',array('image' => $image));

    }

    /**
     * @Route("/preview/{id}", name="preview")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function previewAction($id)
    {
        try {
            $file = $this->get('cvut_fit_biwt1_blog_base.service.functionality.file')->findById($id);
        }catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('File not found');
        }
        $response = new Response();

        $response->headers->set('Content-Type', 'mime/type');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$file->getName());

        $response->setContent(stream_get_contents($file->getPreview()));
        return $response;

    }

    /**
     * @Route("/file/{id}/delete", name="file_delete")
     * @Template
     */
    public function deleteAction($id)
    {
        try {
            $file = $this->get('cvut_fit_biwt1_blog_base.service.functionality.file')->findById($id);
        }catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('File not found');
        }

        if ($file->getPost()) {
            $post=$file->getPost();
        }
        else {
            $post=$file->getComment()->getPost();
        }

        $this->get('cvut_fit_biwt1_blog_base.service.operation.file')->delete($file);

        return $this->redirect($this->generateUrl('post_detail', array('id' => $post->getId())));
    }
}
