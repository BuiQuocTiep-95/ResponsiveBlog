<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 5/31/16
 * Time: 3:09 PM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Controller;

use Cvut\Fit\BiWT1\Blog\UiBundle\Form\UpdatePostType;
use FOS\RestBundle\Controller\FOSRestController;
use Proxies\__CG__\Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
class FOSPostController extends FOSRestController
{
    /**
     * @param Request $request
     * @return array data
     *
     * @ApiDoc(
     *     description="Finds all posts and serializes them"
     * )
     */
    public function getPostsAction(Request $request)
    {
        $operation=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        $posts=new ArrayCollection($operation->sortedByCreated());

        foreach ($posts as $post) {
            foreach($post->getAuthor()->getPosts() as $del) {
                $post->getAuthor()->removePost($del);
            }
        }

        $_format = $request->get('_format');
        if ($_format == 'json'){
            $serializer = $this->get('jms_serializer');
            $serialized = $serializer->serialize($posts,'json');

        }
        else {
            $serialized = wddx_serialize_value($posts);
        }

        return new Response($serialized);
    }

    /**
     * @param Request $request
     * @param $id
     * @return array data
     * @ApiDoc(
     *     description="Finds one post and serializes it"
     * )
     */
    public function getPostAction(Request $request, $id)
    {
        $operation=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        $post=$operation->findById($id);
        $_format = $request->get('_format');

        foreach($post->getAuthor()->getPosts() as $del) {
            $post->getAuthor()->removePost($del);
        }

        if ($_format == 'json'){
            $serializer = $this->get('jms_serializer');
            $serialized = $serializer->serialize($post,'json');

        }
        else {
            $serialized = wddx_serialize_value($post);
        }

        return new Response($serialized);
    }

    /**
     * @param Request $request
     * @param $id
     * @return array data
     * @ApiDoc(
     *     description="Finds one post and serializes it"
     * )
     */
    public function updatePostAction(Request $request, $id)
    {
        $operation=$this->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        $post=$operation->findById($id);

        $postUpdate = new Post();
        $postForm = $this->createForm(new UpdatePostType(), $postUpdate);

        $postForm->handleRequest($request);

        if ($postForm->isValid()) {
            $functionTag= $this->get('cvut_fit_biwt1_blog_base.service.functionality.tag');
            foreach ($postUpdate->getTags() as $tag) {
                if (!$post->getTags()->contains($tag)){
                    $tag->removePost($post);
                    if (!count($tag->getPosts())) {
                        $functionTag->delete($tag);
                    }
                }
            }


            $operationPost = $this->get('cvut_fit_biwt1_blog_base.service.operation.post');
            $operationPost->updatePost($postUpdate);
        }

        return new Response($serialized);
    }
}