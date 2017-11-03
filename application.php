<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use AppBundle\Command\HelloWorldCommand;
use Symfony\Component\Console\Application;
use AppBundle\Command\CreateUserCommand;
use AppBundle\Command\GreetCommand;


// to run the command php application.php demo:greet --yell
// php application.php app:hello-world

$command = new HelloWorldCommand();
$command1 = new CreateUserCommand();
$command2 = new GreetCommand();
$application = new Application();
$application->add($command);
$application->add($command1);
$application->add($command2);
$application->setDefaultCommand($command->getName());
$application->setDefaultCommand($command1->getName());
$application->setDefaultCommand($command2->getName());
$application->run();;



?>
