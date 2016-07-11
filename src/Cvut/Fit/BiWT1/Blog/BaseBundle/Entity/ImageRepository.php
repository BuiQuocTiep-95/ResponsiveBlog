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

class ImageRepository extends EntityRepository
{
    use CRUD;

    /**
     * @param int $id
     * @return Image
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @param Image $image
     */
    public function save(Image $image)
    {
        $this->getEntityManager()->persist($image);
        $this->getEntityManager()->flush();
    }

    /**
     * @param Image $image
     */
    public function delete(Image $image)
    {
        $this->getEntityManager()->remove($image);
        $this->getEntityManager()->flush();
    }

    /**
     * @return Collection<Image>
     */
    public function findAll()
    {
        return new ArrayCollection(parent::findAll());
    }
}