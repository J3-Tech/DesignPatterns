<?php
require_once "vendor/autoload.php";

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new Command\CommManagerCommand());
$application->add(new Command\PlayerCommand());
$application->add(new Command\NavCommand());
$application->add(new Command\AwardCommand());
$application->add(new Command\XYZCommand());
$application->add(new Command\PizzaCommand());
$application->run();