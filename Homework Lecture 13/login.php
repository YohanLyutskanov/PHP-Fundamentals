<?php
require_once "app.php";
if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute(
        [
            $username
        ]
    );
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        throw new Exception("No such user");
    }
//    $user = array_values($user);
//    var_dump($user);exit;
//var_dump($user);exit;
//    $pass = $user['password'];
    if(password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: profile.php");
        exit;

    }
    throw new Exception("Wrong Password");
}
include "frontend/login_frontend.php";
