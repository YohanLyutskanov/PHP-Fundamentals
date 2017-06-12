<?php


class Commando extends SpecialisedSoldier
{
    private $setOfMissions =[];


    public function __construct($id, $firstName, $lastName, $salary, $corps, $setOfMissions)
    {
        parent::__construct($id, $firstName, $lastName, $salary, $corps);
        $this->setOfMissions = $this->setOfMissions($setOfMissions);
    }


    public function getSetOfMissions()
    {
        return $this->setOfMissions;
    }


    public function setOfMissions($setOfMissions)
    {
        $this->setOfMissions [] = $setOfMissions;
    }


}