<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 11/18/15
 * Time: 10:35 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\File\FlysystemIntegration;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Comment;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class FileFunctionality
{
    use FlysystemIntegration;
    use CRUDFunctionality;

    /**
     * @param Post $post
     * @return Collection<File>
     */
    public function findByPost(Post $post)
    {
        return new ArrayCollection($this->repository->findBy(['post' => $post]));
    }

    /**
     * @param Comment $comment
     * @return Collection<File>
     */
    public function findByCommment(Comment $comment)
    {
        return new ArrayCollection($this->repository->findBy(['comment' => $comment]));
    }

    public function retrieve(File $file){
        return $file->getData();
    }
}
