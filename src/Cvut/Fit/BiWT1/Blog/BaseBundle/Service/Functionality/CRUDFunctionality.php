<?php
/**
 * Created by PhpStorm.
 * User: jirkovoj
 * Date: 20/11/15
 * Time: 08:41
 */
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\Collection;

trait CRUDFunctionality
{
	/**
	 * @var EntityRepository
	 */
	protected $repository;

	/**
	 * @param EntityRepository $repository
	 */
	public function setRepository($repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @param object $entity
	 * @return object
	 */
	public function create($entity)
	{
		if (method_exists($entity, 'setCreated')) {
			$entity->setCreated(new \DateTime);
		}
		$this->repository->save($entity);
		return $entity;
	}

	/**
	 * @param object $entity
	 * @return object
	 * @throws ItemNotFoundException
	 */
	public function update($entity)
	{
		if (method_exists($entity, 'setModified')) {
			$entity->setModified(new \DateTime);
		}
		$this->repository->save($entity);
		return $entity;
	}

	/**
	 * @param object $entity
	 * @return object
	 * @throws ItemNotFoundException
	 */
	public function delete($entity)
	{
		$this->repository->delete($entity);
		return $entity;
	}

	/**
	 * @param int $id
	 * @return object
	 * @throws ItemNotFoundException
	 */
	public function findById($id)
	{
		$entity = $this->repository->findById($id);
		if(is_object($entity))
			return $entity;

		throw new ItemNotFoundException();
	}

	/**
	 * @return ArrayCollection<object>
	 */
	public function findAll()
	{
		return $this->repository->findAll();
	}
}