<?php

class Person
{
    protected $name;
    protected $age;

    function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function getName()
    {
        return $this->name;
    }


    protected function setName($name)
    {
        if (strlen($name) < 3) {
            throw new Exception("Name’s length should not be less than 3 symbols!");
        }
        $this->name = $name;
    }


    public function getAge()
    {
        return $this->age;
    }


    protected function setAge($age)
    {
        if ($age < 0) {
            throw new Exception("Age must be positive!");
        }
        $this->age = $age;
    }

}
class Child extends Person
{
    function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }
    public function setAge($age){
        if ($age > 15) {
            throw new Exception("Child’s age must be less than 16!");
        }
        $this->age = $age;
    }
}
try{
    $child = new Child("Yohan", 15);
    echo $child->getName() . " " . $child->getAge();
}catch (Exception $e){
    echo $e->getMessage();
}