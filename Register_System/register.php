<?php
session_start();
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>

    <link rel="stylesheet" href="ing_register.css">
</head>

<body>
    <div class="ing-container">
        <div class="con-ing">
            <div class="ing-header">
                <h2>ลงทะเบียน</h2>
            </div>
            <form action="register_db.php" method="post" class="ing-form">
                <div class="wrapper">
                    <div class="ing-input">
                        <label class="label" for="username">Username</label>
                        <div class="underline"></div>
                        <input type="text" name="username">
                    </div>
                    <div class="ing-input">
                        <label for="email">Email</label>
                        <div class="underline"></div>
                        <input type="email" name="email">
                    </div>
                    <div class="ing-input">
                        <label for="password_1">Password</label>
                        <div class="underline"></div>
                        <input type="password" name="password_1">
                    </div>
                    <div class="ing-input">
                        <label for="password_2">Confirm Password</label>
                        <div class="underline"></div>
                        <input type="password" name="password_2">
                    </div>
                </div>
                <div class="">
                    <button type="submit" name="reg_user" class="ing-btn">Register</button>
                </div>
                <div class="ing-con3">
                    <p>Already a member? <a href="login.php">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>