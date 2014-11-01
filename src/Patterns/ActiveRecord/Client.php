<?php

namespace ActiveRecord;

class Client
{
	public function __construct()
	{
		$user=new User();
		$user->setFirstName('test')
			 ->setLastName('last name')
			 ->setEmail('test@email.com');
		$user->insert();
		print_r($user->getAll());
		print_r($user->fetch(3));
	}
}