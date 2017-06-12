<?php

class Car
{
    private $model;
    private $engine;
    private $weight;
    private $color;

    public function __construct(string $model, Engine $engine, $weight, $color)
    {
        $this->setModel($model);
        $this->setEngine($engine);
        $this->setWeight($weight);
        $this->setColor($color);
    }

    public function __toString()
    {
        return $this->getModel() . ":\r\n  " . $this->getEngine() . "  " . "Weight: " . $this->getWeight() . "\r\n  " . "Color: " . $this->getColor() . "\r\n";
    }

    //Getters

    public function getModel()
    {
        return $this->model;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getColor()
    {
        return $this->color;
    }

    //Setters

    public function setModel($model)
    {
        $this->model = $model;
    }


    public function setEngine($engine)
    {
        $this->engine = $engine;
    }


    public function setWeight($weight)
    {
        $this->weight = $weight;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }


}

class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;


    public function __construct($model, $power, $displacement = "n/a", $efficiency = "n/a")
    {
        $this->setModel($model);
        $this->setPower($power);
        $this->setDisplacement($displacement);
        $this->setEfficiency($efficiency);
    }

    public function __toString()
    {
        return $this->getModel() . ":\r\n    Power: " . $this->getPower() . "\r\n    Displacement: " . $this->getDisplacement() . "\r\n    Efficiency: " . $this->getEfficiency() . "\r\n";
    }

    //Getters
    public function getModel()
    {
        return $this->model;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }

    public function getEfficiency()
    {
        return $this->efficiency;
    }

    //Setters

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }

    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }


    public function setEfficiency($efficiency)
    {
        $this->efficiency = $efficiency;
    }

}

// Engine

$n = trim(fgets(STDIN));
$engines = [];
for ($i = 0; $i < $n; $i++) {
    $engine = trim(fgets(STDIN));
    $engine = explode(" ", $engine);
    $eModel = $engine[0];
    $ePower = intval($engine[1]);


    if (isset($engine[2])) {
        $eDisplacemnet = $engine[2];
    } else {
        $eDisplacemnet = "n/a";
    }

    if (isset($engine[2]) && is_numeric($engine[2])) {
        $eDisplacemnet = $engine[2];
        if (isset($engine[3])) {
            $eEfficiency = $engine[3];
        } else {
            $eEfficiency = "n/a";
        }
    } else if (isset($engine[2]) && !is_numeric($engine[2])) {
        $eDisplacemnet = "n/a";
        $eEfficiency = $engine[2];
    } else {
        $eDisplacemnet = "n/a";
        $eEfficiency = "n/a";
    }

    $newEngine = new Engine($eModel, $ePower, $eDisplacemnet, $eEfficiency);
    $engines[] = $newEngine;
}
//var_dump($engines);

// Car

$m = trim(fgets(STDIN));
$cars = [];
for ($i = 0; $i < $m; $i++) {
    $car = trim(fgets(STDIN));
    $car = explode(" ", $car);
    $cModel = $car[0];
    //$cEngine = $car[1];
    foreach ($engines as $engine) {
        if ($engine->getModel() == $car[1]) {
            $cEngine = $engine;
        }
    }


    if (isset($car[2]) && is_numeric($car[2])) {
        $cWeight = $car[2];
        if (isset($car[3])) {
            $cColor = $car[3];
        } else {
            $cColor = "n/a";
        }
    } else if (isset($car[2]) && !is_numeric($car[2])) {
        $cWeight = "n/a";
        $cColor = $car[2];
    } else {
        $cWeight = "n/a";
        $cColor = "n/a";
    }


    $newCar = new Car($cModel, $cEngine, $cWeight, $cColor);
    $cars[] = $newCar;
}
//var_dump($cars);
foreach ($cars as $car) {
    echo $car;
}