<?php

class Private_Soldier extends Soldier
{
    private $salary;


    public function __construct($id, $firstName, $lastName, $salary)
    {
        parent::__construct($id, $firstName, $lastName);
        $this->setSalary($salary);
    }

    public function __toString()
    {
        return "Name: " . $this->getFirstName() . " " . $this->getLastName() . " Id: " . $this->getId() . " Salary: " . $this->getSalary() . "\r\n";

    }


    public function getSalary()
    {
        return $this->salary;
    }


    public function setSalary($salary)
    {
        $this->salary = number_format($salary, 2, ".", "");
    }


}