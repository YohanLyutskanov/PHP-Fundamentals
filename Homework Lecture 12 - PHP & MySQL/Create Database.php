<?php
$db = new PDO('mysql:host=localhost;dbname=minions1;charset=utf8', "root", "");

//$sql = 'insert into users (username, password, profile_picture, last_login_time, is_deleted)
//values ("kiro78", "12313", null, null, null),("minka24", "321321", null, null, null),
//("pesho_94", "252525", null, null, null),("mirkata", "654654", null, null, null),
//("bob5", "852852", null, null, null)
//
//';
$sql='insert into people (`name`, picture, height, weight, gender, birthdate, biography) 
values("penka", null, 231, 231, \'f\', null , "kazvam se penka")';
//$db->exec($sql);

if ($db->exec($sql)==true){
    echo "success";
}
