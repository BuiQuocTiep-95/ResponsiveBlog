<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/11/16
 * Time: 5:31 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Operation;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\PostFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\FileFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\CommentFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\UserFunctionality;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class CommentOperation
{
    /**
     * @var PostFunctionality
     */
    protected $postFunctionality;

    /**
     * @var FileFunctionality
     */
    protected $fileFunctionality;

    /**
     * @var commentFunctionality
     */
    protected $commentFunctionality;

    /**
     * @var UserFunctionality
     */
    protected $userFunctionality;

    /**
     * @var FileOperation
     */
    protected $fileOperation;

    /**
     * @param FileOperation $fileOperation
     */
    public function setFileOperation($fileOperation)
    {
        $this->fileOperation = $fileOperation;
    }

    /**
     * @param PostFunctionality $postFunctionality
     */
    public function setPostFunctionality($postFunctionality)
    {
        $this->postFunctionality = $postFunctionality;
    }

    /**
     * @param FileFunctionality $fileFunctionality
     */
    public function setFileFunctionality($fileFunctionality)
    {
        $this->fileFunctionality = $fileFunctionality;
    }

    /**
     * @param commentFunctionality $commentFunctionality
     */
    public function setCommentFunctionality($commentFunctionality)
    {
        $this->commentFunctionality = $commentFunctionality;
    }

    /**
     * @param UserFunctionality $userFunctionality
     */
    public function setUserFunctionality($userFunctionality)
    {
        $this->userFunctionality = $userFunctionality;
    }

    /**
     * @param Comment $comment
     * @param Post $post
     */

    public function createComment(Comment $comment, Post $post) {
        $user=$this->userFunctionality->findByName($comment->getAuthor()->getName());
        if ($user!=null) {
            $comment->setAuthor($user);
        }
        $comment->setPost($post);
        $post->addComment($comment);

        $this->commentFunctionality->create($comment);
    }

    /**
     * @param Comment $comment
     * @param Comment $parent
     */

    public function createReply(Comment $comment, Comment $parent) {
        $user=$this->userFunctionality->findByName($comment->getAuthor()->getName());
        if ($user!=null) {
            $comment->setAuthor($user);
        }
        $comment->setParent($parent);
        $parent->addChild($comment);

        $this->commentFunctionality->create($comment);
    }

    /**
     * @param Comment $comment
     * @return mixed
     */

    public function update( Comment $comment)
    {
        $user=$this->userFunctionality->findByName($comment->getAuthor()->getName());
        if ($user!=null) {
            $comment->setAuthor($user);
        }

        $this->commentFunctionality->update($comment);

        return $comment;
    }

    /**
     * @param Comment $comment
     * @param $files
     * @return mixed
     */

    public function addFiles(Comment $comment, $files)
    {
        foreach ($files as $file) {
            if ($file->getData() == null) {
                $comment->removeFile($file);
                continue;
            }
            $processed = $this->fileOperation->process($file->getData());

            if ($processed == null) return 2;
            $comment->removeFile($file);

            $this->fileFunctionality->create($processed);
            $comment->addFile($processed);
        }
        return 0;
    }
}