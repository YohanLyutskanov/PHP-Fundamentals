<?php
$string = trim(fgets(STDIN));
$array = explode(" ", $string);
$count = count($array);

function isVolume ($x, $y, $z){
    $x1 = 10; $x2 = 50;
    $y1 = 20; $y2 = 80;
    $z1 = 15; $z2 = 50;

    if ($x1<=$x && $x<=x2){
        if ($y1<=$y && $y<=y2){
            if ($z1<=$z && $z<=z2){
                return true;
            }
        }
    }
    return false;
}
for ($i=0; $i<$count; $i+=3){
    $x=$array[$i];
    $y=$array[$i+1];
    $z=$array[$i+2];

    if (isVolume($x, $y, $z)){
        echo "inside" . "\n"  ;
    }else {
        echo 'outside' . "\n";
    }
}