<?php

use Shop\Book;

$book=new Book('title','test one', 'test', 30.15, 15, 90);
echo $book->getSummaryLine();
