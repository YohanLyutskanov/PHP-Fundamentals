<?php

class LeutenantGeneral extends Private_Soldier
{
    private $setOfPrivates;

    function __construct($id, $firstName, $lastName, $salary, $setOfPrivates)
    {
        parent::__construct($id, $firstName, $lastName, $salary);
        $this->setSetOfPrivates($setOfPrivates);
    }

    public function getSetOfPrivates()
    {
        return $this->setOfPrivates;
    }

    public function setSetOfPrivates($setOfPrivates)
    {
        $this->setOfPrivates = $setOfPrivates;
    }


}