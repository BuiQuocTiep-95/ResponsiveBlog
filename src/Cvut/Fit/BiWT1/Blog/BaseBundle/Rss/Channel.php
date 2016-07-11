<?php
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Rss;

use JMS\Serializer\Annotation as JMS;

class Channel
{
    /**
     * @var Item[]
     * @JMS\Type("array<Cvut\Fit\BiWT1\Blog\BaseBundle\Rss\Item>")
     * @JMS\XmlList(inline=true, entry="item")
     */
    protected $item;

    /**
     * @return Item[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Item[] $item
     */
    public function setItem($item)
    {
        $this->item = $item;
    }


}