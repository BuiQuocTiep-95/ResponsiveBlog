<?php
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Rss;

use JMS\Serializer\Annotation as JMS;

class Rss
{
    /**
     * @var Channel
     * @JMS\Type("Cvut\Fit\BiWT1\Blog\BaseBundle\Rss\Channel")
     */
    protected $channel;

    /**
     * @return Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }
}