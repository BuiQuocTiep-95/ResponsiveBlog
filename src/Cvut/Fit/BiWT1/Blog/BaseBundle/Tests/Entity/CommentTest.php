<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/20/15
 * Time: 10:53 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Entity;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;

class CommentTest extends \PHPUnit_Framework_TestCase
{
    /** @var Comment */
    protected $object;

    protected function setUp()
    {
        $this->object = new Comment();
    }

    public function testId()
    {
        $id = rand(0, 100);
        $this->object->setId($id);
        $this->assertEquals($id, $this->object->getId());
    }

    public function testText()
    {
        $text = 'Text ' . rand(0, 100);
        $this->object->setText($text);
        $this->assertEquals($text, $this->object->getText());
    }

    public function testAuthor()
    {
        $user = new User();
        $this->object->setAuthor($user);
        $this->assertEquals($user, $this->object->getAuthor());
    }

    public function testSpam()
    {
        $spam = true;
        $this->object->setSpam($spam);
        $this->assertEquals($spam, $this->object->isSpam());
    }

    public function testCreated()
    {
        $created = new \DateTime('now');
        $this->object->setCreated($created);
        $this->assertEquals($created, $this->object->getCreated());
    }

    public function testModified()
    {
        $modified = new \DateTime('now');
        $this->object->setModified($modified);
        $this->assertEquals($modified, $this->object->getModified());
    }

    public function testPost()
    {
        $post = new Post();
        $this->object->setPost($post);
        $this->assertEquals($post, $this->object->getPost());
    }

    public function testParent()
    {
        $parent = new Comment();
        $this->object->setParent($parent);
        $this->assertEquals($parent, $this->object->getParent());
    }

    public function testAddChild()
    {
        $comment1 = new Comment();
        $comment1->setText('Comment 1.');
        $comment2 = new Comment();
        $comment2->setText('Comment 2.');

        $this->object->addChild($comment1);
        $this->object->addChild($comment2);

        $this->assertEquals(2, count($this->object->getChildren()->toArray()));

        return [ $this->object, $comment1, $comment2 ];
    }

    /**
     * @depends testAddChild
     */
    public function testRemoveChild($data)
    {
        list($comment, $comment1, $comment2) = $data;
        /** @var Comment $comment */
        $comment->removeChild($comment1);

        $this->assertEquals(1, count($comment->getChildren()->toArray()));
        return $data;
    }

    /**
     * @depends testRemoveChild
     */
    public function testComments($data)
    {
        list($comment, $comment1, $comment2) = $data;
        /** @var Comment $comment */
        $this->assertEquals(1, count($comment->getChildren()->toArray()));
    }

    public function testAddFile()
    {
        $file1 = new File();
        $file1->setName('File1');
        $file2 = new File();
        $file2->setName('File2');

        $this->object->addFile($file1);
        $this->object->addFile($file2);

        $this->assertEquals(2, count($this->object->getFiles()->toArray()));

        return [ $this->object, $file1, $file2 ];
    }

    /**
     * @depends testAddFile
     */
    public function testRemoveFile($data)
    {
        list($comment, $file1, $file2) = $data;
        /** @var Comment $comment */
        $comment->removeFile($file1);

        $this->assertEquals(1, count($comment->getFiles()->toArray()));
        return $data;
    }

    /**
     * @depends testRemoveFile
     */
    public function testFiles($data)
    {
        list($comment, $file1, $file2) = $data;
        /** @var Comment $comment */
        $this->assertEquals(1, count($comment->getFiles()->toArray()));
    }
}