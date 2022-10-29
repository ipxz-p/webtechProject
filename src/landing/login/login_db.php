<?php
include_once("../../services/connection.php");
session_start();
if(isset($_POST['loginSubmit'])){
    $email = $_POST['floating_email'];
    $password = $_POST['floating_password'];
    // ตรวจสอบว่าอีเมลซ้ำไหม
    $stmt = $con->prepare("SELECT * FROM user WHERE email=? and password=?");
    $stmt->execute([$email, $password]);
    $result = $stmt->fetch();
    if(!empty($result)){
        $_SESSION['email'] = $email;
        
    }else{
        $_SESSION['email'] = "err";
    }
    header("location: index.php");
}
?>