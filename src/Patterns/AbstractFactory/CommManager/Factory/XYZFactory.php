<?php

namespace CommManager\Factory;

use CommManager\Product\Appointment\XYZAppointment;
use CommManager\Product\Task\XYZTask;

class XYZFactory extends AbstractFactory
{
    public function createTask()
    {
        return new XYZTask();
    }

    public function createAppointment()
    {
        return new XYZAppointment();
    }
}
