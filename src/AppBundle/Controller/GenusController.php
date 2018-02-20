<?php
/**
 * Created by PhpStorm.
 * User: Carlos Nieto
 * Date: 18/02/2018
 * Time: 10:57
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus")
     */
    public function showAction(){
        return new Response('Por fin');
    }
}