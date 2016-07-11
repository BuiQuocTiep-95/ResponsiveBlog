<?php
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Rss;

use JMS\Serializer\Annotation as JMS;

class Item
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $title;

    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $link;

    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $description;

    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $author;

    /**
     * @var string
     * @JMS\SerializedName("pubDate")
     * @JMS\Type("DateTime<'D, d M Y H:i:s O'>")
     */
    protected $pubDate;

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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

    /**
     * @return string
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * @param string $pubDate
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;
    }
}