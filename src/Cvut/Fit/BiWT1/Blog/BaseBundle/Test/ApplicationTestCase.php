<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 9/23/15
 * Time: 11:01 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Test;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\SecurityContextInterface;

class ApplicationTestCase extends WebTestCase {

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var SecurityContextInterface
     */
    protected $securityContext;

    /**
     * FIXME!
     *
     * @return
     */
    protected function getUser()
    {
        return null;
    }

    /**
     * Inicializace security contextu s nastavenym uzivatelem
     */
    protected function initSecurityContext()
    {
        $user = $this->getUser();
        $this->securityContext->setToken(
            new UsernamePasswordToken(
                $user, null, 'main', $user->getRoles()
            )
        );
    }

    protected function setUp() {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $container = static::$kernel->getContainer();
        $this->container = $container;

        $this->em = $container->get('doctrine')->getManager();
        $this->securityContext = $container->get('security.context');
    }

    protected function tearDown() {
        parent::tearDown();
//        static::$kernel->shutdown();
    }

}