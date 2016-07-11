<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 5/31/16
 * Time: 8:52 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Security\API;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\UserFunctionality;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class ApiKeyUserProvider implements UserProviderInterface
{
    /**
     * @var UserFunctionality $userFunctionality
     */
    protected $userFunctionality;

    /**
     * @param mixed $userFunctionality
     */
    public function setUserFunctionality($userFunctionality)
    {
        $this->userFunctionality = $userFunctionality;
    }

    public function getUsernameForApiKey($apiKey)
    {
        // Look up the username based on the token in the database, via
        $user = $this->userFunctionality->findByApiKey($apiKey);
        $username = $user->getName();

        return $username;
    }

    public function loadUserByUsername($username)
    {
        return $this->userFunctionality->findByName($username);
    }

    public function loadUserByApikey($apikey)
    {
        return $this->userFunctionality->findByApiKey($apikey);
    }

    public function refreshUser(UserInterface $user)
    {
        // this is used for storing authentication in the session
        // but in this example, the token is sent in each request,
        // so authentication can be stateless. Throwing this exception
        // is proper to make things stateless
        throw new UnsupportedUserException();
    }

    public function supportsClass($class)
    {
        return 'Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User' === $class;
    }
}