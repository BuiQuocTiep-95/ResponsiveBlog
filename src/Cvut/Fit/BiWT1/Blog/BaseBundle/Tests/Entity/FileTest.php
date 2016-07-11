<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/25/15
 * Time: 1:16 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Entity;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;

class FileTest extends \PHPUnit_Framework_TestCase
{
    /** @var File */
    protected $object;

    protected function setUp()
    {
        $this->object = new File();
    }

    public function testId()
    {
        $id = rand(0, 100);
        $this->object->setId($id);
        $this->assertEquals($id, $this->object->getId());
    }

    public function testName()
    {
        $name = 'Name' . rand(0, 100);
        $this->object->setName($name);
        $this->assertEquals($name, $this->object->getName());
    }

    public function testCreated()
    {
        $created = new \DateTime('now');
        $this->object->setCreated($created);
        $this->assertEquals($created, $this->object->getCreated());
    }

    public function testInternetMediaType()
    {
        $internetMediaType = 'Type' . rand(1, 100);
        $this->object->setInternetMediaType($internetMediaType);
        $this->assertEquals($internetMediaType, $this->object->getInternetMediaType());
    }

    public function testData()
    {
        $data = '010010010100010';
        $this->object->setData($data);
        $this->assertEquals($data, $this->object->getData());
    }

    public function testPost()
    {
        $post = new Post();
        $this->object->setPost($post);
        $this->assertEquals($post, $this->object->getPost());
    }

    public function testComment()
    {
        $comment = new Comment();
        $this->object->setComment($comment);
        $this->assertEquals($comment, $this->object->getComment());
    }
}