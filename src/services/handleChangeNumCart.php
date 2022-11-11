<?php
    session_start();
    include_once('./connection.php');
    $email = $_SESSION['email'];
    $id = $_POST["id"];
    $num = $_POST["num"];
    $sql = "UPDATE `cart` SET number = $num WHERE user_email = ? and product_id = $id";
    $stmt = $con->prepare($sql);
    $stmt->execute([$email]);
    $q = $con->prepare("SELECT SUM(cost * number) FROM cart WHERE user_email=?");
    $q->execute([$email]);
    $sum = $q->fetchAll();
    foreach($sum as $row){
        echo number_format($row['0']);
    }
?>