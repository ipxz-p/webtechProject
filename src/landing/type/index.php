<?php
session_start();
include_once("../../services/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/src/assets/style/global.css">
</head>

<body>
    <div>
        <?php
        include('../../component/navbar.php')
        ?>
        <div class="pt-[70px] sm:pt-[80px] pb-4 sm:pb-10">
            <section class="palm-container">
                <div class="swiper mySwiper h-full mt-4 p-4 bg-white rounded-md">
                    <div class="flex items-center">
                        <svg class="w-[22px] h-[22px] mx-[7px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g fill="#d85b53" class="color200e32 svgShape" transform="translate(2 2)">
                                <path fill="#26d7fe" d="M14.0755097,2.66453526e-15 L17.4614756,2.66453526e-15 C18.8637443,2.66453526e-15 20,1.1458518 20,2.55996321 L20,5.97452492 C20,7.38863633 18.8637443,8.53448813 17.4614756,8.53448813 L14.0755097,8.53448813 C12.673241,8.53448813 11.5369853,7.38863633 11.5369853,5.97452492 L11.5369853,2.55996321 C11.5369853,1.1458518 12.673241,2.66453526e-15 14.0755097,2.66453526e-15" class="color000000 svgShape" opacity=".4" />
                                <path fill="#26d7fe" d="M5.9244903,11.4655119 C7.32675901,11.4655119 8.46301469,12.6113637 8.46301469,14.0254751 L8.46301469,17.4400368 C8.46301469,18.8531901 7.32675901,20 5.9244903,20 L2.53852439,20 C1.13625568,20 8.8817842e-16,18.8531901 8.8817842e-16,17.4400368 L8.8817842e-16,14.0254751 C8.8817842e-16,12.6113637 1.13625568,11.4655119 2.53852439,11.4655119 L5.9244903,11.4655119 Z M17.4614756,11.4655119 C18.8637443,11.4655119 20,12.6113637 20,14.0254751 L20,17.4400368 C20,18.8531901 18.8637443,20 17.4614756,20 L14.0755097,20 C12.673241,20 11.5369853,18.8531901 11.5369853,17.4400368 L11.5369853,14.0254751 C11.5369853,12.6113637 12.673241,11.4655119 14.0755097,11.4655119 L17.4614756,11.4655119 Z M5.9244903,7.99360578e-15 C7.32675901,7.99360578e-15 8.46301469,1.1458518 8.46301469,2.55996321 L8.46301469,5.97452492 C8.46301469,7.38863633 7.32675901,8.53448813 5.9244903,8.53448813 L2.53852439,8.53448813 C1.13625568,8.53448813 8.8817842e-16,7.38863633 8.8817842e-16,5.97452492 L8.8817842e-16,2.55996321 C8.8817842e-16,1.1458518 1.13625568,7.99360578e-15 2.53852439,7.99360578e-15 L5.9244903,7.99360578e-15 Z" class="color000000 svgShape" />
                            </g>
                        </svg>
                        <h1 class="text-xl font-medium">ประเภทของสินค้า</h1>
                    </div>
                    <div class="mt-2 grid grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[8px]">
                        <?php
                        $stmt = $con->prepare("SELECT * FROM product GROUP BY type LIMIT 8");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $row) {
                            include('../../component/cardType.php');
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
    include("../../component/handleLikeFunc.php")
    ?>
</body>

</html>