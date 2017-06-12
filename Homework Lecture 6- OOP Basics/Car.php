<?php

class Car
{
    private $speed; //km/h
    private $fuel; // liters
    private $fuelEconomy; // L/100km


    public function __construct($speed, $fuel, $fuelEconomy)
    {
        $this->setSpeed($speed);
        $this->setFuel($fuel);
        $this->setFuelEconomy($fuelEconomy);
    }

    //Getters

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function getFuelEconomy()
    {
        return $this->fuelEconomy;
    }

    // Setters

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    public function setFuelEconomy($fuelEconomy)
    {
        $this->fuelEconomy = $fuelEconomy;
    }

    public function getDistance($dis)
    {
        $distance = $this->getFuel() * (100 / $this->getFuelEconomy());
        if ($dis <= $distance) {
            return $dis;
        } else {
            return $distance;
        }
    }

}

$car = trim(fgets(STDIN));
$car = explode(" ", $car);
$car = new Car($car[0], $car[1], $car[2]);
//var_dump($car);

$command = trim(fgets(STDIN));
while ($command == "END") {
    $command = explode(" ", $command);
    switch ($command[0]) {
        case 'Travel':
            $car->getDistance($command[1]);
            break;
        case 'Refuel': $car[1] = $car->getFuel() + $command[1];
            break;
        case 'Distance':
            echo 'Total Distance: ' . $car->getDistance();
            break;
        case 'Time':
            echo 'Total Time: ' . $car->getTime();
            break;
        case 'Fuel':
            echo 'Fuel left: ' . $car->getFuel();
            break;

    }
}
var_dump($car->getDistance($command[1]));