<?php
    session_start();
    include_once('./connection.php');
    $email = $_SESSION['email'];
    $id = $_POST["id"];
    $cost = $_POST["cost"];
    $name = $_POST["name"];
    $img1 = $_POST["img"];
    $des = $_POST["des"];
    // $sql = "INSERT INTO `cart`(`product_id`, `user_email`, `number`, `cost`, `name`, `img1`, `des`) VALUES ($id,$email,'1',$cost,$name,$img1,$des)";
    $sql = "INSERT INTO `cart`(`product_id`, `user_email`, `number`, `cost`, `name`, `img1`, `des`) VALUES ($id,?,'1',?, ?,?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([$email, $cost, $name,$img1,$des]);
    
?>