<?php
$text = trim(fgets(STDIN));
$banList = trim(fgets(STDIN));

/*
$text = "It is not Linux, it is GNU/Linux. Linux is merely the kernel, while GNU adds the functionality. Therefore we owe it to them by calling the OS GNU/Linux! Sincerely, a Windows client";
$banlist = "Linux, Windows";
*/

$banWords = explode(", ", $banList);

for ($i=0; $i<count($banWords); $i++){
    for ($j=0; $j<strlen($banWords[$i]); $j++){
        $star = str_repeat("*", strlen($banWords[$i]));
        $text = str_replace("$banWords[$i]", "$star", $text);
    }
}
echo $text;