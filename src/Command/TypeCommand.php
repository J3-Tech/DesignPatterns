<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Type\Client;

class TypeCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('iterator:type')
            ->setDescription('iterator example')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
