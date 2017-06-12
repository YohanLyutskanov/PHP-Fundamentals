<?php

class Box1
{

    private $length;
    private $width;
    private $height;

    public function __construct($length, $width, $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }


//Getters
    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getVolume()
    {
        $volume = number_format($this->length * $this->width * $this->height, 2, ".", "");
        return $volume;
    }

    public function getLateralSurfaceArea()
    {
        return number_format(2 * $this->length * $this->height + 2 * $this->width * $this->height, 2, ".", "");
    }

    public function getSurfaceArea()
    {
        return number_format(2 * $this->length * $this->width + 2 * $this->length * $this->height + 2 * $this->width * $this->height, 2, ".", "");
    }


    //Setters

    public function setLength($length)
    {
        if ($length <= 0) {
            throw new Exception("Length cannot be zero or negative.");
        }
        $this->length = $length;
    }


    public function setWidth($width)
    {
        if ($width <= 0) {
            throw new Exception("Width cannot be zero or negative.");
        }
        $this->width = $width;
    }


    public function setHeight($height)
    {
        if ($height <= 0) {
            throw new Exception("Height cannot be zero or negative.");
        }
        $this->height = $height;
    }
}

$length = floatval(trim(fgets(STDIN)));
$width = floatval(trim(fgets(STDIN)));
$height = floatval(trim(fgets(STDIN)));


try {
    $figure = new Box1($length, $width, $height);

    echo "Surface Area - " . $figure->getSurfaceArea() . "\nLateral Surface Area - " . $figure->getLateralSurfaceArea() . "\nVolume - " . $figure->getVolume();

} catch (Exception $e) {
    echo $e->getMessage();
}