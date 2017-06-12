<?php

interface ICharacters
{
    public function getUsername();

    public function getHashedPassword();

    public function getLevel();

    public function getSpecialPoints();
}

class Demon implements ICharacters
{
    private $username;
    private $hashedPassword;
    private $level;
    private $specialPoints;

    public function __construct($username, $level, $specialPoints)
    {
        $this->setUsername($username);
        // $this->setHashedPassword($hashedPassword);
        $this->setLevel($level);
        $this->setSpecialPoints($specialPoints);
    }

    public function __toString()
    {
        return "\"" . $this->getUsername() . "\" | \"" . $this->getHashedPassword() . "\" -> Demon\r\n" . number_format($this->getSpecialPoints() * $this->getLevel(), 1, ".", "");
    }

    //Getters

    public function getUsername()
    {
        return $this->username;
    }


    public function getHashedPassword()
    {
        return strlen($this->getUsername()) * 217;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getSpecialPoints()
    {
        return $this->specialPoints;
    }

    //Setters

    public function setUsername($username)
    {
        if (!preg_match("/^[a-zA-Z]+$/", $username) && strlen($username) > 10) {
            throw new Exception("Invalid username");
        }
        $this->username = $username;
    }


    public function setLevel($level)
    {
        if ($level != (int)$level) {
            throw new Exception("Invalid level");
        }
        $this->level = $level;
    }

    public function setSpecialPoints($specialPoints)
    {
        if ($specialPoints != (double)$specialPoints) {
            throw new Exception("Invalid energy");
        }
        $this->specialPoints = $specialPoints;
    }

}

class Archangel implements ICharacters
{
    private $username;

    private $level;
    private $specialPoints;

    public function __construct($username, $level, $specialPoints)
    {
        $this->setUsername($username);

        $this->setLevel($level);
        $this->setSpecialPoints($specialPoints);
    }

    public function __toString()
    {
        return "\"" . $this->getUsername() . "\" | \"" . $this->getHashedPassword() . "\" -> Archangel\r\n" . $this->getSpecialPoints() * $this->getLevel();
    }

    //Getters

    public function getUsername()
    {
        return $this->username;
    }


    public function getHashedPassword()
    {
        return strrev($this->getUsername()) . (strlen($this->getUsername()) * 21);
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getSpecialPoints()
    {
        return $this->specialPoints;
    }

    //Setters

    public function setUsername($username)
    {
        if (!preg_match("/^[a-zA-Z]+$/", $username) && strlen($username) > 10) {
            throw new Exception("Invalid username");
        }
        $this->username = $username;
    }


    public function setLevel($level)
    {
        if ($level != (int)$level) {
            throw new Exception("Invalid level");
        }
        $this->level = $level;
    }

    public function setSpecialPoints($specialPoints)
    {
        if ($specialPoints != (int)$specialPoints) {
            throw new Exception("Invalid mana");
        }
        $this->specialPoints = $specialPoints;
    }

}

try {
    $character = null;
    $input = trim(fgets(STDIN));
    $input = explode(" | ", $input);
    if ($input[1] == "Demon") {
        $character = new Demon($input[0], $input[3], $input[2]);
    } elseif ($input[1] == "Archangel") {
        $character = new Archangel($input[0], $input[3], $input[2]);
    }
    echo $character;
} catch (Exception $e) {
    echo $e->getMessage();
}
