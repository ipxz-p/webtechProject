<?php
    session_start();
    include_once('./connection.php');
    $email = $_SESSION['email'];
    $id = $_POST["id"];
    $cost = $_POST["cost"];
    $name = $_POST["name"];
    $img1 = $_POST["img"];
    $des = $_POST["des"];
    $stmt = $con->prepare("SELECT `product_id`, `user_email` FROM `cart` WHERE product_id=$id and user_email='$email' ");
    $stmt->execute();
    if($stmt->rowCount() == 0){
    $sql = "INSERT INTO `cart`(`product_id`, `user_email`, `number`, `cost`, `name`, `img1`, `des`) VALUES ($id,?,'1',?, ?,?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([$email, $cost, $name,$img1,$des]);
    }
    $stmt = $con->prepare("SELECT * FROM cart WHERE EXISTS (SELECT id FROM product WHERE cart.product_id = product.id and cart.user_email = ?)");
    $stmt->execute([$_SESSION['email']]);
    echo $stmt->rowCount();
?>