<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/18/15
 * Time: 10:00 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{

    use CRUD;

}