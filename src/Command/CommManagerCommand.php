<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use CommManager\Client;

class CommManagerCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('abstractFactory:commManager')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
