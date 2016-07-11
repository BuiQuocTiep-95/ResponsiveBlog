<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/25/15
 * Time: 2:29 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Service\Functionality;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\PostRepository;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\PostFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Test\ServiceTestCase;
use Doctrine\Common\Collections\ArrayCollection;

class PostFunctionalityTest extends ServiceTestCase
{

    /** @var PostFunctionality */
    protected $postFunctionality;

    /** @var PostRepository */
    protected $postRepository;

    public function setUp()
    {
        parent::setUp();
        $this->postFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.post');
        $this->postRepository = $this->container->get('cvut_fit_biwt1_blog_base.entity.repository.post');
    }


    public function testInitialized()
    {
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\PostFunctionality', $this->postFunctionality);
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\PostRepository', $this->postRepository);
    }

    /**
     * @return Post
     */
    public function testCreate()
    {
        $author = $this->_createUser('Harry');
        $now = new \DateTime();

        $firstPost = new Post();
        $firstPost->setTitle('Chapter 1');
        $firstPost->setText('The hottest day of the summer so far was drawing to close...');
        $firstPost->setAuthor($author);
        $firstPost->setCreated($now);
        $firstPost->setModified($now);
        $firstPost->setPublishFrom($now);
        $firstPost->setPublishTo(new \DateTime('2020-06-30'));

        $secondPost = new Post();
        $secondPost->setTitle('Chapter 2');
        $secondPost->setText('Not for the first time, an argument had broken out over breakfast at number four.');
        $secondPost->setAuthor($author);
        $secondPost->setCreated($now);
        $secondPost->setModified($now);
        $secondPost->setPublishFrom($now);
        $secondPost->setPublishTo(new \DateTime('2025-06-30'));

        $this->postFunctionality->create($firstPost);
        $this->postFunctionality->create($secondPost);
        $this->assertGreaterThan(0, $firstPost->getId());
        $this->assertGreaterThan(1, $secondPost->getId());

        return $secondPost;
    }

    /**
     * @depends testCreate
     * @param Post $post
     * @return Post
     */
    public function testFindById(Post $post)
    {
        $this->container->get('doctrine')->getManager()->clear();

        $loadedPost = $this->postFunctionality->findById($post->getId());

        $this->assertEquals($post->getId(), $loadedPost->getId());
        $this->assertEquals($post->getTitle(), $loadedPost->getTitle());

        return $loadedPost;
    }

    public function testExceptionFindById()
    {
        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->postFunctionality->findById(-1);
    }

    /**
     * @depends testFindById
     * @param Post $post
     */
    public function testFindAll(Post $post)
    {
        $found = false;

        foreach ($this->postFunctionality->findAll() as $p) {
            if($p->getId() == $post->getId()) {
                $found = true;
                break;
            }
        }
        $this->assertTrue($found);
    }

    /**
     * @depends testFindById
     * @param Post $post
     * @return Post
     */
    public function testUpdate(Post $post)
    {
        $text = 'Another effect of this simple sentence...';

        $loadedPost = $this->postFunctionality->findById($post->getId());
        $loadedPost->setText($text);
        $this->postFunctionality->update($loadedPost);

        $this->em->refresh($loadedPost);
        $this->assertEquals($text, $loadedPost->getText());

        return $loadedPost;
    }

    /**
     * @depends testUpdate
     * @param Post $post
     */
    public function testDelete(Post $post)
    {
        $id = $post->getId();
        $loadedPost = $this->postFunctionality->findById($post->getId());
        $this->postFunctionality->delete($loadedPost);

        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->postFunctionality->findById($id);
    }

    /**
     * @param Tag $tag
     */
    public function testFindByTag()
    {
        $author = $this->_createUser('Ron');
        $tag = $this->_createTag('Stone');
        $now = new \DateTime();

        $thirdPost = new Post();
        $thirdPost->setTitle('Chapter 3');
        $thirdPost->setText('There was silence as he finished telling story...');
        $thirdPost->setAuthor($author);
        $thirdPost->setCreated($now);
        $thirdPost->setModified($now);
        $thirdPost->setPublishFrom($now);
        $thirdPost->setPublishTo(new \DateTime('2020-06-30'));
        $thirdPost->addTag($tag);
        $this->postFunctionality->create($thirdPost);

        $fourthPost = new Post();
        $fourthPost->setTitle('Chapter 4');
        $fourthPost->setText('Silhouetted against the golden moon...');
        $fourthPost->setAuthor($author);
        $fourthPost->setCreated($now);
        $fourthPost->setModified($now);
        $fourthPost->setPublishFrom($now);
        $fourthPost->setPublishTo(new \DateTime('2020-06-30'));
        $fourthPost->addTag($tag);
        $this->postFunctionality->create($fourthPost);

        /** @var ArrayCollection $result */
        $result = $this->postFunctionality->findByTag($tag);
        $this->assertGreaterThanOrEqual(2, $result->count());

        return $author;
    }

    /**
     * @depends testFindByTag
     * @param User $user
     */
    public function testFindByAuthor(User $user)
    {
        /** @var ArrayCollection $result */
        $result = $this->postFunctionality->findByAuthor($user);
        $this->assertEquals(2, $result->count());
    }
}
