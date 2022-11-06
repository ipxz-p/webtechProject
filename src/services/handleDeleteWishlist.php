<?php
    session_start();
    include_once('./connection.php');
    $id = $_POST['p_id'];
    $email = $_SESSION['email'];
    $stmt = $con->prepare("DELETE FROM `wishlist` WHERE product_id=$id AND user_email='$email' ");
    $stmt->execute();
    echo $email;
?>