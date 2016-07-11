<?php
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Test;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\PostFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\TagFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\UserFunctionality;

class ServiceTestCase extends ApplicationTestCase
{
    public function _createUser($name)
    {
        $author = new User();
        $author->setName(uniqid($name.'-'));

        /** @var UserFunctionality $authorFunctionality */
        $authorFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.user');
        $author = $authorFunctionality->create($author);

        return $author;
    }

    public function _createPost($title, $text, $author, $tag = null)
    {
        $now = new \DateTime();

        $post = new Post();
        $post->setTitle($title);
        $post->setText($text);
        $post->setAuthor($author);
        $post->setCreated($now);
        $post->setModified($now);
        $post->setPublishFrom($now);
        $post->setPublishTo(new \DateTime('2020-06-30'));
        if ($tag) {
            $post->addTag($tag);
        }

        /** @var PostFunctionality $postFunctionality */
        $postFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        $post = $postFunctionality->create($post);

        return $post;
    }

    public function _createTag($title)
    {
        $tag = new Tag();
        $tag->setTitle($title);

        /** @var TagFunctionality $tagFunctionality */
        $tagFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.tag');
        $tag = $tagFunctionality->create($tag);

        return $tag;
    }
}