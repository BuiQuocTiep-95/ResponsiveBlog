<?php
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Doctrine;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Exception\ConstraintViolationException;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class handles transaction control and allows to commit only a part of Unit of Work.
 *
 * Example usage:
 *
 * $transaction = ... retrieve instance of this class ...
 * $transaction->begin()
 * // ... entity manipulation ...
 * $transaction->commit()
 *
 * Every call to flush() should be avoided, if a transaction is running. It can be achieved
 * easily using:
 *
 *   $entityManager->getConnection()->isTransactionActive()
 *
 * !!! WARNING !!!
 * Unit of Work commits all scheduled INSERTs (persist()) and DELETEs (remove())
 * on every flush() call. It does not respect an optional $entity argument. Changes
 * on already persisted entities can be delayed this way!
 *
 * Created by PhpStorm.
 * User: kadleto2
 * Date: 20.11.15
 * Time: 6:53
 */
class Transaction
{

    /**
     * @var Collection
     */
    protected $entities;

    /**
     * @var RegistryInterface
     */
    protected $registry;

    /**
     * Transaction constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        $this->registry = $registry;
        $this->entities = new ArrayCollection();
    }

    /**
     * Adds an entity to current transaction. Beware! Applies on entities those have 
     * a persistent database state already only. New and to be removed entities are 
     * allways synced to the database.
     *
     * @param $entity
     * @return $this
     */
    public function register($entity)
    {
        if ($this->registry->getEntityManager()->contains($entity)) {
            $this->entities->add($entity);
            return $this;
        } else {
            throw new \RuntimeException("Entity is not managed!");
        }
    }

    /**
     * Starts a new transaction
     */
    public function begin()
    {
        $this->registry->getEntityManager()->beginTransaction();
    }

    /**
     * Commits running transaction
     *
     * @param bool|true $all if true commit all changes in Unit of Work otherwise 
     *                       commit only "registered" changes.
     */
    public function commit($all = true)
    {
        try {
            if ($all) {
                $this->registry->getEntityManager()->flush();
            } else if (!$this->entities->isEmpty()) {
                $this->registry->getEntityManager()->flush($this->entities->toArray());
            } else {
                throw new \RuntimeException('Nothing to commit!');
            }
            $this->registry->getEntityManager()->commit();
        } catch(ConstraintViolationException $e) {
            $this->rollback();
            throw $e;
        }
    }

    /**
     * Rollbacks running transaction
     */
    public function rollback()
    {
        $this->registry->getEntityManager()->rollback();
    }

    /**
     * Clears Unit of Work
     */
    public function clear()
    {
        $this->registry->getEntityManager()->clear();
    }

}