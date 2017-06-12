<?php
$number = trim(fgets(STDIN));
 function getAverage ($number){
     $average=0;
     for ($i=0; $i<strlen($number); $i++){
         $average += $number[$i];
     }
     $average /= strlen($number);

     return $average;
 }
 $average = getAverage($number);
 while ($average< 5 ){
     $number .= '9';
     $average = getAverage($number);
 }
 echo $number;