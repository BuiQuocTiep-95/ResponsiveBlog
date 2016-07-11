<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 11/18/15
 * Time: 10:35 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PostFunctionality
{
    use CRUDFunctionality;

    /**
     * @param Tag $tag
     * @return Collection<Post>
     */
    public function findByTag(Tag $tag)
    {
        $result = new ArrayCollection();
        $posts = $this->findAll();

        /** @var Post $post */
        foreach($posts as $post) {
            if ($post->getTags()->contains($tag)) {
                $result->add($post);
            }
        }
        return $result;
    }

    /**
     * @param User $user
     * @return Collection<Post>
     */
    public function findByAuthor(User $user)
    {
        return new ArrayCollection($this->repository->findBy(['author' => $user]));
    }

    public function sortedByCreated () {
        $query=$this->repository->createQueryBuilder('p')
                ->orderBy('p.created','DESC')
                ->getQuery()
                ->getResult();
        return $query;
    }
}
