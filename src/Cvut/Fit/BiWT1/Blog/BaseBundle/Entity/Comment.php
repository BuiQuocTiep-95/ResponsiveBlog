<?php

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Class Comment
 *
 * @ORM\Entity(repositoryClass="CommentRepository")
 * @ORM\Table(name="Comment")
 * @package Cvut\Fit\Ict\Blog_151\BaseBundle\Entity
 */
class Comment
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

	// TODO
	/**
	 * Text (obsah) prispevku
	 *
	 * @ORM\Column(type="string")
	 * @Assert\Length(min=10, minMessage = "Příspěvek musí mít alespoň {{ limit }} znaků.")
	 * @var string
	 */
	private $text;
	/**
	 * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
	 * @var Post */
	private $post;
	/**
	 * @ORM\ManyToOne(targetEntity="Comment", inversedBy="children")
	 * @var  Comment */
	private $parent;
	/**
	 * @ORM\OneToMany(targetEntity="Comment", mappedBy="parent")
	 * @var  ArrayCollection */
	private $children;
	/**
	 * @ORM\ManyToOne(targetEntity="User", cascade="persist")
	 * @var  string */
	private $author;
	/**
	 * @ORM\Column(type="datetime")
	 * @var  \DateTime */
	private $created;
	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var  \DateTime */
	private $modified;
	/**
	 * @ORM\OneToMany(targetEntity="File", mappedBy="comment", cascade={"persist", "remove"})
	 * @var  Collection<File> */

	private $files;
	/**
	 * @ORM\Column(type="string", nullable=true)
	 * @var  boolean */
	private $spam;

	public function __construct () {
		$this->children=new ArrayCollection();
		$this->files=new ArrayCollection();
		$this->created=new \DateTime();
		$this->modified=new \DateTime();
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
	public function getText()
	{
		return $this->text;
	}

	/**
	 * @param string $text
	 */
	public function setText($text)
	{
		$this->text = $text;
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
	 * @return ArrayCollection
	 */
	public function getFiles()
	{
		return $this->files;
	}

	public function addFile(File $file)
	{
		$this->files[]=$file;
		$file->setComment($this);
		return $this;
	}

	/**
	 * @param File $file
	 *
	 * @return Comment
	 */

	public function removeFile(File $file)
	{
		$this->files->removeElement($file);
		return $this;
	}

	public function showComment()
	{
		echo "\t$this->text";
		echo "\tSoubory: ";
		foreach ($this->files as $i => $key){
			$key->showFileDetails();
		}
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
	 * @return \DateTime
	 */
	public function getModified()
	{
		return $this->modified;
	}

	/**
	 * @param \DateTime $modified
	 */
	public function setModified($modified)
	{
		$this->modified = $modified;
	}

	/**
	 * @return boolean
	 */
	public function isSpam()
	{
		return $this->spam;
	}

	/**
	 * @param boolean $spam
	 */
	public function setSpam($spam)
	{
		$this->spam = $spam;
	}

	/**
	 * @return Comment
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * @param Comment $parent
	 */
	public function setParent($parent)
	{
		$this->parent = $parent;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getChildren()
	{
		return $this->children;
	}

	/**
	 * @return string
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @param string $author
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function addChild($child){
		$this->children[]=$child;
		return $this;
	}

	public function removeChild($child){
		$this->children->removeElement($child);
		return $this;
	}







}