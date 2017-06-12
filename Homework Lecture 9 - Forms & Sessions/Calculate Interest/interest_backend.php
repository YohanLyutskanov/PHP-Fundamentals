<?php
$money = 0;
$currency = "";
$period = 0;
$interest = "";
$validCurrencies = ['USD' => '$', 'BGN' => 'лв.', 'EUR' => '€'];
$validPeriods = [6 => '6 Months', 12 => '1 Year', 24 => '2 Years', 60 => '5 Years'];
if (isset($_GET['Calculate'])) {


    $money = filter_var($_GET['money'], FILTER_VALIDATE_INT);
    if ($money === false) {
        throw new Exception("Invalid money");
    }

    $currency = $_GET['currency'];
    if (!array_key_exists($currency, $validCurrencies)) {
        throw new Exception("Invalid currency type");
    }
    $sign = $validCurrencies[$currency];

    $interest = filter_var($_GET['interest'], FILTER_VALIDATE_INT);
    if ($interest === false) {
        throw new Exception("Invalid interest");
    }

    $period = filter_var($_GET['period'], FILTER_VALIDATE_INT);
    if ($period === false || !array_key_exists($period, $validPeriods)) {
        throw new Exception("Invalid period");
    }

    $calculatedMoney = $money + (($money * $interest) / $period);
}

include 'interest_frontend.php';
