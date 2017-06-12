<?php
require_once "app.php";
if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['password'] != $_POST['password_confirm']) {
        throw new Exception("Passwords do not match!!!");
    }
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $id = $_SESSION['user_id'];
    $sql = "update users set username = ?, `password` = ? , email=?, birthday=?
where id = $id";
$stmt = $db->prepare($sql);
$stmt->execute([
    $username,
    $password,
    $email,
    $birthday
]);
header("Location: login.php");
session_destroy();
}
include "frontend/editProfile_frontend.php";
