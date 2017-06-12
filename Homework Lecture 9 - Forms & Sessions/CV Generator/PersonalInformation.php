<?php


class PersonalInformation
{
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $gender;
    private $birthDate;
    private $nationality;


    public function __construct($firstName, $lastName, $email, $phone, $gender, $birthDate, $nationality)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setPhone($phone);
        $this->setGender($gender);
        $this->setBirthDate($birthDate);
        $this->setNationality($nationality);
    }

    //Getters
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


    public function getPhone()
    {
        return $this->phone;
    }


    public function getGender()
    {
        return $this->gender;
    }


    public function getBirthDate()
    {
        return $this->birthDate;
    }


    public function getNationality()
    {
        return $this->nationality;
    }

//Setters

    public function setFirstName($firstName)
    {
        if (strlen($firstName) < 2 || strlen($firstName) > 20) {
            throw new Exception("Invalid first name!");
        }
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        if (strlen($lastName) < 2 || strlen($lastName) > 20) {
            throw new Exception("Invalid last name!");
        }
        $this->lastName = $lastName;
    }

    public function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email");
        }
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        if ((preg_match("/^[0-9+ -]+$/", $phone) == 0)) {
            throw new Exception("Invalid phone number");
        }
        $this->phone = $phone;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }


    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }


    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }


}