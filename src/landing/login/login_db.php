<?php
include_once("../../services/connection.php");
session_start();
if(isset($_POST['loginSubmit'])){
    $email = $_POST['floating_email'];
    $password = $_POST['floating_password'];
    $password = hash('sha512', $password);
    // ตรวจสอบว่าอีเมลซ้ำไหม
    $stmt = $con->prepare("SELECT * FROM user WHERE email=? and password=?");
    $stmt->execute([$email, $password]);
    $result = $stmt->fetch();
    if(!empty($result)){
        $_SESSION['email'] = $email;
        $_SESSION['loginCheck'] = "pass";
        
    }else{
        $_SESSION['loginCheck'] = "err";
    }
    header("location: index.php");
}
?>