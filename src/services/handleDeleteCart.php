<?php
    session_start();
    include_once('./connection.php');
    $email = $_SESSION['email'];
    $id = $_POST['p_id'];
    $stmt = $con->prepare("DELETE FROM `cart` WHERE product_id=$id AND user_email='$email' " );
    $stmt->execute();
?>