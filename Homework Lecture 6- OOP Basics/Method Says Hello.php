<?php

class Person
{
    public $name;

    public function sayHello($name)
    {
        return $name . ' says "Hello"!';
    }
}

$name = trim(fgets(STDIN));
$person = new Person($name);
$person=$person->sayHello($name);
echo $person;
