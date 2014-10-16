<?php

namespace CommManager\Factory;

use CommManager\Product\Appointment\BloggAppointment;
use CommManager\Product\Task\BloggTask;

class BloggFactory extends AbstractFactory
{
    public function createTask()
    {
        return new BloggTask();
    }

    public function createAppointment()
    {
        return new BloggAppointment();
    }
}
