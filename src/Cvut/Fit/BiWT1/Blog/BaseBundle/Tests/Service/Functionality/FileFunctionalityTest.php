<?php
/**
 * Created by PhpStorm.
 * User: musilane
 * Date: 9/16/15
 * Time: 1:44 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Tests\Service\Functionality;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\FileRepository;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\FileFunctionality;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Test\ServiceTestCase;

class FileFunctionalityTest extends ServiceTestCase
{
    /** @var FileFunctionality */
    protected $fileFunctionality;

    /** @var FileRepository */
    protected $fileRepository;

    public function setUp()
    {
        parent::setUp();
        $this->fileFunctionality = $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.file');
        $this->fileRepository = $this->container->get('cvut_fit_biwt1_blog_base.entity.repository.file');
    }

    public function testInitialized()
    {
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\FileFunctionality', $this->fileFunctionality);
        $this->assertInstanceOf('Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\FileRepository', $this->fileRepository);
    }

    /**
     * @return File
     */
    public function testCreate()
    {
        $now = new \DateTime();

        $file = new File();
        $file->setName('Wand');
        $file->setCreated($now);
        $file->setData('dummy data');
        $file->setInternetMediaType('application/octet-stream');

        $this->fileFunctionality->create($file);
        $this->assertGreaterThan(0, $file->getId());

        return $file;
    }

    /**
     * @depends testCreate
     * @param File $file
     * @return File
     */
    public function testFindById(File $file)
    {
        $this->container->get('doctrine')->getManager()->clear();

        $loadedFile = $this->fileFunctionality->findById($file->getId());

        $this->assertEquals($file->getId(), $loadedFile->getId());
        $this->assertEquals($file->getName(), $loadedFile->getName());

        return $loadedFile;
    }

    public function testExceptionFindById()
    {
        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->fileFunctionality->findById(-1);
    }

    /**
     * @depends testFindById
     * @param File $file
     */
    public function testFindAll(File $file)
    {
        $found = false;

        foreach ($this->fileFunctionality->findAll() as $f) {
            if($f->getId() == $file->getId()) {
                $found = true;
                break;
            }
        }
        $this->assertTrue($found);
    }

    /**
     * @depends testFindById
     * @param File $file
     * @return File
     */
    public function testUpdate(File $file)
    {
        $name = 'Key';

        $loadedFile = $this->fileFunctionality->findById($file->getId());
        $loadedFile->setName($name);
        $this->fileFunctionality->update($loadedFile);

        $this->em->refresh($loadedFile);
        $this->assertEquals($name, $loadedFile->getName());

        return $loadedFile;
    }

    /**
     * @depends testFindById
     * @param File $file
     */
    public function testDelete(File $file)
    {
        $id = $file->getId();
        $loadedFile = $this->fileFunctionality->findById($file->getId());
        $this->fileFunctionality->delete($loadedFile);

        $this->setExpectedException('Cvut\Fit\BiWT1\Blog\BaseBundle\Exception\ItemNotFoundException');
        $this->fileFunctionality->findById($id);
    }

    public function testCreateFile()
    {
        if (!$this->isFlysystemIntegrationTrait($this->fileFunctionality))
            return $this->markTestSkipped('Class does not use FlysystemIntegration trait.');

        $this->fileFunctionality->createFile('test', 'important data to be stored');
        $this->assertTrue($this->fileFunctionality->fileExists('test'));
    }

    /**
     * @depends testCreateFile
     */
    public function testRetrieveFile()
    {
        if (!$this->isFlysystemIntegrationTrait($this->fileFunctionality))
            return $this->markTestSkipped('Class does not use FlysystemIntegration trait.');

        $contents = $this->fileFunctionality->retrieveFile('test');
        $this->assertEquals('important data to be stored', $contents);
    }

    /**
     * @depends testCreateFile
     */
    public function testRemoveFile()
    {
        if (!$this->isFlysystemIntegrationTrait($this->fileFunctionality))
            return $this->markTestSkipped('Class does not use FlysystemIntegration trait.');

        $this->fileFunctionality->removeFile('test');
        $this->assertFalse($this->fileFunctionality->fileExists('test'));
    }

    protected function isFlysystemIntegrationTrait($object)
    {
        $traits = class_uses($object);
        return in_array(
            'Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\File\FlysystemIntegration', $traits);
    }
}
