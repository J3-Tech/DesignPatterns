<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use XYZ\Client;

class XYZCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('observer:xyz')
            ->setDescription('observer example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
