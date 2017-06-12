<?php

class Engineer extends SpecialisedSoldier
{
    private $setOfRepairs;
    private $partName;
    private $workedHours;


    public function __construct($id, $firstName, $lastName, $salary, $corps, $setOfRepairs)
    {
        parent::__construct($id, $firstName, $lastName, $salary, $corps);
        $this->setOfRepairs = $this->setSetOfRepairs($setOfRepairs);
    }


    public function getSetOfRepairs()
    {
        return $this->setOfRepairs;
    }


    public function setSetOfRepairs($setOfRepairs)
    {
        $this->setOfRepairs = $setOfRepairs;
    }


}