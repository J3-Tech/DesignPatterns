<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Award\Client;

class AwardCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('decorator:award')
            ->setDescription('decorator example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
