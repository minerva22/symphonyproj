<?php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand; 
use Symfony\Component\Console\Input\InputOption;
/**
 * GreetCommand Greet someone
 *
*/

class GreetCommand extends ContainerAwareCommand
{
   protected function configure()
   {
      $this
         ->setName('demo:greet')
         ->setDescription('Greet someone')
         ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
         ->addOption('yell',null, InputOption::VALUE_NONE,'If set, the task will yell in uppercase letters');

      

   }


   protected function execute(InputInterface $input, OutputInterface $output)
   {
      $name = $input->getArgument('name');
      if ($name){
         $text = 'You have doing a great job :)  ' . $name;
      }
      else
      {
         $text = 'Where is the name :(';
      }

      if ($input->getOption('yell')){

         $text = strtoupper($text);
      }
      $output->writeln($text);
   
   }


}


?>
