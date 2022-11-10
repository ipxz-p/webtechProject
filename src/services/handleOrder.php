<?php
    session_start();
    include_once('./connection.php');
    $email = $_SESSION['email'];
    $stmt = $con->prepare("DELETE FROM `cart` WHERE user_email='$email' " );
    $stmt->execute();
?>