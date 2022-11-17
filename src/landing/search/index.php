<?php

session_start();
include_once("../../services/connection.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goody goody</title>
    <script src="https://kit.fontawesome.com/ee33cce78a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/src/assets/style/global.css">

</head>

<body>
    <?php
        include('../../component/navbar.php')
    ?>
    <div class="pt-[55px] sm:pt-[65px] pb-4 sm:pb-8">
        <section class="palm-container">
            <form action="/src/landing/search/" method="post" class="input-group mt-4 palm-search-con">
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input name="search" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
                </div>
            </form>
            <div class="grid gap-[8px] grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4">
                <?php if (isset($_POST['search'])) {
                    $q = "%{$_POST['search']}%";
                    $stmt = $con->prepare("SELECT * FROM product WHERE name LIKE ? OR type LIKE ?");
                    $stmt->execute([$q, $q]);
                    $result = $stmt->fetchAll();
                    $countRow = 0;
                    foreach($result as $row){
                        $countRow++;
                    }
                    if($countRow==0){?>
                        <div class="min-[450px]:col-span-2 md:col-span-1 md:col-start-2 lg:col-start-2 lg:col-span-2 mt-4">
                            <img class="mx-auto" src="../../assets/img/hugo-231.png" alt="">
                            <div class="text-gray-500 text-center mt-4">ไม่พบข้อมูลที่ต้องการค้นหา</div>
                        </div>
                    <?php
                    }
                    foreach ($result as $row) { 
                        include('../../component/card.php');
                    }
                }else{
                    $stmt = $con->prepare("SELECT * FROM product ORDER BY sales DESC LIMIT 20");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach ($result as $row) {
                        include('../../component/card.php');
                    }
                }
                ?>
            </div>
        </section>
    </div>
    <?php
        include("../../component/handleCard.php")
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>