<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/12/16
 * Time: 7:57 PM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Controller;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Image;
use Cvut\Fit\BiWT1\Blog\UiBundle\Form\UpdateCommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cvut\Fit\BiWT1\Blog\UiBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;
use Doctrine\Common\Collections\ArrayCollection;

class CommentController extends Controller {

    /**
     * @Route("/post/{id}/reply_comment", name="reply_comment")
     * @Template()
     */

    public function replyAction ($id, Request $request) {

        $comment= new Comment();
        $file= new File();
        $comment->addFile($file);

        $parent=$this->get('cvut_fit_biwt1_blog_base.entity.repository.comment')->findById($id);
        $post=$parent->getPost();

        $form = $this->createForm(new CommentType(), $comment, array(
            'action' => $this->generateUrl('reply_comment', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $operation=$this->get('cvut_fit_biwt1_blog_base.service.operation.comment');
            $files=$form['files']->getData();
            $help=$operation->addFiles($comment, $files);

            if ($help==1)
                $form->get('files')->addError(new FormError('Chyba práce se souborem.'));
            if ($help==2)
                $form->get('files')->addError(new FormError('Chyba práce s obrázkem.'));

            if ($form->isValid()) {
                $operation->createReply($comment, $parent);
                return $this->redirect($this->generateUrl('post_detail', array('id' => $post->getId())));
            }
        }

        $images=new ArrayCollection();
        $files=new ArrayCollection();
        foreach ($post->getFiles() as $blob){
            if($blob instanceof Image){
                $blob->setData(base64_encode(stream_get_contents($blob->getData())));
                $blob->setPreview(base64_encode(stream_get_contents($blob->getPreview())));
                $images->add($blob);
            }else {
                $files->add($blob);
            }
        }

        return $this->render('CvutFitBiWT1BlogUiBundle:Comment:reply.html.twig', array(
            'post' => $post,
            'form_comment' => $form->createView(),
            'images' => $images,
            'files' => $files,
            'id' => $id
        ));

    }

    /**
     * @Route("/post/{id}/update_comment", name="update_comment")
     * @Template()
     */

    public function updateAction (Comment $comment, $id, Request $request) {

        $post=$comment->getPost();

        if (!count($comment->getFiles())) {
            $file= new File();
            $comment->addFile($file);
        }

        $form = $this->createForm(new UpdateCommentType(), $comment, array(
            'action' => $this->generateUrl('update_comment', array('id' => $id)),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $operation=$this->get('cvut_fit_biwt1_blog_base.service.operation.comment');
            $files=$form['files']->getData();
            $help=$operation->addFiles($comment, $files);

            if ($help==1)
                $form->get('files')->addError(new FormError('Chyba práce se souborem.'));
            if ($help==2)
                $form->get('files')->addError(new FormError('Chyba práce s obrázkem.'));

            if ($form->isValid()) {
                $operation->update($comment);
                return $this->redirect($this->generateUrl('post_detail', array('id' => $post->getId())));
            }
        }

        $images=new ArrayCollection();
        $files=new ArrayCollection();
        foreach ($post->getFiles() as $blob){
            if($blob instanceof Image){
                $blob->setData(base64_encode(stream_get_contents($blob->getData())));
                $blob->setPreview(base64_encode(stream_get_contents($blob->getPreview())));
                $images->add($blob);
            }else {
                $files->add($blob);
            }
        }

        return $this->render('CvutFitBiWT1BlogUiBundle:Comment:update.html.twig', array(
            'post' => $post,
            'form_comment' => $form->createView(),
            'images' => $images,
            'files' => $files,
            'id' => $id
        ));

    }

    /**
     * @Route("/post/{id}/delete_comment", name="delete_comment")
     * @Template()
     */

    public function deleteAction ($id) {
        $container=$this->get('cvut_fit_biwt1_blog_base.service.functionality.comment');
        $comment=$container->findById($id);
        $post=$comment->getPost();

        $found=0;
        $author=$comment->getAuthor();
        if (!$author->getPosts()) {
            foreach ($container->findAll() as $help) {
                if ($help->getAuthor()==$author) {
                    $found++;
                }
            }
            if (!$found) $this->get('cvut_fit_biwt1_blog_base.service.functionality.user')->delete($author);
        }

        $container->delete($comment);
        return $this->redirect($this->generateUrl('post_detail', array('id' => $post->getId())));
    }



}