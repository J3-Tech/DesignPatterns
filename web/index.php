<?php
require_once "../vendor/autoload.php";

// use Nav\Menu;
// use Nav\Button;
// use Award\Sticker;
// use Award\Decorator\Book;
// use Award\Decorator\Certificate;

// $submenu1=new Menu();
// $submenu1->add(new Button('submenu 1','/submenu1'))
// 		 ->add(new Button('submenu 2','/submenu2'));

// $submenu2=new Menu();
// $submenu2->add(new Button('submenu 3','/submenu1'))
// 		 ->add(new Button('submenu 4','/submenu2'))
// 		 ->add($submenu1);

// $submenu2->remove($submenu1);

// $menu=new Menu();
// $menu->add(new Button('test 1','/test1'))
// 	 ->add(new Button('test 2','/test2'))
// 	 ->add($submenu2);

// // print_r($menu);

// $book=new Book(new Sticker());
// $certificate=new Certificate(new Sticker());

// echo $book->getDescription();
// echo "\n";
// echo $certificate->getDescription();

use XYZ\Observable\News;
use XYZ\Subscriber\EmailSubscriber;
use XYZ\Subscriber\SMSSubscriber;

$SMSSubscriber=new SMSSubscriber();
$news=new News();
$news->attach(new EmailSubscriber())
	 ->attach($SMSSubscriber);

//$news->detach($SMSSubscriber);

$news->notify();