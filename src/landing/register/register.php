<?php
    session_start();
    include_once("../../services/connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['floating_name'];
        $email = $_POST['floating_email'];
        $password = $_POST['floating_password'];
        // ตรวจสอบว่าอีเมลซ้ำไหม
        $stmt = $con->prepare("SELECT * FROM user WHERE email=?");
        $stmt->execute([$email]);
        $result = $stmt->fetch();
        if(!empty($result)){
            $_SESSION['emailUsed'] = "true";
        }
        else{
            $_SESSION['emailUsed'] = "false";
            $sql = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
            $stmt = $con->prepare($sql);
            try{
                $stmt->execute();
                $_SESSION['email'] = $email;
            }
            catch(Exception $e){
                throw $e;
            }
        }
    }
    header("location: index.php");
?>