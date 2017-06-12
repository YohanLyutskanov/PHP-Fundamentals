<?php
$str = trim(fgets(STDIN));
$word = trim(fgets(STDIN));
//$str = "This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)";
//$word = "is";
$regex = "/[^.!?]*[.!?]/";
preg_match_all($regex, $str, $arr);
$arr= $arr[0];

for ($i=0; $i<count($arr); $i++){
    $test = explode(" ", $arr[$i]);

    if (array_search("$word", $test)){
echo $arr[$i]  . "\n";

    }
}