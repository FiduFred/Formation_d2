<?php


namespace ParkBundle\Tests\Services;

use ParkBundle\Services\Calculator;

/**
 * Created by PhpStorm.
 * User: formation.invite
 * Date: 28/10/2015
 * Time: 11:13
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    public function testCalculator()
    {
        $calc = new Calculator();
        $this->assertEquals(13,$calc->SUM(5,8));
    }
}