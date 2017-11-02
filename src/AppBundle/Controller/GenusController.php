<?php 
// src/AppleBundle/Controller/GenusController.php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class GenusController extends Controller

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
