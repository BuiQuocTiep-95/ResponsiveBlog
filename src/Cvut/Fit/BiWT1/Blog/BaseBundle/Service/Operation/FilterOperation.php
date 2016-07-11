<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/12/16
 * Time: 4:20 AM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Operation;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;

class FilterOperation
{
    protected $requestStack;

    /**
     * FilterOperation constructor.
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @param Collection $posts
     * @param $user
     * @param $month
     * @param $tag
     * @param $private
     * @param $published
     * @return Collection
     */
    public function filterPosts($posts, $user, $month, $tag, $private, $published){

        if($user){
            foreach($posts as $post){
                if($post->getAuthor()!=$user){
                    $posts->removeElement($post);
                }
            }
        }

        if($month){
            foreach($posts as $post){
                if((int)date_format($post->getPublishFrom(), 'm')!=$month){
                    $posts->removeElement($post);
                }
            }
        }

        if($tag){
            foreach($posts as $post){
                $tags=$post->getTags();
                $found=false;
                foreach($tags as $help){
                    if($help==$tag){
                        $found=true;
                        break;
                    }
                }
                if(!$found)$posts->removeElement($post);

            }
        }

        if($private){
            foreach($posts as $post){
                if($post->isPrivate()!=$private){
                    $posts->removeElement($post);
                }
            }
        }

        if($published) {
            foreach ($posts as $post) {
                $now = new \DateTime;
                if ($post->getPublishTo() < $now or $now < $post->getPublishFrom()) {
                    $posts->removeElement($post);
                }
            }
        }
        return $posts;
    }

}