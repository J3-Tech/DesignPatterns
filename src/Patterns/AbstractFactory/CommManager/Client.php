<?php

namespace CommManager;

use CommManager\Factory\XYZFactory;
use CommManager\Factory\BloggFactory;

class Client
{
    public function __construct()
    {
        echo "\nAppointment:\n";
        $factory=XYZFactory::getInstance();
        $task=$factory->createTask();
        $appointment=$factory->createAppointment();
        echo $task->getDescription();
        echo $appointment->getDescription();

        echo "\nBlogg:\n";
        $factory=BloggFactory::getInstance();
        $task=$factory->createTask();
        $appointment=$factory->createAppointment();
        echo $task->getDescription();
        echo $appointment->getDescription();
        echo "\n";
    }
}
