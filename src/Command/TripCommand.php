<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Trip\Client;

class TripCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('template:trip')
            ->setDescription('template method example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
