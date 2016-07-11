<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 9/16/15
 * Time: 1:43 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Service\Functionality;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Tag;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\TagRepository;;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\TagFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Test\ServiceTestCase;
use Doctrine\Common\Collections\ArrayCollection;

class TagFunctionalityTest extends ServiceTestCase
{
    /** @var TagFunctionality */
    protected $tagFunctionality;

    /** @var TagRepository */
    protected $tagRepository;

    public function setUp()
    {
        parent::setUp();
        $this->tagFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.tag');
        $this->tagRepository = $this->container->get('cvut_fit_biwt1_blog_base.entity.repository.tag');
    }

    public function testInitialized()
    {
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\TagFunctionality', $this->tagFunctionality);
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\TagRepository', $this->tagRepository);
    }

    /**
     * @return Tag
     */
    public function testCreate()
    {
        $firstTag = new Tag();
        $firstTag->setTitle('Goblet');

        $secondTag = new Tag();
        $secondTag->setTitle('Prisoner');

        $firstTag = $this->tagFunctionality->create($firstTag);
        $secondTag = $this->tagFunctionality->create($secondTag);

        $this->assertGreaterThan(0, $firstTag->getId());
        $this->assertGreaterThan(1, $secondTag->getId());

        return $secondTag;
    }

    /**
     * @depends testCreate
     * @param Tag $tag
     * @return Tag
     */
    public function testFindById(Tag $tag)
    {
        $this->container->get('doctrine')->getManager()->clear();

        $loadedTag = $this->tagFunctionality->findById($tag->getId());

        $this->assertEquals($tag->getId(), $loadedTag->getId());
        $this->assertEquals($tag->getTitle(), $loadedTag->getTitle());

        return $loadedTag;
    }

    public function testExceptionFindById()
    {
        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->tagFunctionality->findById(-1);
    }

    /**
     * @depends testFindById
     * @param Tag $tag
     */
    public function testFindAll(Tag $tag)
    {
        $found = false;

        foreach ($this->tagFunctionality->findAll() as $t) {
            if($t->getId() == $tag->getId()) {
                $found = true;
                break;
            }
        }
        $this->assertTrue($found);
    }

    /**
     * @depends testFindById
     * @param Tag $tag
     * @return Tag
     */
    public function testUpdate(Tag $tag)
    {
        $title = 'Owl';

        $loadedTag = $this->tagFunctionality->findById($tag->getId());
        $loadedTag->setTitle($title);
        $this->tagFunctionality->update($loadedTag);

        $this->em->refresh($loadedTag);
        $this->assertEquals($title, $loadedTag->getTitle());

        return $loadedTag;
    }

    /**
     * @depends testFindById
     * @param Tag $tag
     */
    public function testDelete(Tag $tag)
    {
        $id = $tag->getId();
        $loadedTag = $this->tagFunctionality->findById($tag->getId());
        $this->tagFunctionality->delete($loadedTag);

        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->tagFunctionality->findById($id);
    }


    public function testFindByPost()
    {
        $author = $this->_createUser('Fred');

        $tag = new Tag();
        $tag->setTitle('Phoenix');
        $tag = $this->tagFunctionality->create($tag);

        $post = $this->_createPost('Chapter 7', 'For a brief moment he allowed himself the impossible hope...', $author, $tag);

        $tag->addPost($post);
        $this->tagFunctionality->update($tag);

        /** @var ArrayCollection $result */
        $result = $this->tagFunctionality->findByPost($post);
        $this->assertNotEmpty($result);
    }
}
