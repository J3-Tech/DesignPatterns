<?php

namespace XYZ\Subscriber;

use XYZ\Observable\NewsPublisher;

abstract class Subscriber
{
    abstract public function update(NewsPublisher $newPublisher);
}
