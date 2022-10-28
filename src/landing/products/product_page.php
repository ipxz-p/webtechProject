<?php
    $connect = mysqli_connect('localhost','root','','ikea_products');
    $result = mysqli_query($connect, "SELECT * FROM products");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="ano-container">
            <h1>ของตกแต่งบ้าน</h1>
            <div class="ano-grid-con2">
                <a href="inner_page1.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/persillade-plant-pot-dark-grey__0899426_pe725858_s5.jpg?f=s'><div class="text-box"><h2>กระถางดอกไม้และต้นไม้</h2></div></div></a>
                <a href="inner_page2.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/knapper-standing-mirror-white__0858698_pe676200_s5.jpg?f=xl'><div class="text-box"><h2>กระจกเงา</h2></div></div></a>
                <a href="inner_page3.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/beraekna-vase-clear-glass__0908949_pe624748_s5.jpg?f=xl'><div class="text-box"><h2>แจกันและจานชาม</h2></div></div></a>
                <a href="inner_page4.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/hovsta-frame-dark-brown__0904698_pe652823_s5.jpg?f=xl'><div class="text-box"><h2>รูปภาพและกรอบรูป</h2></div></div></a>
                <a href="inner_page5.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/smycka-artificial-flower-carnation-pink__0903360_pe685418_s5.jpg?f=xl'><div class="text-box"><h2>ต้นไม้ ดอกไม้ประดิษฐ์และดอกไม้แห้ง</h2></div></div></a>
                <a href="inner_page6.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/kuggis-box-with-lid-white__0990579_pe819363_s5.jpg?f=xl'><div class="text-box"><h2>กล่องพลาสติก กล่องเก็บของและตะกร้า</h2></div></div></a>
                <a href="inner_page7.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/skadis-pegboard-white__1095922_pe864103_s5.jpg?f=xl'><div class="text-box"><h2>กระดานปักหมุดและกระดานสำหรับติดประกาศ</h2></div></div></a>
                <a href="inner_page8.php" target="_blank"><div class="ano-img"><img src='https://www.ikea.com/th/th/images/products/vardande-basket-with-potpourri__1114463_ph184173_s5.jpg?f=xl'><div class="text-box"><h2>เครื่องหอมในบ้าน</h2></div></div></a>
            </div>
            <?php
               for ($i=1;$i < 9; $i++){
                    echo "<div class='ano-h3'>";
                    switch ($i){
                        case 1 : echo "<h2 id='first'>กระถางดอกไม้และต้นไม้</h2>";
                        break;
                        case 2 : echo "<h2 id='second'>กระจกเงา</h2>";
                        break;
                        case 3 : echo "<h2 id='third'>แจกันและจานชาม</h2>";
                        break;
                        case 4 : echo "<h2 id='fourth'>รูปภาพและกรอบรูป</h2>";
                        break;
                        case 5 : echo "<h2 id='fifth'>ต้นไม้ ดอกไม้ประดิษฐ์และดอกไม้แห้ง</h2>";
                        break;
                        case 6 : echo "<h2 id='sixth'>กล่องพลาสติก กล่องเก็บของและตะกร้า</h2>";
                        break;
                        case 7 : echo "<h2 id='seventh'>กระดานปักหมุดและกระดานสำหรับติดประกาศ</h2>";
                        break;
                        case 8 : echo "<h2 id='eighth'>เครื่องหอมในบ้าน</h2>";
                        break;
                    }
                    echo "</div>";
                    echo "<div class='ano-grid-con'>";
                    for ($j=0; $j < 5; $j++){
                        $row = mysqli_fetch_array($result);
                        include('card.php');
                    }
                    echo "</div>";
                    echo "<hr class='ano-hr'>";
               }
            ?>
    </div>
</body>
</html>