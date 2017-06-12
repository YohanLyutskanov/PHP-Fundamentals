<?php
$input = trim(fgets(STDIN));
$coordinates = explode(", ", $input);


function getLocation ($x, $y){
    //tuvalu
    $tuvaluX1 =1;
    $tuvaluX2=3;
    $tuvaluY1=1;
    $tuvaluY2=3;

//tonga
    $tongaX1 = 0;
    $tongaX2 = 2;
    $tongaY1 = 6;
    $tongaY2 = 8;

//samoa
    $samoaX1 = 5;
    $samoaX2 = 7;
    $samoaY1 = 3;
    $samoaY2 = 6;

//cook
    $cookX1 = 4;
    $cookX2 = 9;
    $cookY1 = 7;
    $cookY2 = 8;

//tokelua
    $tekeluaX1= 8;
    $tekeluaX2= 9;
    $tekeluaY1= 0;
    $tekeluaY2= 1;



    if ($x>=$tuvaluX1 && $x<=$tuvaluX2 && $y>=$tuvaluY1 && $y<=$tuvaluY2){
        return 'Tuvalu';

    } else if ($x>=$tongaX1 && $x<=$tongaX2 && $y>=$tongaY1 && $y<=$tongaY2){
        return 'Tonga';

    } else if ($x>=$samoaX1 && $x<=$samoaX2 && $y>=$samoaY1 && $y<=$samoaY2){
        return 'Samoa';

    } else if ($x>=$cookX1 && $x<=$cookX2 && $y>=$cookY1 && $y<=$cookY2){
        return 'Cook';

    } else if ($x>=$tekeluaX1 && $x<=$tekeluaX2 && $y>=$tekeluaY1 && $y<=$tekeluaY2){
        return 'Tokelau';

    } else {
    return  "On the bottom of the ocean";
    }
}

for ($i=0; $i<count($coordinates); $i+=2){
    $x = $coordinates[$i];
    $y = $coordinates[$i+1];

    $location = getLocation($x, $y);
    echo $location . "\n";
}
