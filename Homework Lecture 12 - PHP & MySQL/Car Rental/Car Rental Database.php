<?php
 $db = new PDO('mysql:host=localhost;dbname=carrental;charset=utf8', "root", "");

 $sql = "insert into categories (
  `category`,
	`daily_rate` ,
	`weekly_rate` ,
	`monthly_rate`,
	`weekend_rate` 
	) 
	values 
	(
	\"Jeep\", 
	32,
	65,
	98,
	102
	) ";

 $db->query($sql);
