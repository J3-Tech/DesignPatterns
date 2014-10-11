<?php

namespace XYZ\Subscriber;

use XYZ\Observable\NewsPublisher;

abstract class Subscriber
{
	public abstract function update(NewsPublisher $newPublisher);
}