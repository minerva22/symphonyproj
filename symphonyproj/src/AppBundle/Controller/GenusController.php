<?php 
//src/AppleBundle/Controller/GenusController.php
namespace AppleBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
#use Symfony\Bundle\FrameworkBundle\Controller\Controller;
#use Symfony\Component\HttpFoundation\Request;



class GenusController

{


     /**

    * @Route("/genus")
    */


   public function showAction()

   {

       return new Response('Under the Sea!');
   }

}







?>
