<?php

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\BlobType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Image
 *
 * @ORM\Entity(repositoryClass="ImageRepository")
 * @ORM\Table(name="Image")
 * @package Cvut\Fit\Ict\Blog_151\BaseBundle\Entity
 */

class Image extends File {
    /**
     * @ORM\Column(type="integer")
     * @var  number
     */
    private $dimensionX;
    /**
     * @ORM\Column(type="integer")
     * @var  number
     */
    private $dimensionY;
    /**
     * @ORM\Column(type="blob")
     * @var  string
     */
    private $preview;

    /**
     * @return mixed
     */
    public function getDimensionX() {
        return $this->dimensionX;
    }
    /**
     * @param mixed $dimensionX
     */
    public function setDimensionX($dimensionX){
        $this->dimensionX=$dimensionX;
    }
    /**
     * @return mixed
     */
    public function getDimensionY() {
        return $this->dimensionY;
    }
    /**
     * @param mixed $dimensionY
     */
    public function setDimensionY($dimensionY) {
        $this->dimensionY=$dimensionY;
    }
    /**
     * @return mixed
     */
    public function getPreview() {
        return $this->preview;
    }
    /**
     * @param mixed $preview
     */
    public function setPreview($preview){
        $this->preview=$preview;
    }

    public function showFileDetails() {
        echo "\t", $this->getName(), ", ", $this->dimensionX, " x ", $this->dimensionY, "\n";
    }


}