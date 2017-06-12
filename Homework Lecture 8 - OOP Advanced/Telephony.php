<?php

interface ICall
{
    public function setPhoneNumbers(array $phone_numbers1);
}

interface IBrowse
{
    public function setSites(array $sites);
}

class SmartPhone implements ICall, IBrowse
{
    private $phone_numbers;
    private $sites;

    public function __construct($phone_numbers, $sites)
    {
        $this->setPhoneNumbers($phone_numbers);
        $this->setSites($sites);
    }

    public function __toString()
    {
        return implode("", $this->phone_numbers) . implode("", $this->sites);
    }


    public function getPhoneNumbers()
    {
        return $this->phone_numbers;
    }

    public function setPhoneNumbers(array $phone_numbers)
    {
        foreach ($phone_numbers as $phone_number) {
            if (is_numeric($phone_number)) {
                $this->phone_numbers[] = "Calling... " . $phone_number . "\r\n";
            } else $this->phone_numbers[] = "Invalid number!\r\n";
        }
    }

    public function getSites()
    {
        return $this->sites;
    }

    public function setSites(array $sites)
    {
        foreach ($sites as $site) {
            if (1 === preg_match('~[0-9]~', $site)) {
                $this->sites [] = "Invalid URL!\r\n";
            } else {
                $this->sites [] = "Browsing: " . $site . "!\r\n";
            }
        }
    }
}

$phones = trim(fgets(STDIN));
$sites = trim(fgets(STDIN));
$phones = explode(" ", $phones);
$sites = explode(" ", $sites);

$smartPhone = new SmartPhone($phones, $sites);
echo $smartPhone;
