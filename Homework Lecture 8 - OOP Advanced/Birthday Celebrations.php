<?php

interface IID
{
    public function getId();
}

interface IBirthDate
{
    public function getBirthDate();
}

class Citizen implements IID, IBirthDate
{
    private $name;
    private $age;
    private $id;
    private $birthDate;

    public function __construct($name, $age, $id, $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthDate($birthDate);
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

class Pet implements IBirthDate
{
    private $name;
    private $birthDate;


    public function __construct($name, $birthDate)
    {
        $this->setName($name);
        $this->setBirthDate($birthDate);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

}

$masiv = [];
$birthday = [];

$input = trim(fgets(STDIN));
while ($input != "End") {
    $input = explode(" ", $input);

    switch ($input[0]) {
        case "Citizen":
            $citizen = new Citizen($input[1], $input[2], $input[3], $input[4]);
            $masiv[] = $citizen;
            break;
        case "Robot":
            break;
        case "Pet":
            $pet = new Pet($input[1], $input[2]);
            $masiv[] = $pet;
            break;
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
        $birthday[] = end($value);
    }
}

for ($i = 0; $i < count($birthday); $i++) {
    echo $birthday[$i] . "\r\n";
}
