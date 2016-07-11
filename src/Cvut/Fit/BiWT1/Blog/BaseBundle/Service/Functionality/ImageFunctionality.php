<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 11/18/15
 * Time: 10:35 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Image;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\ImageRepository;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException;
use Doctrine\Common\Collections\Collection;

class ImageFunctionality
{
    /** @var ImageRepository */
    protected $imageRepository;

    /**
     * @param ImageRepository $imageRepository
     */
    public function setRepository($imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * @param Image $image
     * @return Image
     */
    public function create(Image $image)
    {
        $post->setCreated(new \DateTime);
        $this->imageRepository->save($image);
        return $image;
    }

    /**
     * @param Image $image
     * @return Image
     * @throws ItemNotFoundException
     */
    public function update(Image $image)
    {
        try {
            $this->imageRepository->save($image);
            return $image;
        } catch(ItemNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param Image $image
     * @return Image
     * @throws ItemNotFoundException
     */
    public function delete(Image $image)
    {
        try {
            $this->imageRepository->delete($image);
            return $image;
        } catch(ItemNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @param int $id
     * @return Image
     * @throws ItemNotFoundException
     */
    public function findById($id)
    {
        $image = $this->imageRepository->findById($id);
        if($image instanceof Image)
            return $image;

        throw new ItemNotFoundException();
    }

    /**
     * @return Collection<Image>
     */
    public function findAll()
    {
        return $this->imageRepository->findAll();
    }

}
