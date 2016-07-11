<?php
/**
 * Created by PhpStorm.
 * User: atrum
 * Date: 10/22/15
 * Time: 10:34 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Class Tag
 *
 * @ORM\Entity(repositoryClass="TagRepository")
 * @ORM\Table(name="Tag")
 * @package Cvut\Fit\Ict\Blog_151\BaseBundle\Entity
 */
class Tag
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
     * @Assert\NotBlank(message = "Tato položka nesmí být prázdná.")
     * @var string
     */
    private $title;
    /**
     * @ORM\ManyToMany(targetEntity="Post", mappedBy="tags", cascade={"persist"})
     * @var  Post */
    private $posts;

    /**
     * Tag constructor.
     */
    public function __construct()
    {
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param $post
     * @return Tag
     */
    public function addPost($post){
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
        }
        return $this;
    }

    /**
     * @param $post
     * @return Tag
     */
    public function removePost($post){
        $this->posts->removeElement($post);
        return $this;
    }


}