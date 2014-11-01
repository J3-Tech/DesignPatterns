<?php
namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use ActiveRecord\Client;

class ActiveRecordCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('activerecord:users')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new Client();
    }
}
