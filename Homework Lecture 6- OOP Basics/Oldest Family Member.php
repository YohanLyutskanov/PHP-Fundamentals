<?php

class Person
{
    public $name;
    public $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function __toString()
    {
        return $this->name . " " . $this->age;
    }

}

class Family
{
    public $listOfPeople = [];


    public function __construct(array $listOfPeople)
    {
        $this->listOfPeople = $listOfPeople;
    }


    public function addMember($member)
    {

        return $listOfPeople[] = $member;
    }

    public function getOldestMember($list)
    {
        sort($list);
        return $list[0];
    }
}

$a = 0;
$lists = [];
$n = trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $person = trim(fgets(STDIN));
    $person = explode(" ", $person);
    if ($person[1] > $a) {
        $a = $person[1];
        $person1 = new Person($person[0], $person[1]);
    } else {
        continue;
    }
}

echo $person1;