<?php

class Person
{
    private $name;
    private $money;
    private $bagOfProducts = [];

    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
       // $this->setBagOfProducts($bagOfProducts);
    }

    // Getters
    public function getName()
    {
        return $this->name;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function getBagOfProducts()
    {
        return $this->bagOfProducts;
    }

    //Setters

    public function setMoney($money)
    {
        if ($money < 0) {
            throw new Exception("Money cannot be negative");
        }
        $this->money = $money;
    }

    public function setName($name)
    {
        if (strlen($name) == "") {
            throw new Exception("Name cannot be empty");
        }
        $this->name = $name;
    }

    public function setBagOfProducts($bagOfProducts)
    {
        $this->bagOfProducts = $bagOfProducts;
    }
    public function buyProduct($product, $price){

    }

}

class Product
{
    private $productName;
    private $cost;


    public function __construct($productName, $cost)
    {
        $this->setProductName($productName);
        $this->setCost($cost);

    }

    //Getters
    public function getProductName()
    {
        return $this->productName;
    }

    public function getCost()
    {
        return $this->cost;
    }

    //Setters

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

}

// Products
$names = trim(fgets(STDIN));
$products = trim(fgets(STDIN));

$products = explode(";", $products);
$masivProduct = [];
for ($i = 0; $i < count($products); $i++) {
    $arrProduct = explode("=", $products[$i]);
    $oneProduct = new Product($arrProduct[0], $arrProduct[1]);
    $masivProduct [] = $oneProduct;
}
//Person
$names = explode(";", $names);
$customers = [];
$masivCustomers = [];
for ($i = 0; $i < count($names); $i ++) {
    $arrNames = explode("=", $names[$i]);
    $oneName = new Person($arrNames[0], $arrNames[1]);
    $masivCustomers[] = $oneName;
}
var_dump($masivCustomers);
///$input = trim(fgets(STDIN));
//while ($input != "END") {
//
//
//    $input = trim(fgets(STDIN));
//}