<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 11/18/15
 * Time: 10:35 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\CommentRepository;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;

class CommentFunctionality
{
    /** @var CommentRepository */
    protected $commentRepository;

    /**
     * @param CommentRepository $commentRepository
     */
    public function setRepository($commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    /**
     * @param Comment $comment
     * @return Comment
     */
    public function create(Comment $comment)
    {
        $comment->setCreated(new \DateTime);
        $this->commentRepository->save($comment);
        return $comment;
    }

    /**
     * @param Comment $comment
     * @return Comment
     * @throws ItemNotFoundException
     */
    public function update(Comment $comment)
    {
        try {
            $comment->setModified(new \DateTime);
            $this->commentRepository->save($comment);
            return $comment;
        } catch(ItemNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param Comment $comment
     * @return Comment
     * @throws ItemNotFoundException
     */
    public function delete(Comment $comment)
    {
        try {
            if ($comment->getChildren()) {
                foreach ($comment->getChildren() as $child) {
                    $this->commentRepository->delete($child);
                }
            }
            $this->commentRepository->delete($comment);
            return $comment;
        } catch(ItemNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param int $id
     * @return Comment
     * @throws ItemNotFoundException
     */
    public function findById($id)
    {
        $comment = $this->commentRepository->findById($id);
        if($comment instanceof Comment)
            return $comment;

        throw new ItemNotFoundException();
    }

    /**
     * @return Collection<Comment>
     */
    public function findAll()
    {
        return $this->commentRepository->findAll();
    }

    /**
     * @param Post $user
     * @return Collection<Comment>
     */
    public function findByPost(Post $post)
    {
        return new ArrayCollection($this->commentRepository->findBy(['post' => $post]));
    }

    /**
     * @param User $user
     * @return Collection<Comment>
     */
    public function findByAuthor(User $user)
    {
        return new ArrayCollection($this->commentRepository->findBy(['author' => $user]));
    }
}
