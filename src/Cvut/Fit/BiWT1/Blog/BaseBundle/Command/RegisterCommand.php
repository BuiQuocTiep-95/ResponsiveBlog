<?php
namespace Cvut\Fit\BiWT1\Blog\BaseBundle\Command;
use Cvut\Fit\BiWT1\Blog\BaseBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RegisterCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('register')
            ->setDescription('Create new user')
            ->addArgument(
                'username',
                InputArgument::REQUIRED,
                'Username'
            )
            ->addArgument(
                'password',
                null,
                InputArgument::REQUIRED,
                'Password'
            )
            ->addArgument(
                'apikey',
                null,
                InputArgument::REQUIRED,
                'apikey'
            )
            ->addArgument(
                'role',
                null,
                InputArgument::REQUIRED,
                'ROLE_USER'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $userFunctionality=$this->getContainer()->get('cvut_fit_biwt1_blog_base.service.functionality.user');
        $encoder = $this->getContainer()->get('security.password_encoder');
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
        $apikey = $input->getArgument('apikey');
        $role = $input->getArgument('role');

        $user=new User();
        $password = $encoder->encodePassword($user, $password);
        $apikey = sha1($apikey);

        $user->setName($username);
        $user->setPassword($password);
        $user->setApiKey($apikey);
        $user->addRoles($role);

        $userFunctionality->create($user);
        $output->writeln("Success");
    }
}