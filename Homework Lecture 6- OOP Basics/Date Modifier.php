<?php

class DateModifier
{
    private $firstDate;
    private $secondDate;

    public function __construct($firstDate, $secondDate)
    {
        $this->setFirstDate($firstDate);
        $this->setSecondDate($secondDate);
    }


    public function getFirstDate()
    {
        return $this->firstDate;
    }

    public function setFirstDate($firstDate)
    {
        $this->firstDate = $firstDate;
    }

    public function getSecondDate()
    {
        return $this->secondDate;
    }

    public function setSecondDate($secondDate)
    {
        $this->secondDate = $secondDate;
    }

    public function getDifference()
    {
        $datetime1 = new DateTime($this->getFirstDate());

        $datetime2 = new DateTime($this->getSecondDate());

        $difference = $datetime1->diff($datetime2);

        return $difference->days;
    }

}

$first = trim(fgets(STDIN));
$second = trim(fgets(STDIN));
$first = explode(" ",$first);
$second = explode(" ", $second);
$first = implode("-", $first);
$second = implode("-", $second);

$date = new DateModifier($first, $second);
echo $date->getDifference($first, $second);

