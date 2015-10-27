<?php
/**
 * Created by PhpStorm.
 * User: formation.invite
 * Date: 27/10/2015
 * Time: 16:56
 */
namespace ParkBundle\Services;

use Doctrine\ORM\EntityManager;


class ComputerManager {

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function getComputers(){
        return $this->em->getRepository("ParkBundle:Computer")->findAll();
    }

    /**
     * @param $id
     */
    public function findComputer($id){

    }

}