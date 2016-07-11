<?php
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp;

class AgregateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('agregate')
            ->setDescription('Loads data from URL')
            ->addArgument(
                'url',
                InputArgument::REQUIRED,
                'url'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', $input->getArgument('url'));
        echo $res->getStatusCode(),"\n";
        // 200
        echo $res->getHeaderLine('content-type'),"\n";
        // 'application/json; charset=utf8'
        //echo $res->getBody();
        // {"type":"User"...'

        $agregateOperation = $this->getContainer()->get('cvut_fit_biwt1_blog_base.service.operation.agregate_controller');

        $agregateOperation->handleData($res->getBody());
    }
}