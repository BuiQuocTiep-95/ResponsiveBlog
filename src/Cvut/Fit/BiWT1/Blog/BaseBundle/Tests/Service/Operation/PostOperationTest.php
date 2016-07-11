<?php
/**
 * Created by PhpStorm.
 * User: jirkovoj
 * Date: 25/11/15
 * Time: 00:01
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Service\Operation;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Operation\PostOperation;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Test\ServiceTestCase;

class PostOperationTest extends ServiceTestCase
{
	/** @var PostOperation */
	protected $postOperation;

	public function setUp()
	{
		parent::setUp();
		$this->postOperation = $this->container->get('cvut_fit_biwt1_blog_base.service.operation.post');
	}

	public function testCreate()
	{
		$author = $this->_createUser('Sirius');
		$now = new \DateTime();

		$firstPost = new Post();
		$firstPost->setTitle('Chapter 1');
		$firstPost->setText('The hottest day of the summer so far was drawing to close...');
		$firstPost->setAuthor($author);
		$firstPost->setCreated($now);
		$firstPost->setModified($now);
		$firstPost->setPublishFrom($now);
		$firstPost->setPublishTo(new \DateTime('2020-06-30'));

		$files = [
			'ticket.txt' => 'London => Hogwarts',
			'owl.txt' => 'Hedwig'
		];

		$tags = [
			'Summer',
			'Story'
		];

		$secondPost = new Post();
		$secondPost->setTitle('Chapter 2');
		$secondPost->setText('Not for the first time, an argument had broken out over breakfast at number four.');
		$secondPost->setAuthor($author);
		$secondPost->setCreated($now);
		$secondPost->setModified($now);
		$secondPost->setPublishFrom($now);
		$secondPost->setPublishTo(new \DateTime('2025-06-30'));

		$tags = [
				'Breakfast',
				'Story'
		];

		$this->postOperation->create($firstPost, $files, $tags);
		$this->postOperation->create($secondPost, [], $tags);

		$postFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.post');
		$fileFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.file');
		$tagFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.tag');

		// prvni prispevek
		$this->assertGreaterThan(0, $firstPost->getId());
		echo  count($firstPost->getFiles());
		$this->assertCount(2, $firstPost->getFiles());
		foreach($firstPost->getFiles() as $file) {
			$this->assertEquals($files[$file->getName()], $fileFunctionality->retrieve($file), 'File content mismatch');
		}
		$this->assertCount(2, $firstPost->getTags());

		// druhy prispevek
		$this->assertCount(2, $secondPost->getTags());

		// tagy
		$firstTag = $secondTag = NULL;
		foreach($firstPost->getTags() as $tag) {
			if($tag->getTitle() == 'Story') {
				$firstTag = $tag;
				break;
			}
		}
		foreach($secondPost->getTags() as $tag) {
			if($tag->getTitle() == 'Story') {
				$secondTag = $tag;
				break;
			}
		}

		$this->assertNotNull($firstTag, 'Tag has not been found for first post');
		$this->assertNotNull($secondTag, 'Tag has not been found for second post');

		$this->assertEquals($firstTag, $secondTag, 'Tags with same name has different id');

		// odstraneni tagu
		$tags = $tagFunctionality->findByPost($firstPost);
		foreach($tags as $tag) {
			$firstPost->removeTag($tag);
			$postFunctionality->update($firstPost);
		}
		$tags = $tagFunctionality->findByPost($secondPost);
		foreach($tags as $tag) {
			$secondPost->removeTag($tag);
			$postFunctionality->update($secondPost);
		}
	}
}
