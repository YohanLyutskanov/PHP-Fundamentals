<?php

class SpecialisedSoldier extends Private_Soldier
{
private $corps;


    public function __construct($id, $firstName, $lastName, $salary,$corps)
    {parent::__construct($id, $firstName, $lastName, $salary);
        $this->setCorps($corps);
    }

    /**
     * @return mixed
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * @param mixed $corps
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;
    }


}