<?php

namespace Api\Bundle\IOBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{


    /**
     * @Route("/hello/{name}", defaults={"name" = "bar"} , name="hello")
     * @Route("/hello/", defaults={"name" = 1})
     */
    public function indexAction($name)
    {
        return $this->render('ApiIOBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {

        //return $_SERVER;
        //$request = Request::createFromGlobals();
        return $request;
        $data = array("1" => "sd'dsqd0232éss", "2" => array(), "3");
        return $data;
    }
}
