<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 11/18/15
 * Time: 10:35 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\TagRepository;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


class TagFunctionality
{
    /** @var TagRepository */
    protected $tagRepository;

    /**
     * @param TagRepository $tagRepository
     */
    public function setRepository($tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * @param Tag $tag
     * @return Tag
     */
    public function create(Tag $tag)
    {
        $help=$this->tagRepository->findByTitle($tag->getTitle());
        if ($help==null) {
            $this->tagRepository->save($tag);
        }
        else {
            $tag=$help;
        }
        return $tag;
    }

    /**
     * @param Tag $tag
     * @return Tag
     * @throws ItemNotFoundException
     */
    public function update(Tag $tag)
    {
        try {
            $this->tagRepository->save($tag);
            return $tag;
        } catch(ItemNotFoundException $e) {
            echo $e->getMessage();
        }
        return $tag;
    }

    /**
     * @param Tag $post
     * @return Tag
     * @throws ItemNotFoundException
     */
    public function delete(Tag $tag)
    {
        try {
            $this->tagRepository->delete($tag);
            return $tag;
        } catch(ItemNotFoundException $e) {
            echo $e->getMessage();
        }
        return $tag;

    }

    /**
     * @param int $id
     * @return Tag
     * @throws ItemNotFoundException
     */
    public function findById($id)
    {
        $tag = $this->tagRepository->findById($id);
        if($tag instanceof Tag)
            return $tag;
        else
            throw new ItemNotFoundException();
    }

    /**
     * @param string $title
     * @return Tag
     * @throws ItemNotFoundException
     */
    public function findByTitle($title)
    {
        $tag = $this->tagRepository->findByTitle($title);
        return $tag;
    }

    /**
     * @return Collection<Tag>
     */
    public function findAll()
    {
        return $this->tagRepository->findAll();
    }

    /**
     * @param Post $post
     * @return Collection<Tag>
     */
    public function findByPost(Post $post)
    {
        $result = new ArrayCollection();
        $tags = $this->findAll();

        /** @var Tag $tag */
        foreach($tags as $tag) {
            if ($tag->getPosts()->contains($post)) {
                $result->add($tag);
            }
        }
        return $result;
    }

}
