<?php

interface IID
{
    public function getId();
}

interface IBirthDate
{
    public function getBirthDate();
}

interface Buyer
{
    public function buyFood($food);
}

class Citizen implements IID, IBirthDate, Buyer
{
    private $name;
    private $age;
    private $id;
    private $birthDate;
    public $food = 0;

    public function __construct($name, $age, $id, $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthDate($birthDate);
    }

    public function buyFood($food)
    {
        $this->food += 10;
    }

    // Getters
    public function getFood()
    {
        return $this->food;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    //Setters

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }
}

class Rebel implements Buyer
{
    private $name;
    private $age;
    private $group;
    public $food = 0;

    public function __construct($name, $age, $group)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGroup($group);
    }

    public function buyFood($food)
    {
        $this->food += 5;

    }

    public function getFood()
    {
        return $this->food;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }

}

$food = 0;
$arr = [];
$inputs = [];
$names = [];

$number = trim(fgets(STDIN));

for ($i = 0; $i < $number; $i++) {
    $input = trim(fgets(STDIN));
    $input = explode(" ", $input);

    if (count($input) == 3) {
        $rebel = new Rebel($input[0], $input[1], $input[2]);
        $arr[] = $rebel;
    } else {
        $citizen = new Citizen($input[0], $input[1], $input[2], $input[3]);
        $arr [] = $citizen;
    }
}

$input = trim(fgets(STDIN));
while ($input != "End") {
    $inputs[] = $input;

    $input = trim(fgets(STDIN));
}

foreach ($arr as $value) {
    $name = $value->getName();

    foreach ($inputs as $input) {
        if ($input == $name) {
            $value->buyFood($food);
        }

    }
}

foreach ($arr as $element){
    $food+=$element->getFood();
}

echo $food;