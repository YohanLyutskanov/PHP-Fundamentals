<?php

class Trainer
{
    private $name;
    private $numberOfBadges = 0;
    private $collectionOfPokemon;


    public function __construct($name, $collectionOfPokemon)
    {
        $this->setName($name);
        $this->setNumberOfBadges($this->numberOfBadges);
        $this->setCollectionOfPokemon($collectionOfPokemon);
    }

    public function __toString()
    {
        return $this->getName() . $this->getCollectionOfPokemon() . $this->getNumberOfBadges();
    }

    //Getters

    public function getName()
    {
        return $this->name;
    }

    public function getNumberOfBadges(): int
    {
        return $this->numberOfBadges + 1;
    }

    public function getCollectionOfPokemon()
    {
        return $this->collectionOfPokemon;
    }

    //Setters

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setNumberOfBadges(int $numberOfBadges)
    {
        $this->numberOfBadges = $numberOfBadges;
    }

    public function setCollectionOfPokemon($collectionOfPokemon)
    {
        $this->collectionOfPokemon = $collectionOfPokemon;
    }
}

class Pokemon
{
    private $name;
    private $element;
    private $health;

    public function __construct($name, $element, $health)
    {
        $this->setName($name);
        $this->setElement($element);
        $this->setHealth($health);
    }

    //Getters

    public function getName()
    {
        return $this->name;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function getHealth()
    {
        return $this->health;
    }

    //Setters

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setElement($element)
    {
        $this->element = $element;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }
}

$badges = 0;
$trainers = [];
$input = trim(fgets(STDIN));
while ($input != "Tournament") {
    $input = explode(" ", $input);
    $trainer = new Trainer($input[0], new Pokemon($input[1], $input[2], $input[3]));
    $trainers[] = $trainer;
    $input = trim(fgets(STDIN));
}
echo 'raboti';
$word = trim(fgets(STDIN));
while ($word = "End") {
    foreach ($trainers as $trainer) {
        if ($input = $trainer->getCollectionOfPokemon()->getElement()) {

            $trainer->getNumberOfBadges();
        } else {
            $health = ($trainer->getCollectionOfPokemon()->getHealth()) - 10;
            $trainer->getCollectionOfPokemon()->setHealth($health);
        }
//    if ($trainer->getCollectionOfPokemon()->getHealth() <=0){
//        $trainer->setCollencionOfPokemon($trainer->getCollectionOfPokemon());
//    }
    }

    $word = trim(fgets(STDIN));

}

var_dump($trainers);