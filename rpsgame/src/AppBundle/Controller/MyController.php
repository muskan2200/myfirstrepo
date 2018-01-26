<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MyController extends Controller
{ 
     /**
    * @Route("/def", name="homepage")
    */
   public function defAction(Request $request)
   {
       // replace this example code with whatever you need
       return $this->render('myviews/def.html.twig');
   }
    /**
     * @Route("/watch", name="watchpage")
     */
    public function watchAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('myviews/watch.html.twig');
    }

    /**
     * @Route("/play", name="playgame")
     */
    public function playaction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('myviews/play.html.twig');
    }

    /**
     * @Route("/result", name="resultgame")
     */
    public function resultAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('myviews/result.html.twig');
    }
}
