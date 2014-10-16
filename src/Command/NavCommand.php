<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Nav\Client;

class NavCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('composite:nav')
            ->setDescription('composite example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
