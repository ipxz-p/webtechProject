<?php
    include_once('./connection.php');
    $id = $_POST['p_id'];
    $stmt = $con->prepare("DELETE FROM `cart` WHERE product_id=$id");
    $stmt->execute();
?>