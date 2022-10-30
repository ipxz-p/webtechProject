<?php
include_once("../../services/connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="../dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="../global.css">
    <style>
        
    </style>
</head>

<body>
    <?php
    $test =  $_GET['id'];
    $stmt = $con->prepare("SELECT * FROM product WHERE ID=$test ");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $row) {
        echo $row['img1'];
        // include('card.php');
    }
    ?>
    <!-- <div class="palm-container">
        <section class="grid grid-cols-2 md:grid-cols-3 my-[20px] lg:my-[50px]">
            
            <div class="col-span-2 hidden md:grid grid-cols-1 md:grid-cols-2 gap-[5px]">
                <img class=" w-full object-cover" src="../../assets/img/" alt="">
                <img class=" w-full object-cover" src="../img/" alt="">
                <img class=" w-full object-cover" src="../img/" alt="">
                <img class=" w-full object-cover" src="../img/" alt="">
            </div>
            <div class="col-span-2 grid grid-cols-1 lg:grid-cols-2 gap-[5px] swiper mySwiper md:hidden">
                <div class="swiper-wrapper" >
                    <img class="swiper-slide w-full object-cover" src="../img/" alt="">
                    <img class="swiper-slide w-full object-cover" src="../img/" alt="">
                    <img class="swiper-slide w-full object-cover" src="../img/" alt="">
                    <img class="swiper-slide w-full object-cover" src="../img/" alt="">
                </div>
                <div class="swiper-pagination"></div>
            </div>
            
            <div class="mt-[20px] md:mt-[0px] md:ml-[20px] lg:ml-[40px] col-span-2 md:col-span-1">
                <div class="font-medium text-xl">
                    BRÄDA แบรดด้า
                </div>
                <div class="">
                    ที่วางแล็ปท็อป, ดำ, 42x31 ซม.
                </div>
                <div class="text-gray-500">
                    มียางกันลื่นช่วยยึดแล็ปท็อปไม่ให้เลื่อนไปมาขณะทำงาน
                </div>
                <div class="font-medium text-xl mt-2">
                    รายละเอียดสินค้า
                </div>
                <div class="text-gray-500">
                    ขอบตั้งป้องกันเครื่องแล็ปท็อปหล่น จึงวางเครื่องได้อย่างปลอดภัย ท็อปโต๊ะเอียง หน้าจอแล็ปท็อปตรงกับระดับสายตาพอดี จึงนั่งทำงานได้สบายยิ่งขึ้น
                </div>
                <div class="mt-2 font-medium text-xl">
                    การดูแลรักษา
                </div>
                <div class="text-gray-500">
                    ใช้ผ้านุ่มชุบน้ำหมาดๆ เช็ดให้สะอาด อาจใช้น้ำยาล้างจานหรือน้ำสบู่อ่อนได้หากมีคราบเปื้อน ใช้ผ้าสะอาดเช็ดให้แห้ง
                </div>
                <div class="mt-2 text-2xl font-semibold">
                    $69
                </div>
                <div class="p-2 cursor-pointer text-center bg-[#645CAA] text-[#fff] w-full mt-2 rounded-3xl">
                    ใส่ตระกร้า
                </div>
            </div>
        </section>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>