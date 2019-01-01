<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends Controller
{
// TEST SEARCH FORM
    /**
     * @Route("/html", name="html")
     */
    public function htmlAction(Request $request)
    {
        return $this->render('default/goodForm.html.twig');
    }

    /**
     * @Route("/nextforum/{id}")
     * @Method({"GET","HEAD"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        var_dump($_REQUEST);
        return $this->render('default/nextforum.html.twig', [
            'count' =>"Next forum GET & HEAD method id is: " .$id,
        ]);
    }

    /**
     * @Route("/nextforum/{id}")
     * @Method({"PUT"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id)
    {
        return $this->render('default/nextforum.html.twig', [
            'count' =>"Next forum PUT method id is: " .$id,
        ]);
    }

}
