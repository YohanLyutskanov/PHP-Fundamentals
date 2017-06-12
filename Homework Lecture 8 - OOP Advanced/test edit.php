<?php

class Profile
{
    private $name;
    private $password;


    public function __construct($name, $password)
    {
        $this->setName($name);
        $this->setPassword($password);
    }

    public function editProfile($name, $password, $repeatPassword)
    {

        if ($password == $repeatPassword) {
            $this->name = $name;
            $this->password = $password;
        } else {
            throw new Exception("Password missmatch");
        }
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

$person = new Profile("Yohan", "941123");
var_dump($person);
try {
    $person->editProfile("kiro", "123123", "123123");
    var_dump($person);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo PHP_EOL;
var_dump($person);
