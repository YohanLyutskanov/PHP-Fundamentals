<?php
$numbers = "1 2 3 4 5";
$rotate = 3;

$numbers = explode(" ",$numbers);
//$rotate = intval(fgets(STDIN));
$sum =[];

$n = count($numbers);

for ($i = 0; $i < $rotate;$i++){
    array_push($numbers,array_shift($numbers));
    for ($j = 0; $j < $n;$j++){
        $sum[$j] += $numbers[$j];
    }

}
array_push($sum,array_shift($sum));

echo  implode(" ", $sum);