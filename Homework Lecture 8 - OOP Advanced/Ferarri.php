<?php

interface ICar
{
    public function getBrakes();

    public function getGas();
}

class Ferarri implements ICar
{
    private $model;
    private $brakes;
    private $gas;
    private $driver;


    public function __construct($model, $brakes, $gas, $driver)
    {
        $this->setModel($model);
        $this->setBrakes($brakes);
        $this->setGas($gas);
        $this->setDriver($driver);
    }
    public function __toString()
    {
        return $this->getModel()."/" . $this->getBrakes() ."/" . $this->getGas() ."/" . $this->getDriver();
    }

// Getters

    public function getModel()
    {
        return $this->model;
    }

    public function getBrakes()
    {
        return $this->brakes;
    }

    public function getGas()
    {
        return $this->gas;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    //Setters

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setBrakes($brakes)
    {
        $this->brakes = $brakes;
    }

    public function setGas($gas)
    {
        $this->gas = $gas;
    }

    public function setDriver($driver)
    {
        $this->driver = $driver;
    }
}
$driver = trim(fgets(STDIN));
$model = "488-Spider";
$brakes = "Brakes!";
$gas = "Zadu6avam sA!";

$person = new Ferarri($model, $brakes, $gas, $driver);
echo $person;