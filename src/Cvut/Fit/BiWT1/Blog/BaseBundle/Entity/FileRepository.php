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

class FileRepository extends EntityRepository
{
    use CRUD;

}