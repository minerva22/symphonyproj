<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use AppBundle\Command\HelloWorldCommand;
use Symfony\Component\Console\Application;
use AppBundle\Command\CreateUserCommand;
use AppBundle\Command\GreetCommand;
use AppBundle\Command\CashManagementCommand;
use AppBundle\Command\PnLCommand;
use AppBundle\Command\TreasuryFfa017Command;


// to run the command php application.php demo:greet --yell
// php application.php app:hello-world

//$command = new HelloWorldCommand();
//$command1 = new CreateUserCommand();
//$command2 = new GreetCommand();


$commandCashManagement = new CashManagementCommand();
$commandPnL = new PnLCommand();
$commandtreasuryffai007 = new TreasuryFfa017Command();

$application = new Application();
//$application->add($command);
//$application->add($command1);
//$application->add($command2);

//$application->setDefaultCommand($command->getName());
//$application->setDefaultCommand($command1->getName());
//$application->setDefaultCommand($command2->getName());


$application->add($commandCashManagement);
$application->add($commandPnL);
$application->add($commandtreasuryffai007);


$application->setDefaultCommand($commandCashManagement->getName());
$application->setDefaultCommand($commandPnL->getName());
$application->setDefaultCommand($commandtreasuryffai007->getName());


$application->run();



?>
