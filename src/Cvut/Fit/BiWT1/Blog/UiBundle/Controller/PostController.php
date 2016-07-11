<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 12/1/15
 * Time: 11:56 AM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Controller;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Image;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Security\Voter\PostVoter;
use Cvut\Fit\BiWT1\Blog\UiBundle\Form\PostFilterType;
use Cvut\Fit\BiWT1\Blog\UiBundle\Form\PostType;
use Cvut\Fit\BiWT1\Blog\UiBundle\Form\UpdatePostType;
use Cvut\Fit\BiWT1\Blog\UiBundle\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormError;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException;

class PostController extends Controller
{

    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('Admin page!');
    }

    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $operation=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        $posts=new ArrayCollection($operation->sortedByCreated());

        $page=$request->get('page',1);
        $pages=ceil(count($posts)/5);
        $postsOnPage= new ArrayCollection();
        for($i=($page-1)*5;$i<($page-1)*5+5;$i++){
            if($i>=count($posts))break;
            $postsOnPage->add($posts[$i]);
        }


        $form = $this->createForm(new PostFilterType(), array(
            'action' => $this->generateUrl('home'),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        $published=$form->get('published')->getData();
        $user=$form->get('authors')->getData();
        $month=$form->get('published')->getData();
        $tag=$form->get('tags')->getData();
        $private=$form->get('private')->getData();

        if($form->isSubmitted()) {
            if($form->isValid()) {
                $postsOnPage=$this->get('cvut_fit_biwt1_blog_base.service.operation.filter')->filterPosts($posts, $user, $month, $tag, $private, $published);
                $pages=1;
            }
        }
        return $this->render('CvutFitBiWT1BlogUiBundle:Post:index.html.twig',array(
            'posts' => $postsOnPage,
            'pages' => $pages,
            'form_filter' => $form->createView()));
    }

    /**
     * @Route("/newpost", name="new_post")
     * @Template()
     */
    public function newAction(Request $request)
    {
        if(!($this->isGranted('ROLE_USER') or $this->isGranted('ROLE_ADMIN'))) {
            throw $this->createAccessDeniedException();
        }

        $post = new Post();
        $tag1 = new Tag();
        $tag1->setTitle('ostatni');
        $post->getTags()->add($tag1);

        $form = $this->createForm(new PostType(), $post, array(
            'action' => $this->generateUrl('new_post'),
            'method' => 'POST',
        ));

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            if($post->getPublishFrom() > $post->getPublishTo()) {
                $form->get('publishFrom')->addError(new FormError('Datum zveřejnění musí předcházet datu uzavření.'));
            }
            if(strlen($post->getText())<10) {
                $form->get('text')->addError(new FormError('Text musí mít alespoň 10 znaků.'));
            }
            //if($post->getAuthor()->getName()==null) {
            //   $form->get('author')->addError(new FormError('Vyplňte prosím jméno.'));
            //}

            $files=$form['files']->getData();
            $operation=$this->get('cvut_fit_biwt1_blog_base.service.operation.post');
            $help=$operation->addFiles($post, $files);
            $user = $this->getUser();

            //var_dump($request);

            if ($help==1)
                $form->get('files')->addError(new FormError('Chyba práce se souborem.'));
            if ($help==2)
                $form->get('files')->addError(new FormError('Chyba práce s obrázkem.'));

            if($form->isValid())
            {
                $operation=$this->get('cvut_fit_biwt1_blog_base.service.operation.post');
                $operation->createPost($post, $user);

                return $this->redirect($this->generateUrl('post_detail', array('id' => $post->getId())));
            }
        }

        return $this->render('CvutFitBiWT1BlogUiBundle:Post:new.html.twig', array('form_post' => $form->createView()));
    }

    /**
     * @Route("/post/{id}/update", name="post_update")
     * @Template()
     */

    public function updateAction ($id, Request $request)
    {
        $function=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        try {
            $post=$function->findById($id);
        }
        catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('Tato stranka neexistuje.');
        }


        if(!$this->isGranted(PostVoter::POST_EDIT, $post)) {
            throw $this->createAccessDeniedException();
        }

        $tags=new ArrayCollection();
        foreach ($post->getTags() as $tag) {
            $tags->add($tag);
        }

        $form = $this->createForm(new UpdatePostType(), $post, array(
            'action' => $this->generateUrl('post_update', array('id' => $id)),
            'method' => 'POST',
        ));


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($post->getPublishFrom() > $post->getPublishTo()) {
                $form->get('publishFrom')->addError(new FormError('Datum zveřejnění musí předcházet datu uzavření.'));
            }
            if (strlen($post->getText()) < 10) {
                $form->get('text')->addError(new FormError('Text musí mít alespoň 10 znaků.'));
            }
            if ($post->getAuthor()->getName() == null) {
                $form->get('author')->addError(new FormError('Vyplňte prosím jméno.'));
            }

            $files = $form['files']->getData();
            $operation = $this->get('cvut_fit_biwt1_blog_base.service.operation.post');
            $help = $operation->addFiles($post, $files);

            if ($help == 1)
                $form->get('files')->addError(new FormError('Chyba práce se souborem.'));
            if ($help == 2)
                $form->get('files')->addError(new FormError('Chyba práce s obrázkem.'));

            if ($form->isValid()) {
                $functionTag= $this->get('cvut_fit_biwt1_blog_base.service.functionality.tag');
                foreach ($tags as $tag) {
                    if (false === $post->getTags()->contains($tag)){
                        $tag->removePost($post);
                        if (!count($tag->getPosts())) {
                            $functionTag->delete($tag);
                        }
                    }
                }

                $operation = $this->get('cvut_fit_biwt1_blog_base.service.operation.post');
                $operation->updatePost($post);

                return $this->redirect($this->generateUrl('post_detail', array('id' => $post->getId())));
            }
        }

        return $this->render('CvutFitBiWT1BlogUiBundle:Post:update.html.twig', array(
            'post' => $post,
            'form_post' => $form->createView()));
    }

    /**
     * @Route("/post/{id}/detail", name="post_detail")
     * @Template()
     */
    public function detailAction($id, Request $request)
    {
        $function=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        try {
            $post=$function->findById($id);
        }
        catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('This post does not exist');
        }

        if(!$this->isGranted(PostVoter::POST_VIEW, $post)) {
            throw $this->createAccessDeniedException();
        }

        $comment= new Comment();
        $file= new File();
        $comment->addFile($file);
        $comment->setAuthor($this->getUser());

        $form = $this->createForm(new CommentType(), $comment, array(
            'action' => $this->generateUrl('post_detail', array('id' => $id)),
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

            if (strlen($comment->getText()) < 10) {
                $form->get('text')->addError(new FormError('Text musí mít alespoň 10 znaků.'));
            }
            if ($comment->getAuthor()->getName() == null) {
                $form->get('author')->addError(new FormError('Vyplňte prosím jméno.'));
            }

            if ($form->isValid()) {
                $operation->createComment($comment, $post);
            }
        }

        return $this->render('CvutFitBiWT1BlogUiBundle:Post:detail.html.twig', array(
            'post' => $post,
            'form_comment' => $form->createView()
        ));
    }

    /**
     * @Route("/post/{id}/files_delete", name="post_files_delete")
     * @Template
     */
    public function deleteFilesAction($id)
    {
        $function=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        try {
            $post=$function->findById($id);
        }
        catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('This post does not exist');
        }

        if(!$this->isGranted(PostVoter::POST_EDIT, $post)) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('CvutFitBiWT1BlogUiBundle:Post:delete_files.html.twig', array(
            'post' => $post,
        ));

    }

    /**
     *
     * @Route("/post/{id}/delete", name="post_delete")
     */
    public function deleteAction($id)
    {
        $function=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        try {
            $post=$function->findById($id);
        }
        catch (ItemNotFoundException $ex){
            throw $this->createNotFoundException('This post does not exist');
        }

        if(!$this->isGranted(PostVoter::POST_EDIT, $post)) {
            throw $this->createAccessDeniedException();
        }

        $container=$this->get('cvut_fit_biwt1_blog_base.service.operation.post');
        $container->delete($function->findById($id));
        return $this->redirect($this->generateUrl('home'));
    }
}
