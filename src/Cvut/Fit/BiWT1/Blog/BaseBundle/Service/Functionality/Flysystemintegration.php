<?php
/**
 * Created by PhpStorm.
 * User: kadleto2
 * Date: 20.11.15
 * Time: 10:37
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\File;

use League\Flysystem\Filesystem;

trait FlysystemIntegration
{

    /**
     * @var Filesystem
     */
    protected $filesystem;

    /**
     * @param Filesystem $filesystem
     */
    public function setFilesystem(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    /**
     * Creates a file using given filename, contents and path (optionally)
     *
     * @param $filename
     * @param $contents
     * @param string $path
     */
    public function createFile($filename, $contents, $path = '/')
    {
        if (!$this->filesystem->put($this->getFilePath($filename, $path), $contents))
            throw new \RuntimeException("File not saved!");
    }

    /**
     * Remove a file by its filename and path (optionally)
     * @param $filename
     * @param string $path
     */
    public function removeFile($filename, $path = '/')
    {
        if (!$this->filesystem->delete($this->getFilePath($filename, $path)))
            throw new \RuntimeException("File cannot be deleted.");
    }

    /**
     * Retrive a contents of a file by its filename and path (optionally)
     *
     * @param $filename
     * @param string $path
     * @return array|bool
     */
    public function retrieveFile($filename, $path = '/')
    {
        $handle = $this->filesystem->get($this->getFilePath($filename, $path));
        if (!$handle->isFile())
            throw new \RuntimeException("Given path is not an ordinary file.");
        if (($contents = $handle->read()) === false)
            throw new \RuntimeException("Failed to read file contents.");
        return $contents;
    }

    /**
     * Check if file exists by its filename and path (optionally)
     *
     * @param $filename
     * @param string $path
     * @return bool true if file exists false otherwise
     */
    public function fileExists($filename, $path = '/')
    {
        return $this->filesystem->has($this->getFilePath($filename, $path));
    }

    /**
     * @param $filename
     * @param $path
     * @return string
     */
    protected  function getFilePath($filename, $path) {
        return $path . '/' . $filename;
    }

}