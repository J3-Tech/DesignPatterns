<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Player\Client;

class PlayerCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('strategy:player')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
