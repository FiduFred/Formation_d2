<?php
/**
 * Created by PhpStorm.
 * User: formation.invite
 * Date: 28/10/2015
 * Time: 11:42
 */

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration;
use ParkBundle\Services\Calculator;

class CalculatorController extends Controller
{
    /**
     * @Configuration\Route("/sum/{a}/{b}", name="calc_sum")
     * requirements={"a": "\d+","b": "\d+"}
     * @Configuration\Template()
     */
    public function sumAction($a, $b)
    {
       $cal = new Calculator();

        return array("result"=>$cal->SUM($a,$b));
    }
}