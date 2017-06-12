<?php
$speed = trim(fgets(STDIN));
//$speed = intval($speed);
$zone = trim(fgets(STDIN));

function getLimit($zone)
{
    switch ($zone) {
        case 'motorway':
            $speedlimit = 130;
            break;
        case 'interstate':
            $speedlimit = 90;
            break;
        case 'city':
            $speedlimit = 50;
            break;
        case 'residential':
            $speedlimit = 20;
            break;
        default:
            echo 'Not a Valid Input';
            $speedlimit = 1000;
    }
    return $speedlimit;
}

function getInfraction($speed, $limit)
{
    $overSpeed = $speed - $limit;

    if ($overSpeed < 0) {
        $result = "";
    } else {
        if ($overSpeed >= 0 && $overSpeed < 20) {
            $result = "speeding";
        } else if ($overSpeed >= 20 && $overSpeed < 40) {
            $result = "excessive speeding";
        } else {
            $result = "reckless driving";
        }
    }
    return $result;
}

$limit = getLimit($zone);
$infraction = getInfraction($speed, $limit);
$overSpeed = $speed - $limit;

echo getInfraction($speed, $limit);