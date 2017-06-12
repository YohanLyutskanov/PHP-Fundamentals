<?php

interface IID
{
    public function getId();
}

class Citizen implements IID
{
    private $name;
    private $age;
    private $id;

    public function __construct($name, $age, $id)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
    }

    // Getters
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
}

class Robot implements IID
{
    private $model;
    private $id;


    public function __construct($model, $id)
    {
        $this->setModel($model);
        $this->setId($id);
    }

    //Getters

    public function getModel()
    {
        return $this->model;
    }

    public function getId()
    {
        return $this->id;
    }

    //Setters

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

$masiv = [];
$banned = [];
$input = trim(fgets(STDIN));
while ($input != "End") {
    $input = explode(" ", $input);
    if (count($input) == 2) {
        $robot = new Robot($input[0], $input[1]);
        $masiv[] = $robot;
    } else {
        $citizen = new Citizen($input[0], $input[1], $input[2]);
        $masiv [] = $citizen;
    }
    $input = trim(fgets(STDIN));
}

$number = trim(fgets(STDIN));

function endsWith($sting, $num)
{
    $length = strlen($num);
    if ($num == 0) {
        return true;
    }

    return (substr($sting, -$length) === $num);
}

foreach ($masiv as $value) {

    if (endsWith(end($value), $number) == true) {
        $banned[] = end($value);
    }
}

for ($i=0; $i<count($banned); $i++){
    echo $banned[$i] . "\r\n";
}