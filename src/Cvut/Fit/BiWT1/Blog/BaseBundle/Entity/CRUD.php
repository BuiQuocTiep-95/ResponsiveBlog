<?php
/**
 * Created by PhpStorm.
 * User: kadleto2
 * Date: 20.11.15
 * Time: 9:35
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Common transaction aware CRUD operations
 *
 * Class CRUD
 * @package Cvut\Fit\BiWT1\Blog\BaseBundle\Entity
 */
trait CRUD
{

    /**
     * Notifies UoW and if no transaction is running flushes current state
     * into database.
     *
     * @param $entity
     */
    public function save($entity)
    {
        $this->isSupportedClass($entity);
        $this->getEntityManager()->persist($entity);
        $this->flush($entity);
    }



    /**
     * Notifies UoW and if no transaction is running flushes current state
     * into database.
     *
     * @param $entity
     */
    public function delete($entity)
    {
        $this->isSupportedClass($entity);
        $this->getEntityManager()->remove($entity);
        $this->flush($entity);
    }

    /**
     * @param int $id
     * @return object
     */
    public function findById($id)
    {
        return $this->find($id);
    }

    /**
     * @return Collection<Object>
     */
    public function findAll()
    {
        return new ArrayCollection(parent::findAll());
    }

    protected function isSupportedClass($entity)
    {
        $className = $this->getClassName();
        if (! $entity instanceof $className) {
            throw new \RuntimeException('Unsupported object');
        }
    }

    protected function flush($entity = null)
    {
        if (!$this->getEntityManager()->getConnection()->isTransactionActive())
            $this->getEntityManager()->flush($entity);
    }

}