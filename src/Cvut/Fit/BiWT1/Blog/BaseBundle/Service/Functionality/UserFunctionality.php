<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 11/18/15
 * Time: 10:35 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Doctrine\Common\Collections\Collection;


class UserFunctionality
{

    use CRUDFunctionality;

    /**
     * @param string $name
     * @return User
     */

    public function findByName($name)
    {
        $user = $this->repository->findOneBy(array('name' => $name));
        return $user;
    }
    /**
     * @param $apikey
     * @return User
     */

    public function findByApiKey($apikey)
    {
        $user = $this->repository->findOneBy(array('ApiKey' => $apikey));
        return $user;
    }

}
