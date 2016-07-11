<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 9/16/15
 * Time: 1:45 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Service\Functionality;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\UserRepository;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\UserFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Test\ServiceTestCase;

class UserFunctionalityTest extends ServiceTestCase
{
    /** @var UserFunctionality */
    protected $userFunctionality;

    /** @var UserRepository */
    protected $userRepository;

    public function setUp()
    {
        parent::setUp();
        $this->userFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.user');
        $this->userRepository = $this->container->get('cvut_fit_biwt1_blog_base.entity.repository.user');
    }

    public function testInitialized()
    {
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\UserFunctionality', $this->userFunctionality);
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\UserRepository', $this->userRepository);
    }

    /**
     * @return User
     */
    public function testCreate()
    {
        $user = new User();
        $user->setName('Draco');

        $this->userFunctionality->create($user);
        $this->assertGreaterThan(0, $user->getId());

        return $user;
    }

    /**
     * @depends testCreate
     * @param User $user
     * @return User
     */
    public function testFindById(User $user)
    {
        $this->container->get('doctrine')->getManager()->clear();

        $loadedUser = $this->userFunctionality->findById($user->getId());

        $this->assertEquals($user->getId(), $loadedUser->getId());
        $this->assertEquals($user->getName(), $loadedUser->getName());

        return $loadedUser;
    }

    public function testExceptionFindById()
    {
        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->userFunctionality->findById(-1);
    }

    /**
     * @depends testFindById
     * @param User $user
     */
    public function testFindAll(User $user)
    {
        $found = false;

        foreach ($this->userFunctionality->findAll() as $u) {
            if($u->getId() == $user->getId()) {
                $found = true;
                break;
            }
        }
        $this->assertTrue($found);
    }

    /**
     * @depends testFindById
     * @param User $user
     * @return User
     */
    public function testUpdate(User $user)
    {
        $name = 'Rita';

        $loadedUser = $this->userFunctionality->findById($user->getId());
        $loadedUser->setName($name);
        $this->userFunctionality->update($loadedUser);

        $this->em->refresh($loadedUser);
        $this->assertEquals($name, $loadedUser->getName());

        return $loadedUser;
    }

    /**
     * @depends testFindById
     * @param User $user
     */
    public function testDelete(User $user)
    {
        $id = $user->getId();
        $loadedUser = $this->userFunctionality->findById($user->getId());
        $this->userFunctionality->delete($loadedUser);

        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->userFunctionality->findById($id);
    }
}
