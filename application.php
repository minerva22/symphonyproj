<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use AppBundle\Command\HelloWorldCommand;
use Symfony\Component\Console\Application;

$command = new HelloWorldCommand();
$application = new Application();
$application->add($command);
$application->setDefaultCommand($command->getName());
$application->run();;



?>
