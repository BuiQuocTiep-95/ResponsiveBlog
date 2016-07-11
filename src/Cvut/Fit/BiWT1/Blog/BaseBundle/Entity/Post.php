<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/18/15
 * Time: 10:04 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Post
 *
 * @ORM\Entity(repositoryClass="PostRepository")
 * @ORM\Table(name="Post")
 * @package Cvut\Fit\Ict\Blog_151\BaseBundle\Entity
 * @JMS\ExclusionPolicy("all")
 */
class Post
{
    /**
     * Unikatni ID prispevku
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="bigint")
     * @var number
     * @JMS\Expose()
     */
    protected $id;

    /**
     * Titulek prispevku
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message = "Tato položka nesmí být prázdná.")
     * @var string
     * @JMS\Expose()
     */
    protected $title;

    /**
     * Text (obsah) prispevku
     *
     * @ORM\Column(type="string", length=1000)
     * @Assert\Length(min=10, minMessage = "Příspěvek musí mít alespoň {{ limit }} znaků.")
     * @var string
     * @JMS\Expose()
     */
    protected $text;

    /**
     * Autor prispevku
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts", cascade={"persist"})
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * @var User
     * @JMS\Expose()
     */
    protected $author;

    /**
     * Soukromi prispevku
     *
     * @ORM\Column(type="boolean")
     * @var boolean
     * @JMS\Expose()
     */
    protected $private = false;

    /**
     * Datum vytvoreni prispevku
     *
     * @ORM\Column(type="datetime")
     * @var \Datetime
     * @JMS\Expose()
     */
    protected $created;

    /**
     * Datum posledni zmeny prispevku
     *
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     * @JMS\Expose()
     */
    protected $modified;

    /**
     * Viditelnost prispevku (od)
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime()
     * @var \Datetime
     * @JMS\Expose()
     */
    protected $publishFrom;

    /**
     * Viditelnost prispevku (do)
     *
     * @ORM\Column(type="datetime")
     * @Assert\DateTime()
     * @var \Datetime
     * @JMS\Expose()
     */
    protected $publishTo;

    /**
     * Kolekce komentaru prispevku
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="post", cascade="remove")
     * @var Collection<Comment>
     * @JMS\Expose()
     */
    protected $comments;

    /**
     * Kolekce souboru prispevku
     *
     * @ORM\OneToMany(targetEntity="File", mappedBy="post", cascade={"persist", "remove"})
     * @var Collection<File>
     * @JMS\Expose()
     */
    protected $files;

    /**
     * Kolekce tagu prispevku
     *
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="posts", cascade={"persist"})
     * @ORM\JoinTable(
     *     name="post_tags",
     *     joinColumns={@ORM\JoinColumn(name="post_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")
     * })
     * @var Collection
     * @JMS\Expose()
     */
    protected $tags;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->comments=new ArrayCollection();
        $this->files=new ArrayCollection();
        $this->tags=new ArrayCollection();
        $this->created=new \DateTime();
        $this->modified=new \DateTime();
        $this->publishFrom=new \DateTime();
        $this->publishTo=new \DateTime();
        $this->id=null;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return array
     */
    public function getComments()
    {
        return $this->comments;
    }

    public function addComment(Comment $comment)
    {
        $this->comments[]=$comment;
        $comment->setPost($this);
        return $this;
    }

    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
        return $this;
    }

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    public function addFile(File $file)
    {
        $this->files[]=$file;
        $file->setPost($this);
        return $this;
    }

    public function removeFile(File $file)
    {
        $this->files->removeElement($file);
        return $this;
    }

    public function showPost()
    {
        echo "Nazev: $this->title";
        echo "Text: $this->text";
        echo "Komentare:";
        foreach ($this->comments as $i => $key){
            $key->showComment();
        }
        echo "Soubory:";
        foreach ($this->files as $i => $key){
            $key->showFileDetails();
        }
    }

    /**
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return boolean
     */
    public function isPrivate()
    {
        return $this->private;
    }

    /**
     * @param boolean $private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * @return \Datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \Datetime $created
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
     * @return \Datetime
     */
    public function getPublishFrom()
    {
        return $this->publishFrom;
    }

    /**
     * @param \Datetime $publishFrom
     */
    public function setPublishFrom($publishFrom)
    {
        $this->publishFrom = $publishFrom;
    }

    /**
     * @return \Datetime
     */
    public function getPublishTo()
    {
        return $this->publishTo;
    }

    /**
     * @param \Datetime $publishTo
     */
    public function setPublishTo($publishTo)
    {
        $this->publishTo = $publishTo;
    }

    public function addTag($tag){
        if ($this->tags->contains($tag)) return $this;
        $this->tags[]=$tag;
        return $this;
    }

    public function removetag($tag){
        $this->tags->removeElement($tag);
        return $this;
    }

    /**
     * @return Collection
     */
    public function getTags()
    {
        return $this->tags;
    }






    // TODO - Add constructor, getter and setter methods.

}
