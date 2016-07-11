<?php
/**
 * Created by PhpStorm.
 * User: jirkovoj
 * Date: 24/11/15
 * Time: 18:56
 */
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Operation;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\PostFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\FileFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\TagFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\UserFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\CommentFunctionality;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


class PostOperation
{
	/**
	 * @var PostFunctionality
	 */
	protected $postFunctionality;

	/**
	 * @var FileFunctionality
	 */
	protected $fileFunctionality;

	/**
	 * @var TagFunctionality
	 */
	protected $tagFunctionality;

	/**
	 * @var UserFunctionality
	 */
	protected $userFunctionality;

	/**
	 * @param CommentFunctionality $commentFunctionality
	 */

	/**
	 * @var CommentFunctionality
	 */
	protected $commentFunctionality;

	public function setCommentFunctionality($commentFunctionality)
	{
		$this->commentFunctionality = $commentFunctionality;
	}

	/**
	 * @var FileOperation
	 */
	protected $fileOperation;

	public function setPostFunctionality($postFunctionality)
	{
		$this->postFunctionality = $postFunctionality;
	}

	/**
	 * @param FileFunctionality
	 */
	public function setFileFunctionality($fileFunctionality)
	{
		$this->fileFunctionality = $fileFunctionality;
	}

	/**
	 * @param UserFunctionality
	 */
	public function setUserFunctionality($userFunctionality)
	{
		$this->userFunctionality = $userFunctionality;
	}

	/**
	 * @param TagFunctionality
	 */
	public function setTagFunctionality($tagFunctionality)
	{
		$this->tagFunctionality = $tagFunctionality;
	}

	/**
	 * @param \Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Operation\FileOperation $fileOperation
	 */
	public function setFileOperation($fileOperation)
	{
		$this->fileOperation = $fileOperation;
	}


	/**
	 * @param Post $post
	 * @param array $files
	 * @param array $tags
	 * @return Post
	 */

	public function create(Post $post, $files, $tags)
	{
		foreach ($files as $key => $value) {
			$file= new File();
			$file->setName($key);
			$file->setData($value);
			$post->addFile($file);
			$this->fileFunctionality->create($file);
		}
		foreach ($tags as $value) {
			$help = $this->tagFunctionality->findAll();
			$found=0;
			foreach ($help as $value2){
				if($value2->getTitle()==$value){
					$post->addTag($value2);
					$found=1;
					break;
				}
			}
			if(!$found){
				$tag=new Tag();
				$tag->setTitle($value);
				$this->tagFunctionality->create($tag);
				$post->addTag($tag);
				$post->setTitle("x");
			}
			$post->setTitle("x");

		}
		return $post;
	}

	/**
	 * @param Post $post
	 * @param User $user
	 * @return Post
	 */

	public function createPost (Post $post, User $user) {
		$tags=$post->getTags();
		foreach ($tags as $tag){
			if($tag->getTitle()==''){
				$post->removetag($tag);
			}
			else{
				$help=$this->tagFunctionality->findByTitle($tag->getTitle());
				if($help){
					$post->removetag($tag);
					$post->addTag($help);
				}
			}
		}

		$author=$this->userFunctionality->findByName($user->getName());
		if (!$author) {
			$this->userFunctionality->create($user);
			$author = $user;
		}
		$post->setAuthor($author);

		$this->postFunctionality->create($post);
		return $post;
	}

	/**
	 * @param Post $post
	 * @return Post
	 */

	public function updatePost (Post $post) {
		$tags=$post->getTags();
		foreach ($tags as $tag){
			if($tag->getTitle()==''){
				$post->removetag($tag);
			}
			else{
				$help=$this->tagFunctionality->findByTitle($tag->getTitle());
				if($help){
					$post->removetag($tag);
					$post->addTag($help);
				}
			}
		}

		/*$author=$post->getAuthor();
		$user=$this->userFunctionality->findByName($author->getName());
		if ($user!=null) {
			$post->setAuthor($user);
			$user->addPost($post);
		}*/

		$this->postFunctionality->update($post);
		return $post;
	}

	/**
	 * @param Post $post
	 * @param $files
	 * @return int
	 */

	public function addFiles(Post $post, $files)
	{
		if (!$files)
			return 0;
		foreach ($files as $file) {
			if ($file == null) {
				return 0;
			}
			$processed = $this->fileOperation->process($file);
			if ($processed == null) return 2;

			$processed->setPost($post);
			$this->fileFunctionality->create($processed);
			$post->addFile($processed);
		}
		return 0;
	}

	/**
	 * @param Post $post
	 */

	public function delete(Post $post)
	{
		foreach ($post->getFiles() as $file) {
			$this->fileFunctionality->delete($file);
		}
		foreach ($post->getTags() as $tag) {
			if (count($tag->getPosts()) == 1)
				$this->tagFunctionality->delete($tag);
			else {
				$tag->removePost($post);
				$this->tagFunctionality->update($tag);
			}
			$post->removetag($tag);
		}
		foreach ($post->getComments() as $comment) {
			$this->commentFunctionality->delete($comment);
		}
		$this->postFunctionality->delete($post);
	}
}