<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 8/25/15
 * Time: 1:18 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Entity;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Image;

class ImageTest extends FileTest
{
    /** @var Image */
    protected $object;

    protected function setUp()
    {
        $this->object = new Image();
    }

    public function testDimensionX()
    {
        $dimensionX = rand(0, 100);
        $this->object->setDimensionX($dimensionX);
        $this->assertEquals($dimensionX, $this->object->getDimensionX());
    }

    public function testDimensionY()
    {
        $dimensionY = rand(0, 100);
        $this->object->setDimensionY($dimensionY);
        $this->assertEquals($dimensionY, $this->object->getDimensionY());
    }

    public function testPreview()
    {
        $preview = '010010010100010';
        $this->object->setPreview($preview);
        $this->assertEquals($preview, $this->object->getPreview());
    }
}