<?php

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class File
 *
 * @ORM\Entity(repositoryClass="FileRepository")
 * @ORM\Table(name="File")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"file" = "File", "image" = "Image"})
 * @package Cvut\Fit\Ict\Blog_151\BaseBundle\Entity
 */

class File
{
	/**
	 * Unikatni ID prispevku
	 *
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="bigint")
	 * @var number
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string")
	 * @var  string */
	private $name;
	/**
	 * @ORM\ManyToOne(targetEntity="Post", inversedBy="files", cascade={"persist"})
	 * @var  Post */
	private $post;
	/**
	 * @ORM\ManyToOne(targetEntity="Comment", inversedBy="files", cascade={"persist"})
	 * @var  Comment */
	private $comment;
	/**
	 * @ORM\Column(type="datetime")
	 * @var  \DateTime */
	private $created;
	/**
	 * @ORM\Column(type="string", nullable=true)
	 * @var  string */
	private $internetMediaType;
	/**
	 * @ORM\Column(type="blob")
	 * @var  string
	 */
	private $data;

	/**
	 * File constructor.
	 */
	public function __construct()
	{
		$this->created=new \DateTime();
	}


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return Post
	 */
	public function getPost()
	{
		return $this->post;
	}

	/**
	 * @param Post $post
	 */
	public function setPost($post)
	{
		$this->post = $post;
	}

	/**
	 * @return Comment
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * @param Comment $comment
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreated()
	{
		return $this->created;
	}

	/**
	 * @param \DateTime $created
	 */
	public function setCreated($created)
	{
		$this->created = $created;
	}

	/**
	 * @return string
	 */
	public function getInternetMediaType()
	{
		return $this->internetMediaType;
	}

	/**
	 * @param string $internetMediaType
	 */
	public function setInternetMediaType($internetMediaType)
	{
		$this->internetMediaType = $internetMediaType;
	}

	/**
	 * @return string
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * @param string $data
	 */
	public function setData($data)
	{
		$this->data = $data;
	}



}