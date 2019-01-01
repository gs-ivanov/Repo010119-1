<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class RoutingController extends Controller
{
    /**
     * @Route("/forum/{page}",name="forum",defaults={"page"=1},requirements={"page":"\d+"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexForumAction($page)
    {
        return $this->render('default/routing.html.twig', [
            'count' =>"Forum Default Page is: " .$page,
        ]);
    }


    /**
     * @Route("/forum/{permalink}",name="forum_show")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexBlogAction($permalink)
    {
//        if(is_numeric($permalink)){
//            throw $this->createNotFoundException('The input must not be a nummber!?');
//        }
        return $this->render('default/routing.html.twig', [
            'count' =>"Forum Article as $: " .$permalink,
        ]);
    }


    /**
     * @Route("/blog/{slug}",name="blog-show")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexForumShowAction($slug)
    {
        return $this->render('default/routing.html.twig', [
            'count' =>"Blog Action is: " .$slug,
        ]);
    }

    //Very complicated example
    /**
     * @Route("/articles/{_locale}/{year}/{title}.{format}",
     *     defaults={"_format":"html"},
     *     requirements={
     *     "_locale":"en|de",
     *     "_format":"html|rss",
     *     "year":"\d+"
     *     }
     *     )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexComplicatedAction($_locale,$year,$title,$format)
    {
        return $this->render('default/routing.html.twig', [
            'count' =>"Complicated Action is: " .$_locale.' '.$year.' '.$title.'.'.$format,
        ]);
    }

}
