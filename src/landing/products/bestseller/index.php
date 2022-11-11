<?php
session_start();
include_once("../../../services/connection.php");
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
        include('../../../component/navbar.php')
        ?>
        <div class="pt-[60px] sm:pt-[70px] pb-4 sm:pb-8">
            <section class="palm-container">
                <div class="swiper mySwiper h-full mt-4 p-4 bg-white rounded-md">
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-medium">🔥สินค้าขายดี</h1>
                    </div>
                    <div class="mt-2 grid grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[8px]">
                        <?php
                        $stmt = $con->prepare("SELECT * FROM product ORDER BY sales DESC LIMIT 20");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $row) {
                            include('../../../component/card.php');
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
        include("../../../component/footer.php")
    ?>
    <?php
        include("../../../component/handleCard.php")
    ?>
</body>
</html>