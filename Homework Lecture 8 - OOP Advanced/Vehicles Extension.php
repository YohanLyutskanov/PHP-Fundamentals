<?php

interface IVehicle
{
    public function getFuelQuantity();

    public function getFuelConsumption();

    public function drive($km);

    public function refuel($fuel);

    public function getTankCapacity();
}

class Car implements IVehicle
{
    private $fuelQuantity = 0;
    private $fuelConsumption;
    private $tankCapacity;

    public function __construct($fuelQuantity, $fuelConsumption, $tankCapacity)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
        $this->setTankCapacity($tankCapacity);

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
        if ($fuel > $this->getTankCapacity() - $this->getFuelQuantity()) {
            throw new Exception("Cannot fit fuel in tank" . PHP_EOL);
        }
        return $this->fuelQuantity += $fuel;
    }


    //getters
    public function getTankCapacity()
    {
        return $this->tankCapacity;
    }

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
        if ($fuelQuantity < 0) {
            $this->fuelQuantity = 0;
            echo "Fuel must be a positive number" . PHP_EOL;
        } else {
            $this->fuelQuantity = $fuelQuantity;
        }
    }

    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption + 0.9;
    }


    public function setTankCapacity($tankCapacity)
    {
        if ($tankCapacity < 0) {
            throw new Exception("Fuel must be a positive number" . PHP_EOL);
        }
        $this->tankCapacity = $tankCapacity;
    }


}

class Bus implements IVehicle
{
    private $fuelQuantity = 0;
    private $fuelConsumption;
    private $tankCapacity;

    public function __construct($fuelQuantity, $fuelConsumption, $tankCapacity)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
        $this->setTankCapacity($tankCapacity);

    }

    public function drive($km)
    {
        $drive = $this->getFuelConsumption() * $km;
        $this->fuelQuantity -= $drive;
        if ($this->fuelQuantity > 0) {
            return "Bus travelled " . (float)$km . " km" . PHP_EOL;
        } else {
            $this->fuelQuantity += $drive;
            return "Bus needs refueling" . PHP_EOL;
        }
    }

    public function driveWithPeople($km)
    {
        $drive = ($this->getFuelConsumption() + 1.4) * $km;
        $this->fuelQuantity -= $drive;
        if ($this->fuelQuantity > 0) {
            return "Bus travelled " . (float)$km . " km" . PHP_EOL;
        } else {
            $this->fuelQuantity += $drive;
            return "Bus needs refueling" . PHP_EOL;
        }
    }


    public function refuel($fuel)
    {
        if ($fuel > $this->getTankCapacity() - $this->getFuelQuantity()) {
            throw new Exception("Cannot fit fuel in tank" . PHP_EOL);
        }
        return $this->fuelQuantity += $fuel;
    }


    //getters
    public function getTankCapacity()
    {
        return $this->tankCapacity;
    }

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
        if ($fuelQuantity < 0) {
            $this->fuelQuantity = 0;
            echo "Fuel must be a positive number" . PHP_EOL;
        } else {
            $this->fuelQuantity = $fuelQuantity;
        }
    }

    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }


    public function setTankCapacity($tankCapacity)
    {
        if ($tankCapacity < 0) {
            throw new Exception("Fuel must be a positive number" . PHP_EOL);
        }
        $this->tankCapacity = $tankCapacity;
    }


}

class Truck implements IVehicle
{
    private $fuelQuantity = 0;
    private $fuelConsumption;
    private $tankCapacity;

    public function __construct($fuelQuantity, $fuelConsumption, $tankCapacity)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
        $this->setTankCapacity($tankCapacity);
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


    public function getTankCapacity()
    {
        return $this->tankCapacity;
    }


    // setters

    public function setFuelQuantity($fuelQuantity)
    {
        if ($fuelQuantity < 0) {
            $this->fuelQuantity = 0;
            echo "Fuel must be a positive number" . PHP_EOL;
        } else {
            $this->fuelQuantity = $fuelQuantity;
        }
    }

    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption + 1.6;
    }

    public function setTankCapacity($tankCapacity)
    {
        if ($tankCapacity < 0) {
            throw new Exception("Fuel must be a positive number");
        }
        $this->tankCapacity = $tankCapacity;
    }


}

$car_input = trim(fgets(STDIN));
$car_input = explode(" ", $car_input);
if ($car_input[1] > $car_input[3]) {
    echo "Cannot fit fuel in tank" . PHP_EOL;
    $car_input[1] = 0;
}
$car = new Car($car_input[1], $car_input[2], $car_input[3]);

$truck_input = trim(fgets(STDIN));
$truck_input = explode(" ", $truck_input);

$truck = new Truck($truck_input[1], $truck_input[2], $truck_input[3]);

$bus_input = trim(fgets(STDIN));
$bus_input = explode(" ", $bus_input);
if ($bus_input[1] > $bus_input[3]) {
    echo "Cannot fit fuel in tank" . PHP_EOL;
    $bus_input[1] = 0;
}
//trqbwa da e fuel needs to be + , az printiram needs refueling; na purvi red gurmi
//if ($bus_input[1]<0){
//    echo "Fuel must be a positive number" . PHP_EOL;
//    $bus_input[1]=0;
//}

$bus = new Bus($bus_input[1], $bus_input[2], $bus_input[3]);


$number = trim(fgets(STDIN));

for ($i = 0; $i < $number; $i++) {

    $command = trim(fgets(STDIN));
    $command = explode(" ", $command);
    try {
        if ($command[0] == "Drive" && $command[1] == "Car") {
            echo $car->drive($command[2]);
        } elseif ($command[0] == "Drive" && $command[1] == "Truck") {
            echo $truck->drive($command[2]);
        } elseif ($command[0] == "Drive" && $command[1] == "Bus") {
            echo $bus->driveWithPeople($command[2]);
        } elseif ($command[0] == "DriveEmpty" && $command[1] == "Bus") {
            echo $bus->drive($command[2]);
        } else if ($command[0] == "Refuel" && $command[1] == "Car") {
            $car->refuel($command[2]);
        } elseif ($command[0] == "Refuel" && $command[1] == "Truck") {
            $truck->refuel($command[2]);
        } elseif ($command[0] == "Refuel" && $command[1] == "Bus") {
            $bus->refuel($command[2]);

        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
echo "Car: " . number_format($car->getFuelQuantity(), 2, ".", "") . PHP_EOL;
echo "Truck: " . number_format($truck->getFuelQuantity(), 2, ".", "") . PHP_EOL;
echo "Bus: " . number_format($bus->getFuelQuantity(), 2, ".", "") . PHP_EOL;

