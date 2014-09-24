<?php
require_once "../vendor/autoload.php";

// use Shop\Book;

// $book=new Book('title','test one', 'test', 30.15, 15, 90);
// echo $book->getSummaryLine();

// use Math\Arithmetic;

// $arithmetic=new Arithmetic(2);
// echo $arithmetic->square();

// use RedPlate\RedPlate;
// RedPlate::extend('::base.php');

// use Player\CassettePlayer;
// use Player\MP3Player;
// use Player\WalkmanPlayer;

// $cassettePlayer=new CassettePlayer();
// $mp3Player=new MP3Player();
// $walkmanPlayer=new WalkmanPlayer();


// echo $cassettePlayer->play().'<br/>';
// echo $mp3Player->play().'<br/>';
// echo $walkmanPlayer->play().'<br/>';
// echo '<br />';

// echo $cassettePlayer->stop().'<br/>';
// echo $mp3Player->stop().'<br/>';
// echo $walkmanPlayer->stop().'<br/>';

// use Pizza\Client;

// new Client();

// use Connection\Connection;

// $handler=Connection::getInstance();
// $select=$handler->query('select * from test');
// print_r($select->fetchAll());

use CommManager\Client;

new Client();