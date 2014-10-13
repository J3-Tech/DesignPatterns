<?php
require_once "vendor/autoload.php";

use Symfony\Component\Console\Application;
use Factory\CommandFactory;

$application = new Application();
foreach(glob('src/Command/*.php') as $file)
{
	$application->add(CommandFactory::getInstance()->create($file));
}
$application->run();