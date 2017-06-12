<?php

abstract class Food
{
    private $quantity;

    public function __construct($quantity)
    {
        $this->setQuantity($quantity);
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}

class Vegetable extends Food
{
    private $type;

    public function __construct($type, $quantity)
    {
        $this->setType($type);
        parent::__construct($quantity);

    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }


}

class Meat extends Food
{
    private $type;

    public function __construct($type, $quantity)
    {
        $this->setType($type);
        parent::__construct($quantity);

    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

abstract class Animal
{
    private $animalName;
    private $animalType;
    private $animalWeight;
    protected $foodEaten = 0;


    public function __construct($animalName, $animalType, $animalWeight)
    {
        $this->setAnimalName($animalName);
        $this->setAnimalType($animalType);
        $this->setAnimalWeight($animalWeight);
        //  $this->setFoodEaten($foodEaten);
    }

    public function getAnimalName()
    {
        return $this->animalName;
    }

    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    public function setAnimalType($animalType)
    {
        $this->animalType = $animalType;
    }

    public function getAnimalWeight()
    {
        return $this->animalWeight;
    }

    public function setAnimalWeight($animalWeight)
    {
        $this->animalWeight = $animalWeight;
    }

    public function getFoodEaten()
    {
        return $this->foodEaten;
    }

    public function setFoodEaten($type, $foodEaten)
    {
        $this->foodEaten = $foodEaten;
    }
}

abstract class Mammal extends Animal
{
    private $livingRegion;

    public function __construct($animalName, $animalType, $animalWeight, $livingRegion)
    {
        parent::__construct($animalName, $animalType, $animalWeight);
        $this->setLivingRegion($livingRegion);
    }

    public function getLivingRegion()
    {
        return $this->livingRegion;
    }

    public function setLivingRegion($livingRegion)
    {
        $this->livingRegion = $livingRegion;
    }
}

class Zebra extends Mammal
{
    public function makeNoise()
    {
        return "Zs";
    }

    public function __toString()
    {
        return "Zebra[" . $this->getAnimalName() . ", " . $this->getAnimalWeight() . ", " . $this->getLivingRegion() . ", " . $this->getFoodEaten() . "]";
    }

    public function setFoodEaten($type, $foodEaten)
    {
        if ($type == 'Meat') {
            throw new Exception("Zebras are not eating that type of food!\r\n");

        }
        $this->foodEaten = $foodEaten;
    }
}

class Mouse extends Mammal
{
    public function makeNoise()
    {
        return "SQUEEEAAAK!";
    }

    public function __toString()
    {
        return "Mouse[" . $this->getAnimalName() . ", " . $this->getAnimalWeight() . ", " . $this->getLivingRegion() . ", " . $this->getFoodEaten() . "]";
    }

    public function setFoodEaten($type, $foodEaten)
    {
        if ($type == 'Meat') {
            throw new Exception("Mouses are not eating that type of food!\r\n");

        }
        $this->foodEaten = $foodEaten;
    }
}

class Tiger extends Mammal
{
    public function makeNoise()
    {
        return "ROAAR!!!";
    }

    public function __toString()
    {
        return "Tiger[" . $this->getAnimalName() . ", " . $this->getAnimalWeight() . ", " . $this->getLivingRegion() . ", " . $this->getFoodEaten() . "]";
    }

    public function setFoodEaten($type, $foodEaten)
    {
        if ($type == 'Vegetable') {
            throw new Exception("Tigers are not eating that type of food!\r\n");

        }
        $this->foodEaten = $foodEaten;
    }
}

class Cat extends Mammal
{
    private $breed;


    public function __construct($animalName, $animalType, $animalWeight, $livingRegion, $breed)
    {
        parent::__construct($animalName, $animalType, $animalWeight, $livingRegion);
        $this->setBreed($breed);
    }


    public function getBreed()
    {
        return $this->breed;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function makeNoise()
    {
        return "Meowwww";
    }

    public function __toString()
    {
        return "Cat[" . $this->getAnimalName() . ", " . $this->getBreed() . ", " . $this->getAnimalWeight() . ", " . $this->getLivingRegion() . ", " . $this->getFoodEaten()."]";
    }

//    public function setFoodEaten($type, $foodEaten)
//    {
//
//        $this->foodEaten = $foodEaten;
//    }
}

$animal = "";
$animals = trim(fgets(STDIN));

while ($animals != "End") {
    $animals = explode(" ", $animals);
    $food = trim(fgets(STDIN));
    $food = explode(" ", $food);

    switch ($food[0]) {
        case "Vegetable":
            $feed = new Vegetable($food[0], $food[1]);
            break;
        case "Meat":
            $feed = new Meat($food[0], $food[1]);
            break;
    }

    switch ($animals[0]) {
        case "Zebra":
        $animal = new Zebra($animals[1], $animals[0], $animals[2], $animals[3]);
        break;
        case "Mouse":
            $animal = new Mouse($animals[1], $animals[0], $animals[2], $animals[3]);
            break;
        case "Tiger":
            $animal = new Tiger($animals[1], $animals[0], $animals[2], $animals[3]);
            break;
        case "Cat":
            $animal = new Cat($animals[1], $animals[0], $animals[2], $animals[3], $animals[4]);
            break;
    }
    echo $animal->makeNoise() . "\r\n";
    try {
        $animal->setFoodEaten($food[0], $food[1]);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    echo $animal . "\r\n";

    $animals = trim(fgets(STDIN));

}