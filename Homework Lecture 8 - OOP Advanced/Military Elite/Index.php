<?php
require "Soldier.php";
require "Private_Soldier.php";
require "LeutenantGeneral.php";
require "SpecialisedSoldier.php";
require "Engineer.php";
require "Commando.php";
require "Spy.php";
$soldier="";
$input = trim(fgets(STDIN));
//$input = "kiki";
while ($input != "End") {
    $input = explode(" ", $input);
    switch ($input[0]) {
        case "Private":
            $soldier = new Private_Soldier($input[1], $input[2], $input[3], $input[4]);
            break;
        case "Commando":
            // TODO...............
            break;
        case "Spy":
            $soldier = new Spy($input[1], $input[2], $input[3], $input[4]);
            break;
        case "Engineer":
            // TODO...............
            break;
        case "LeutenantGeneral ":
            // TODO...............
            break;

    }
    echo $soldier;
    $input = trim(fgets(STDIN));

}
