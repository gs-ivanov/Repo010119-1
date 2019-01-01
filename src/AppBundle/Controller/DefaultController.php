<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'Home Page'
        ]);
    }

    /**
     * @Route("/errhanling", name="errhanling")
     */
    public function errAction()
    {
        $rnd=rand(1,20);
        $page=null;
        if ($rnd%2===0){
            $page=$rnd;
        }
        if(!$page){
            throw $this->createNotFoundException('The page does not exist');
        }
        return $this->render('default/index.html.twig', [
            'base_dir' => 'Random Page: '.$page
        ]);
    }

    /**
     * @param $count
     * @Route("/number/{page}", name="blog_list", requirements={"page"="\d+"})
     */
    public function getCountAction($page=1)
    {
        return $this->render('default/count.html.twig', [
            'count' => $page." Number page",
        ]);
    }


    /**
     * @param $count
     * @Route("/number/{name}")
     */
    public function getNameAction($name)
    {
        return $this->render('default/count.html.twig', [
            'count' => $name." Text token",
        ]);
    }



}
