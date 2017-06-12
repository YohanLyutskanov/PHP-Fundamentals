<?php
$db = new PDO('mysql:host=localhost;dbname=softuni;charset=utf8', "root", "");

$sql = "update employees set salary = (salary *1.1)";

$results = $db->query($sql, PDO::FETCH_ASSOC);

foreach ($results as $result) {
    echo "<pre>";
    print_r($result);
    echo "</pre>";

}