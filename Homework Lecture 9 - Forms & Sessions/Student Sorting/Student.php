<?php


class Student
{
    private $firstName;
    private $lastName;
    private $email;
    private $examScore;


    public function __construct($firstName, $lastName, $email, $examScore)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setExamScore($examScore);
    }

    // Getters

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getExamScore()
    {
        return $this->examScore;
    }


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }


    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setExamScore($examScore)
    {
        $this->examScore = $examScore;
    }




}