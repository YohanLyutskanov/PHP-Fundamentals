<?php

class LastWorkPosition
{
    private $companyName;
    private $from;
    private $to;


    public function __construct($companyName, $from, $to)
    {
        $this->setCompanyName($companyName);
        $this->setFrom($from);
        $this->setTo($to);
    }

    //Getters
    public function getCompanyName()
    {
        return $this->companyName;
    }


    public function getFrom()
    {
        return $this->from;
    }

    public function getTo()
    {
        return $this->to;
    }

    //Setters
    public function setCompanyName($companyName)
    {
        if ((preg_match("/^[a-zA-Z0-9 ]+$/", $companyName) == 0) || strlen($companyName) < 2 || strlen($companyName) > 20) {
            throw new Exception("Invalid company name");
        }
        $this->companyName = $companyName;
    }


    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function setTo($to)
    {
        $this->to = $to;
    }


}