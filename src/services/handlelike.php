<?php
    session_start();
    include_once('./connection.php');
    $email = $_SESSION['email'];
    $sql = "UPDATE user SET like_post='true' WHERE email=? ";
    $stmt = $con->prepare($sql);
    $stmt->execute([$email]);
?>