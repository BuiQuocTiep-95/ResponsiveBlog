<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/25/15
 * Time: 1:18 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Entity;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;

class TagTest extends \PHPUnit_Framework_TestCase
{
    /** @var Tag */
    protected $object;

    protected function setUp()
    {
        $this->object = new Tag();
    }

    public function testId()
    {
        $id = rand(0, 100);
        $this->object->setId($id);
        $this->assertEquals($id, $this->object->getId());
    }

    public function testTitle()
    {
        $title = 'Title ' . rand(0, 100);
        $this->object->setTitle($title);
        $this->assertEquals($title, $this->object->getTitle());
    }

    public function testAddPost()
    {
        $post1 = new Post();
        $post1->setTitle('Post 1.');
        $post2 = new Post();
        $post2->setTitle('Post 2.');

        $this->object->addPost($post1);
        $this->object->addPost($post2);

        $this->assertEquals(2, count($this->object->getPosts()->toArray()));

        return [ $this->object, $post1, $post2 ];
    }

    /**
     * @depends testAddPost
     */
    public function testRemovePost($data)
    {
        list($tag, $post1, $post2) = $data;
        /** @var Tag $tag */
        $tag->removePost($post1);

        $this->assertEquals(1, count($tag->getPosts()->toArray()));
        return $data;
    }

    /**
     * @depends testRemovePost
     */
    public function testPost($data)
    {
        list($tag, $post1, $post2) = $data;
        /** @var Tag $tag */
        $this->assertEquals(1, count($tag->getPosts()->toArray()));
    }
}