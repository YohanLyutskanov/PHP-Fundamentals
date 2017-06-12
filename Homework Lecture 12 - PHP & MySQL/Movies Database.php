<?php

$db = new PDO("mysql:host=localhost;dbname=movies;charset=utf8", "root", "");

//$sql = "create table directors (
//id int primary key auto_increment,
//director_name varchar (50) not null,
//notes longtext
//)";

// $sql = "create table genders (
//id int primary key auto_increment,
//gender_name varchar (20) not null,
//notes longtext
//)";

//$sql="create table categories  (
//id int primary key auto_increment,
//category_name varchar (40) not null,
//notes longtext
//)";

//$sql="create table movies  (
//id int primary key auto_increment,
//title varchar (60) not null,
//director_id int,
//copyright_year int,
//legnth time,
//gender_id int,
//category_id int,
//rating float,
//notes longtext
//)";

//$sql = "insert into directors (
//director_name,
//notes
//) values (
//\"Ivan Stamatev\",
//\"My name is Ivan\")";

$sql = "insert into movies (
title, 
director_id, 
copyright_year, 
`length`, 
gender_id, 
category_id, 
rating, 
notes
) values (
\"Fast and Furious\",
5, 
2017, 
'2:00:14', 
5, 
5, 
10.0, 
null)";
$db->query($sql);