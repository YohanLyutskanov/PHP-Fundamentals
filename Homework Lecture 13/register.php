<?php
require_once "app.php";
require_once "UserLifecycle.php";
if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['password'] != $_POST['password_confirm']) {
        throw new Exception("Passwords do not match!!!");
    }
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $fullName = $_POST['fullName'];

    $sql = "INSERT INTO users (username,`password`, `email`, birthday, full_name)
        VALUES (?,?,?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        $username,
        $password,
        $email,
        $birthday,
        $fullName
    ]);


    header("Location: login.php");

}
include "frontend/register_frontend.php";