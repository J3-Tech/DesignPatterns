<?php

namespace XYZ;

use XYZ\Observable\News;
use XYZ\Subscriber\EmailSubscriber;
use XYZ\Subscriber\SMSSubscriber;

class Client
{
	public function __construct()
	{
		$SMSSubscriber=new SMSSubscriber();
		$news=new News();
		$news->attach(new EmailSubscriber())
			 	->attach($SMSSubscriber);

		$news->detach($SMSSubscriber);

		$news->notify();
	}
}