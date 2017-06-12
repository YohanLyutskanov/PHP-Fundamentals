<?php

interface IPerson
{
    public function getName();

    public function getAge();
}

interface Identifiable
{
    public function getId();
}

interface Birthable
{
    public function getBirthable();
}

class Citizen implements IPerson, Identifiable, Birthable
{
    private $name;
    private $age;
    private $id;
    private $birthable;

    public function __construct($name, $age, $id, $birthable)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthable($birthable);
    }

    public function __toString()
    {
        return $this->getName() . "\r\n" . $this->getAge() . "\r\n" . $this->getId() . "\r\n" . $this->getBirthable();
    }

    // Getters

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBirthable()
    {
        return $this->birthable;
    }


    //Setters

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setBirthable($birthable)
    {
        $this->birthable = $birthable;
    }

}

$name = trim(fgets(STDIN));
$age = trim(fgets(STDIN));
$id = trim(fgets(STDIN));
$birthable = trim(fgets(STDIN));

$citizen = new Citizen($name, $age, $id, $birthable);
echo $citizen;