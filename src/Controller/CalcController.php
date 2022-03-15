<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalcController extends AbstractController
{
    /**
     * @Route("/calc", name="app_calc")
     */
    public function index(): Response
    {
        $rs = null;
        return $this->render('calc/index.html.twig', [
            'controller_name' => 'CalcController',
            "rs" => $rs
        ]);
    }

/**
     * @Route("/calculer", name="app_calc2")
     */
    public function calculer(Request $request): Response
    {    
        $n1 =  $request->query->get("n1");
        $n2 =  $request->query->get("n2");
        $ope =  $request->query->get("operateur");
        $rs = "null";
        switch($ope){
            case '+' : $rs = $n1 + $n2;
            break;
            case '-' : $rs = $n1 - $n2;
            break;
            case '*' : $rs = $n1 * $n2;
            break;
            case '/' : $rs = $n1 / $n2;
            break;
        }

       

        return $this->render('calc/index.html.twig', compact("rs"));

    }

}
