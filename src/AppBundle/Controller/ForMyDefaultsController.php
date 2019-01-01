<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ForMyDefaultsController extends Controller
{
    /**
     * @Route("/my",name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($name="George at Home")
    {
//        $data_A=['title'=>'Test Title'];
        $data_B=[['title'=>'Content Title 1','Content Title 2'],
                 ['body'=>'Content 1','Content 2',]];
//        var_dump($data_B);exit;
        return $this->render('myDefault/myIndex.html.twig',
            ['entry'=>['One','Two','Three','Four',]]);
//            ['entry'=>$data_B,]);
    }


    /**
     * @Route("/myforum",name="myforum")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function forumAction($name="About Forum")
    {
        return $this->render('myDefault/myTest.html.twig', array('name' => $name));
    }
}
