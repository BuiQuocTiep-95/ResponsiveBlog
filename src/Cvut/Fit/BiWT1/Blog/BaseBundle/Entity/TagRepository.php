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

class TagRepository extends EntityRepository
{
    use CRUD;

    /**
     * @param string $title
     * @return Tag $tag
     */
    public function findByTitle($title)
    {
        $help=$this->findOneBy(array('title' => $title));
        return $help;
    }
}