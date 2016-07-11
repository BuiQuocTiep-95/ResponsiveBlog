<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 1/11/16
 * Time: 4:03 PM
 */

namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Operation;


use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\File;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\FileFunctionality;

class FileOperation
{
    /**
     * @var FileFunctionality
     */
    protected $fileFunctionality;

    /**
     * @param FileFunctionality $fileFunctionality
     */
    public function setFileFunctionality($fileFunctionality)
    {
        $this->fileFunctionality = $fileFunctionality;
    }

    /**
     * @param UploadedFile $file
     * @return File|Image|null
     */
    public function process(UploadedFile $file){
        $type=$file->getMimeType();
        if($type=="image/png" or ($type=="image/jpeg")){
            $content=file_get_contents($file->getPathname());
            $size=getimagesize($file->getPathname());
            $thumb=$this->makeThumb($content, $size);
            if (!$thumb) return 0;

            $help= new Image();
            $help->setDimensionX($size[0]);
            $help->setDimensionY($size[1]);
            $help->setPreview($thumb);
            $help->setInternetMediaType($type);
            $help->setData($content);
            $help->setName($file->getClientOriginalName());

        }
        else {
            $contents=file_get_contents($file->getPathname());

            $help=new File();
            $help->setName($file->getClientOriginalName());
            $help->setData($contents);
            $help->setInternetMediaType($type);
        }

        return $help;
    }

    public function makeThumb($contents, $size)
    {
        $resource=imagecreatefromstring($contents);
        if(!$resource){
            return null;
        }
        $height=200;
        $width=300;
        $thumb=imagecreatetruecolor($width,$height);
        $min=min($size[0],$size[1]);

        if(!imagecopyresampled($thumb,$resource,0,0,($size[0]-$min)/2,($size[1]-$min)/2,$width,$height,$min,$min)){
            return null;
        }

        ob_start();
        imagejpeg($thumb);
        $thumbContents =  ob_get_contents();
        ob_end_clean();

        return $thumbContents;
    }

    /**
     * @param File $file
     * @return int
     */
    public function delete($file) {
        $post=$file->getPost();
        if ($post) $post->removeFile($file);
        else $file->getComment()->removeFile($file);

        $this->fileFunctionality->delete($file);
        return 0;
    }
}