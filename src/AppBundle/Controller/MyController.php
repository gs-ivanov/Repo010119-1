<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends Controller
{
    /**
     * @Route("/mydefault")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function myBaseAction()
    {
        $number=rand(1,1000);
        return $this->render('myDefault/myIndex.html.twig', [
            'count' => $number." Random Number page",
        ]);
    }

    /**
     * @Route("/second/my/number")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $number=rand(1,1000);
        return $this->render('default/count.html.twig', [
            'count' => $number." Random Number page",
        ]);
    }

    /**
     * @Route("/hello/{name}")
     */
    public function helloAction($name)
    {
        return $this->render('default/count.html.twig', [
            'count' =>"Hello ". $name."!!",
        ]);

    }


    /**
     * @Route("/hello/{fname}/{lname}")
     */
    public function helloDblAction($fname,$lname,$year=2000)
    {
        return $this->render('default/count.html.twig', [
            'count' =>"Hello ". $fname." ". $lname." ".$year. " year!!",
        ]);

    }
    /**
     * @Route("/redirect")
     */
    public function redirectlAction()
    {
        return $this->redirectToRoute('homepage');

    }

}
