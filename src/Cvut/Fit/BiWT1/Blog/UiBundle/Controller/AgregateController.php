<?php
/**
 * Created by PhpStorm.
 * User: Bui
 * Date: 5/30/16
 * Time: 8:55 AM
 */

namespace Cvut\Fit\BiWT1\Blog\UiBundle\Controller;

use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Image;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Rss\Rss;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Rss\Item;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Rss\Channel;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\Post;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Service\Functionality\UserFunctionality;
use JMS\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\Common\Collections\ArrayCollection;

class AgregateController extends ContainerAware
{
    /**
     * @var Serializer serializer
     */
    protected $serializer;

    /**
     * @var ContainerInterface container
     */
    protected $container;

    /**
     * AgregateOperation constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer, ContainerInterface $container)
    {
        $this->serializer = $serializer;
        $this->container = $container;
    }

      /**
     * @param $input
     */

    public function handleData ($input) {
        $data = new Rss();
        $data->setChannel(new Channel());
        $data->getChannel()->setItem(json_decode($input, true)["channel"]["item"]);

        $author = new User();
        $author->setName(json_decode($input, true)["channel"]["title"]);
        $author->setPassword( sha1(time()));
        $i = 0;

        foreach($data->getChannel()->getItem() as $index => $item) {
            $string = $this->serializer->serialize($item,'json');
            $final = $this->serializer->deserialize($string, 'Cvut\Fit\BiWT1\Blog\BaseBundle\Rss\Item', 'json');
            $post = new Post();
            $post->setTitle($final->getTitle());
            $text = $final->getDescription()."\n\n";
            //$link = "&lt;?php echo rawurlencode(htmlspecialchars_decode(stripslashes(;".'<a href = "'.$final->getLink().'> Odkaz na zdroj </a>))) ?&rt;';
            $link =$final->getLink();
            $post->setText($text.$link);
            $url = $item["thumbnail"]["url"];

            $ch = curl_init($url);
            $fp = fopen(basename($url), 'wb');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);

            $thumbnail = new UploadedFile(basename($url),basename($url));
            $operation = $this->container->get('cvut_fit_biwt1_blog_base.service.operation.file');
            $file = $operation->process($thumbnail);
            $this->container->get('cvut_fit_biwt1_blog_base.service.functionality.file')->create($file);
            $postOperation = $this->container->get('cvut_fit_biwt1_blog_base.service.operation.post');
            $help[] = $thumbnail;
            if($postOperation->addFiles($post, $help)) {
                echo "error";
                break;
            }
            unlink(basename($item["thumbnail"]["url"]));

            echo count($post->getFiles());
            $this->container->get('cvut_fit_biwt1_blog_base.service.operation.post')->createPost($post, $author);
            $help = null;
        }

    }
}