<?php

class Box
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
        $this->length = $length;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

}

$length = floatval(trim(fgets(STDIN)));
$width = floatval(trim(fgets(STDIN)));
$height = floatval(fgets(STDIN));

//$length = 2;
//$width = 3;
//$height = 4;


$figure = new Box($length, $width, $height);

echo "Surface Area - " . $figure->getSurfaceArea() . "\nLateral Surface Area - " . $figure->getLateralSurfaceArea() . "\nVolume - " . $figure->getVolume();
//var_dump($figure);
//echo $figure;
