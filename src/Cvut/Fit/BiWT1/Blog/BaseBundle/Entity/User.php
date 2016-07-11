<?php
/**
 * Created by PhpStorm.
 * User: atrum
 * Date: 10/22/15
 * Time: 10:27 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Class User
 *
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\Table(name="User")
 * @package Cvut\Fit\Ict\Blog_151\BaseBundle\Entity
 */
class User implements UserInterface, \Serializable
{
    /**
     * Unikatni ID prispevku
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="bigint")
     * @var number
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     * @var  string */
    private $name;
    /**
     * @Assert\NotBlank()
     * @ORM\OneToMany(targetEntity="Post", mappedBy="author")
     * @var  Post */
    private $posts;

    private $roles;

    /**
     * @ORM\Column(type="string")
     * @var  string */

    private $password;

    /**
     * @ORM\Column(type="string")
     * @var  string */

    private $ApiKey;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->ApiKey;
    }

    /**
     * @param string $ApiKey
     */
    public function setApiKey($ApiKey)
    {
        $this->ApiKey = $ApiKey;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * User constructor.
     */
    public function __construct(){
        $this->posts=new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return ArrayCollection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    public function addPost($post){
        $this->posts[]=$post;
        return $this;
    }

    public function removePost($post){
        $this->posts->removeElement($post);
        return $this;
    }

    public function addRoles($role) {
        $this->roles[] = $role;
        return $this;
    }

    public function getRoles()
    {
        $roles = $this->roles;

        // Ensure we having something
        $roles[] ='ROLE_USER';

        return array_unique($roles);
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function eraseCredentials()
    {
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->name,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->name,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }


}
