<?php
$student = trim(fgets(STDIN));
$worker = trim(fgets(STDIN));
$studentArr = explode(" ", $student);
$workerArr = explode(" ", $worker);


class Human
{
    private $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName)
    {
        if (!ctype_upper($firstName[0])) {
            throw new Exception("Expected upper case letter!Argument: firstName");
        }
        if (strlen($firstName) < 4) {
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        if (!ctype_upper($lastName[0])) {
            throw new Exception("Expected upper case letter!Argument: lastName");
        }
        if (strlen($lastName) < 3) {
            throw new Exception("Expected length at least 3 symbols!Argument: lastName ");
        }
        $this->lastName = $lastName;
    }

}

class Student extends Human
{
    private $facultyNumber;


    public function __construct($firstName, $lastName, $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    public function __toString()
    {
        return " First Name: " . $this->getFirstName() . "\n Last Name: " . $this->getLastName() . "\n Faculty number: " . $this->getFacultyNumber() . "\n";
    }

    public function getFacultyNumber()
    {
        return $this->facultyNumber;
    }


    public function setFacultyNumber($facultyNumber)
    {

        if (strlen($facultyNumber) > 10 || strlen($facultyNumber) < 5) {
            throw new Exception("Invalid faculty number!");
        }
        $this->facultyNumber = $facultyNumber;
    }

}

class Worker extends Human
{
    private $weekSalary;
    private $hoursPerWeek;


    public function __construct($firstName, $lastName, $weekSalary, $hoursPerWeek)
    {
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($weekSalary);
        $this->setHoursPerWeek($hoursPerWeek);
    }

    public function salaryPerHour()
    {
        $a = ($this->getWeekSalary()) / (($this->getHoursPerWeek() * 7));
        return number_format($a, 2);
    }

    public function __toString()
    {
        return " First Name: " . $this->getFirstName() . "\n Last Name: " . $this->getLastName() . "\n Week Salary: " . $this->getWeekSalary() . "\n Hours per day: " . $this->getHoursPerWeek() . "\n Salary per hour: " . $this->salaryPerHour($this->getWeekSalary(), $this->getHoursPerWeek());
    }

    public function getWeekSalary()
    {
        return number_format($this->weekSalary, 2, ".", "");
    }

    public function setWeekSalary($weekSalary)
    {
        if ($weekSalary <= 10) {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->weekSalary = $weekSalary;
    }

    public function getHoursPerWeek()
    {
        return number_format($this->hoursPerWeek, 2, ".", "");
    }

    public function setHoursPerWeek($hoursPerWeek)
    {
        if ($hoursPerWeek > 12 || $hoursPerWeek < 1) {
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->hoursPerWeek = $hoursPerWeek;
    }

    public function setLastName($lastName)
    {
        if (strlen($lastName) <= 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }

}


try {
    $student1 = new Student($studentArr[0], $studentArr[1], $studentArr[2]);
    $worker1 = new Worker($workerArr[0], $workerArr[1], $workerArr[2], $workerArr[3]);
    echo $student1 . "\n" . $worker1;
} catch (Exception $e) {
    echo $e->getMessage();
}

