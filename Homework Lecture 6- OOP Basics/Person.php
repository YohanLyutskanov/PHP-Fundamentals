<?php
$lines = trim(fgets(STDIN));


class Person
{
    public $name;
    public $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

for ($i = 0; $i < $lines; $i++) {
    $input = trim(fgets(STDIN));
    $input = explode(" ", $input);

    $name = $input[0];
    $age = $input[1];
    if ($age > 30) {
        $person = new Person($name, $age);
        $persons [] = $person;
    }
}

function sortNames($a, $b)
{
    return strcmp($a->name, $b->name);
}

usort($persons, "sortNames");

for ($i = 0; $i < count($persons); $i++) {
    if ($i != count($persons) - 1) {
        echo $persons[$i]->name . " - " . $persons[$i]->age . "\r\n";
    } else {
        echo $persons[$i]->name . " - " . $persons[$i]->age;
    }
}