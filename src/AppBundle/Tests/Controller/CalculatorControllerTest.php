<?php
/**
 * Created by PhpStorm.
 * User: formation.invite
 * Date: 28/10/2015
 * Time: 12:20
 */

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    /**
     * @param $a
     * @param $b
     */
    public function testCalculator()
    {

        $a = 5;
        $b = 8;
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/park/sum/'.$a.'/'.$b);
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /computer/");

        $this->assertEquals($a+$b,$crawler->filter('#resultcal')->text(), "Erreur Test Calcul");
    }
}