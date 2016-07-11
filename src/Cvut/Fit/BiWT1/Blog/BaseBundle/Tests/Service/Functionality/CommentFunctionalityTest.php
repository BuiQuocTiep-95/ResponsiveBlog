<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 9/16/15
 * Time: 1:42 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Service\Functionality;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\CommentRepository;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\CommentFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Test\ServiceTestCase;
use Doctrine\Common\Collections\ArrayCollection;

class CommentFunctionalityTest extends ServiceTestCase
{
    /** @var CommentFunctionality */
    protected $commentFunctionality;

    /** @var CommentRepository */
    protected $commentRepository;

    public function setUp()
    {
        parent::setUp();
        $this->commentFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.comment');
        $this->commentRepository = $this->container->get('cvut_fit_biwt1_blog_base.entity.repository.comment');
    }

    public function testInitialized()
    {
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\CommentFunctionality', $this->commentFunctionality);
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\CommentRepository', $this->commentRepository);
    }

    /**
     * @return Comment
     */
    public function testCreate()
    {
        $author = $this->_createUser('Hermione');
        $post = $this->_createPost('Chapter 5', 'It was nearing midnight...', $author);
        $now = new \DateTime();

        $firstComment = new Comment();
        $firstComment->setText('Five minutes later he was dashing past the security...');
        $firstComment->setAuthor($author);
        $firstComment->setCreated($now);
        $firstComment->setModified($now);
        $firstComment->setSpam(false);
        $firstComment->setPost($post);

        $this->commentFunctionality->create($firstComment);
        $this->assertGreaterThan(0, $firstComment->getId());

        return $firstComment;
    }

    /**
     * @depends testCreate
     * @param Comment $comment
     * @return Comment
     */
    public function testFindById(Comment $comment)
    {
        $this->container->get('doctrine')->getManager()->clear();

        $loadedComment = $this->commentFunctionality->findById($comment->getId());

        $this->assertEquals($comment->getId(), $loadedComment->getId());
        $this->assertEquals($comment->getText(), $loadedComment->getText());

        return $loadedComment;
    }

    public function testExceptionFindById()
    {
        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->commentFunctionality->findById(-1);
    }

    /**
     * @depends testFindById
     * @param Comment $comment
     */
    public function testFindAll(Comment $comment)
    {
        $found = false;

        foreach ($this->commentFunctionality->findAll() as $c) {
            if($c->getId() == $comment->getId()) {
                $found = true;
                break;
            }
        }
        $this->assertTrue($found);
    }

    /**
     * @depends testFindById
     * @param Comment $comment
     * @return Comment
     */
    public function testUpdate(Comment $comment)
    {
        $text = 'Another day he would find his way more quickly than before.';

        $loadedComment = $this->commentFunctionality->findById($comment->getId());
        $loadedComment->setText($text);
        $this->commentFunctionality->update($loadedComment);

        $this->em->refresh($loadedComment);
        $this->assertEquals($text, $loadedComment->getText());

        return $loadedComment;
    }

    /**
     * @depends testFindById
     * @param Comment $comment
     */
    public function testDelete(Comment $comment)
    {
        $id = $comment->getId();
        $loadedComment = $this->commentFunctionality->findById($comment->getId());
        $this->commentFunctionality->delete($loadedComment);

        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->commentFunctionality->findById($id);
    }


    public function testFindByPost()
    {
        $author = $this->_createUser('Ginny');
        $post = $this->_createPost('Chapter 6', 'And unfortunately, this was perfectly true.', $author);
        $now = new \DateTime();

        $secondComment = new Comment();
        $secondComment->setText('The darkness seems to be rippling...');
        $secondComment->setAuthor($author);
        $secondComment->setCreated($now);
        $secondComment->setModified($now);
        $secondComment->setSpam(false);
        $secondComment->setPost($post);

        $this->commentFunctionality->create($secondComment);

        /** @var ArrayCollection $result */
        $result = $this->commentFunctionality->findByPost($post);
        $this->assertNotEmpty($result);
    }

}
