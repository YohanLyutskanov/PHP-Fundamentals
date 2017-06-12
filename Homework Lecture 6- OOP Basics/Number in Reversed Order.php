<?php

class DecimalNumber
{
    private $number;


    public function __construct($number)
    {
        $this->setNumber($number);
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function reversedDigits()
    {
        return strrev($this->getNumber());
    }
}
$number = trim(fgets(STDIN));
$num = new DecimalNumber($number);
echo $num->reversedDigits();