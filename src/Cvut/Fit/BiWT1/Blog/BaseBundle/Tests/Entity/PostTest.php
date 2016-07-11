<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/19/15
 * Time: 12:22 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Entity;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;

class PostTest extends \PHPUnit_Framework_TestCase
{
    /** @var Post */
    protected $object;

    protected function setUp()
    {
        $this->object = new Post();
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

    public function testPrivate()
    {
        $private = true;
        $this->object->setPrivate($private);
        $this->assertEquals($private, $this->object->isPrivate());
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

    public function testPublishFrom()
    {
        $publishFrom = new \DateTime('now');
        $this->object->setPublishFrom($publishFrom);
        $this->assertEquals($publishFrom, $this->object->getPublishFrom());
    }

    public function testPublishTo()
    {
        $publishTo = new \DateTime('now');
        $this->object->setPublishTo($publishTo);
        $this->assertEquals($publishTo, $this->object->getPublishTo());
    }

    public function testAddComment()
    {
        $comment1 = new Comment();
        $comment1->setText('Comment 1.');
        $comment2 = new Comment();
        $comment2->setText('Comment 2.');

        $this->object->addComment($comment1);
        $this->object->addComment($comment2);

        $this->assertEquals(2, count($this->object->getComments()->toArray()));

        return [ $this->object, $comment1, $comment2 ];
    }

    /**
     * @depends testAddComment
     */
    public function testRemoveComment($data)
    {
        list($post, $comment1, $comment2) = $data;
        /** @var Post $post */
        $post->removeComment($comment1);

        $this->assertEquals(1, count($post->getComments()->toArray()));
        return $data;
    }

    /**
     * @depends testRemoveComment
     */
    public function testComments($data)
    {
        list($post, $comment1, $comment2) = $data;
        /** @var Post $post */
        $this->assertEquals(1, count($post->getComments()->toArray()));
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
        list($post, $file1, $file2) = $data;
        /** @var Post $post */
        $post->removeFile($file1);

        $this->assertEquals(1, count($post->getFiles()->toArray()));
        return $data;
    }

    /**
     * @depends testRemoveFile
     */
    public function testFiles($data)
    {
        list($post, $file1, $file2) = $data;
        /** @var Post $post */
        $this->assertEquals(1, count($post->getFiles()->toArray()));
    }

    public function testAddTag()
    {
        $tag1 = new Tag();
        $tag1->setTitle('Tag1');
        $tag2 = new Tag();
        $tag2->setTitle('Tag2');

        $this->object->addTag($tag1);
        $this->object->addTag($tag2);

        $this->assertEquals(2, count($this->object->getTags()->toArray()));

        return [ $this->object, $tag1, $tag2 ];
    }

    /**
     * @depends testAddTag
     */
    public function testRemoveTag($data)
    {
        list($post, $tag1, $tag2) = $data;
        /** @var Post $post */
        $post->removeTag($tag1);

        $this->assertEquals(1, count($post->getTags()->toArray()));
        return $data;
    }

    /**
     * @depends testRemoveTag
     */
    public function testTag($data)
    {
        list($post, $tag1, $tag2) = $data;
        /** @var Post $post */
        $this->assertEquals(1, count($post->getTags()->toArray()));
    }
}