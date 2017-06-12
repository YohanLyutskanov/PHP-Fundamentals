<?php
/*
$input = trim(fgets(STDIN));
$numbers = explode(", ", $input);

function distance($x1, $y1, $x2, $y2)
{
    //$distance1 = sqrt(pow(($x1 - $x2), 2) + pow((0 - 0), 2));
    $distance1 = sqrt(pow(($x1 + $y1), 2) + pow((0 + 0), 2));
    $distance2 = sqrt(pow(($x2 + $y2), 2) + pow((0 + 0), 2));
  //  $distance2 = sqrt(pow(($y1 + $y2), 2) + pow((0 + 0), 2));
    $distance3 = sqrt(pow(($x1 + $y1), 2) + pow(($x2 + $y2), 2));
    //$distance3 = sqrt(pow(($x1 - $x2), 2) + pow(($y1 - $y2), 2));
    // return $distance1 . " " . $distance2 . " " . $distance3;

    if ((int)$distance1 != $distance1) {
        $result1 = "{{$x1}}, {{$y1}} to {0}, {0} is invalid";
    } else {
        $result1 = "{{$x1}}, {{$y1}} to {0}, {0} is valid";
    }
    if ((int)$distance2 != $distance2) {
        $result2 = "{{$x2}}, {{$y2}} to {0}, {0} is invalid";
    } else {
        $result2 = "{{$x2}}, {{$y2}} to {0}, {0} is valid";

    }
    if ((int)$distance3 != $distance3) {
        $result3 = "{{$x1}}, {{$y1}} to {{$x2}}, {{$y2}} is invalid";
    } else {
        $result3 = "{{$x1}}, {{$y1}} to {{$x2}}, {{$y2}} is valid";
    }
    //   return $distance1 . " " . $distance2 . " " . $distance3;
    return $result1 . "\n" . $result2 . "\n" . $result3;
    // return (int)$distance1 . " $distance1" . (int)$distance2 . " $distance2" . (int)$distance3 . " $distance3";

}

echo distance($numbers[0], $numbers[1], $numbers[2], $numbers[3]);
*/
$input = trim(fgets(STDIN));
$array = explode(", ",$input);

$x1 = intval($array[0]);
$y1 = intval($array[1]);
$x2 = intval($array[2]);
$y2 = intval($array[3]);

function check($x1, $y1, $x2, $y2)
{
    $cal = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));

    if ((int)$cal == $cal) {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is valid\n";
    } else {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is invalid\n";
    }

}

echo check($x1, $y1, 0, 0);
echo check($x2, $y2, 0, 0);
echo check($x1, $y1, $x2, $y2);