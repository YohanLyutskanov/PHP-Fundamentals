<?php

interface IVehicle
{
    public function getFuelQuantity();

    public function getFuelConsumption();

    public function drive($km);

    public function refuel($fuel);
}

class Car implements IVehicle
{
    private $fuelQuantity;
    private $fuelConsumption;

    public function __construct($fuelQuantity, $fuelConsumption)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
    }

    public function drive($km)
    {
        $drive = $this->getFuelConsumption() * $km;
        $this->fuelQuantity -= $drive;
        if ($this->fuelQuantity > 0) {
            return "Car travelled " . (float)$km . " km" . PHP_EOL;
        } else {
            $this->fuelQuantity += $drive;
            return "Car needs refueling" . PHP_EOL;
        }
    }

    public function refuel($fuel)
    {
        return $this->fuelQuantity += $fuel;
    }

    //getters

    public function getFuelQuantity()
    {
        return $this->fuelQuantity;
    }

    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

    // setters

    public function setFuelQuantity($fuelQuantity)
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption + 0.9;
    }

}

class Truck implements IVehicle
{
    private $fuelQuantity;
    private $fuelConsumption;

    public function __construct($fuelQuantity, $fuelConsumption)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
    }

    public function drive($km)
    {
        $drive = $this->getFuelConsumption() * $km;
        $this->fuelQuantity -= $drive;
        if ($this->fuelQuantity > 0) {
            return "Truck travelled " . (float)$km . " km" . PHP_EOL;
        } else {
            $this->fuelQuantity += $drive;
            return "Truck needs refueling" . PHP_EOL;
        }
    }

    public function refuel($fuel)
    {
        return $this->fuelQuantity += $fuel * 0.95;
    }

    //getters

    public function getFuelQuantity()
    {
        return $this->fuelQuantity;
    }

    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

    // setters

    public function setFuelQuantity($fuelQuantity)
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption + 1.6;
    }

}

$car_input = trim(fgets(STDIN));
$car_input = explode(" ", $car_input);
$car = new Car($car_input[1], $car_input[2]);
$truck_input = trim(fgets(STDIN));
$truck_input = explode(" ", $truck_input);
$truck = new Truck($truck_input[1], $truck_input[2]);
$number = trim(fgets(STDIN));
for ($i = 0; $i < $number; $i++) {
    $command = trim(fgets(STDIN));
    $command = explode(" ", $command);

    if ($command[0] == "Drive" && $command[1] == "Car") {
        echo $car->drive($command[2]);
    } elseif ($command[0] == "Drive" && $command[1] == "Truck") {
        echo $truck->drive($command[2]);
    } else if ($command[0] == "Refuel" && $command[1] == "Car") {
        $car->refuel($command[2]);
    } elseif ($command[0] == "Refuel" && $command[1] == "Truck") {
        $truck->refuel($command[2]);
    }
    // var_dump($command);
}
echo "Car: " . number_format($car->getFuelQuantity(), 2, ".", "") . PHP_EOL;
echo "Truck: " . number_format($truck->getFuelQuantity(), 2, ".", "") . PHP_EOL;
