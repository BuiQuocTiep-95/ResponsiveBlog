<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/18/15
 * Time: 10:00 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityRepository;

class CommentRepository extends EntityRepository
{
    /**
     * @param int $id
     * @return Comment
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @param Comment $comment
     */
    public function save(Comment $comment)
    {
        $this->getEntityManager()->persist($comment);
        $this->getEntityManager()->flush();
    }

    /**
     * @param Comment $comment
     */
    public function delete(Comment $comment)
    {
        foreach ($comment->getChildren() as $child) {
            $this->getEntityManager()->remove($child);
        }
        $this->getEntityManager()->remove($comment);
            $this->getEntityManager()->flush();
    }

    /**
     * @return Collection<Comment>
     */
    public function findAll()
    {
        return new ArrayCollection(parent::findAll());
    }
}