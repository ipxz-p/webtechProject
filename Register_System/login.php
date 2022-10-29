<?php
session_start();
include('server.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงชื่อเข้าใช้</title>
    <link rel="stylesheet" href="ing_login.css">
</head>

<body>
<?php
// include('navbar.html');
?>
    <div class="ing-container">
        <div class="ing-con1">
            <div class="header">
                <h2>ฉันมีบัญชีผู้ใช้</h2>
            </div>
            <form action="login_db.php" method="post">
                <div class="wrapper">
                    <div class="ing-input">
                        <input type="text" name="username" required>
                        <div class="underline"></div>
                        <label>ชื่อ</label>
                    </div>
                    <div class="ing-input">
                        <input type="password" name="password" required>
                        <div class="underline"></div>
                        <label for="password">รหัสผ่าน</label>
                    </div>
                    <div class="ing-input-group">
                        <button type="submit" name="login_user" class="ing-btn ing-btn1">ลงชื่อเข้าใช้</button>
                    </div>
                </div>
        </div>

        <div class="ing-con2">
            <div class="">
                <h2>ลงทะเบียน</h2>
            </div>
            <div class="">
                <p>กรุณาลงทะเบียน</p>
            </div>
            <div class="">
                <button type="submit" class="ing-btn ing-btn2"><a href="register.php">ลงทะเบียน</a></button>
            </div>
        </div>
        <div class="ing-con3">
            <p>คุณยังไม่มีบัญชีผู้ใช้ใช่หรือไม่ <a href="register.php">ลงทะเบียน</a></p>
        </div>
    </div>

    </form>
    
</body>

</html>