<?php
require_once "app.php";

if (!$_SESSION['user_id']) {
    header("Location: login.php");
}
$sql = "SELECT full_name FROM users WHERE id = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$_SESSION['user_id']]);
$currentUser = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['edit'])) {
    header("Location: editProfile.php");
}
include "frontend/profile_frontend.php";


