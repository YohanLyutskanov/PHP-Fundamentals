<?php

class ComputerSkills
{
    private $compLanguage;
    private $level;


    public function __construct($compLanguage, $level)
    {
        $this->setCompLanguage($compLanguage);
        $this->setLevel($level);
    }

    //Getters

    public function getCompLanguage()
    {
        return $this->compLanguage;
    }


    public function getLevel()
    {
        return $this->level;
    }

    //Setters

    public function setCompLanguage($compLanguage)
    {
        if (strlen($compLanguage) < 2 || strlen($compLanguage) > 20) {
            throw new Exception("Invalid computer language!");
        }
        $this->compLanguage = $compLanguage;
    }


    public function setLevel($level)
    {
        $this->level = $level;
    }


}