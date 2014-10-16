<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use ComputerMarkers\Client;

class ComputerMakersCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('decorator:computer:markers')
            ->setDescription('decorator example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
