<?php

class Spy extends Soldier
{
    private $codeNumber;


    public function __construct($id, $firstName, $lastName, $codeNumber)
    {
        parent::__construct($id, $firstName, $lastName);
        $this->setCodeNumber($codeNumber);
    }

    public function __toString()
    {
        return "Name: " . $this->getFirstName() . " " . $this->getLastName() . " Id: " . $this->getId() . "\r\nCode Number: " . $this->getCodeNumber() . "\r\n";

    }

    public function getCodeNumber()
    {
        return $this->codeNumber;
    }

    /**
     * @param mixed $codeNumber
     */
    public function setCodeNumber($codeNumber)
    {
        $this->codeNumber = $codeNumber;
    }

}