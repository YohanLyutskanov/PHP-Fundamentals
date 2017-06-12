<?php


class OtherSkills
{
    private $language;
    private $level;
    private $reading;
    private $writing;
    private $drivingLicense;


    public function __construct($language, $level, $reading, $writing, $drivingLicense)
    {
        $this->setLanguage($language);
        $this->setLevel($level);
        $this->setReading($reading);
        $this->setWriting($writing);
        $this->setDrivingLicense($drivingLicense);
    }

    //Getters

    public function getLanguage()
    {
        return $this->language;
    }

    public function getLevel()
    {
        return $this->level;
    }


    public function getReading()
    {
        return $this->reading;
    }


    public function getWriting()
    {
        return $this->writing;
    }


    public function getDrivingLicense()
    {
        return $this->drivingLicense;
    }

    //Setters

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }


    public function setReading($reading)
    {
        $this->reading = $reading;
    }


    public function setWriting($writing)
    {
        $this->writing = $writing;
    }


    public function setDrivingLicense($drivingLicense)
    {
        $this->drivingLicense = $drivingLicense;
    }


}