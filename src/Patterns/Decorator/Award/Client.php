<?php

namespace Award;

use Award\Decorator\Book;
use Award\Decorator\Certificate;

class Client
{
	public function __construct()
	{
		$book=new Book(new Sticker());
		$certificate=new Certificate(new Sticker());

		echo $book->getDescription();
		echo "\n";
		echo $certificate->getDescription();
	}
}