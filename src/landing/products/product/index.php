<?php
include_once("../../../services/connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/src/assets/style/global.css">
    <link rel="stylesheet" href="/dist/output.css">
    <style>
        
        .p-4{
            padding: 1rem;
        }
    </style>
</head>

<body>
    <?php
    $test =  $_GET['id'];
    $stmt = $con->prepare("SELECT * FROM product WHERE ID=$test ");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $name = '';
    $des = '';
    $cost = '';
    foreach ($result as $row) {
        $name = $row['name'];
        $des = $row['des'];
        $cost = $row['cost'];
    }
    ?>
    <?php
        include("../../../component/navbar.php");
    ?>
    <section class="pt-[70px] md:pt-[80px] pb-4 md:pb-6">
        <div class="palm-container flex flex-col md:flex-row">
            <div class="md:hidden">
                <img class="rounded" src="/src/assets/img/test1.webp" alt="">
            </div>
            <div class="hidden md:grid grid-cols-2 col-span-2 gap-[8px] w-full">
                <div class="">
                    <img class="rounded" src="/src/assets/img/test1.webp" alt="">
                </div>
                <div class="">
                    <img class="rounded" src="/src/assets/img/test1.webp" alt="">
                </div>
                <div class="">
                    <img class="rounded" src="/src/assets/img/test1.webp" alt="">
                </div>
                <div class="">
                    <img class="rounded" src="/src/assets/img/test1.webp" alt="">
                </div>
                <div class="">
                    <img class="rounded" src="/src/assets/img/test1.webp" alt="">
                </div>
                <div class="">
                    <img class="rounded" src="/src/assets/img/test1.webp" alt="">
                </div>
            </div>
            <div class="w-full md:min-w-[275px] md:max-w-[275px] w-full mt-[10px] md:mt-0 md:ml-4 lg:ml-8">
                <div class=" text-lg font-medium w-full ">
                    <?php echo $name ?>
                </div>
                <div class="text-gray-500 text-sm">
                    <?php echo $des ?>
                </div>
                <div class="text-2xl font-medium py-2 border-b border-slate-300">
                    $<?php echo $cost ?>
                </div>
                <div class="bg-white py-2 px-3 mt-3 rounded shadow-sm">
                    <div>
                        <div class="font-medium flex items-center">
                            <svg class="h-5 w-5 mr-1" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 19V5h16l.002 14H4z" />
                                <path fill="currentColor" d="M6 7h12v2H6zm0 4h12v2H6zm0 4h6v2H6z" />
                            </svg>
                            รายละเอียด
                        </div>
                        <div class="text-sm text-gray-400 border-b-2 pb-1">
                            รถเข็นโครงสร้างแข็งแรงพร้อมล้อเลื่อน 4 ล้อ ย้ายไปมาได้สะดวก และขนาดเล็กกะทัดรัด
                        </div>
                    </div>
                    <div class="mt-1">
                        <div class="font-medium flex items-center">
                            <svg class="h-5 w-5 mr-1" viewBox="0 0 32 32">
                                <g fill="currentColor">
                                    <path d="M12.5 15a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 1 0v-4a.5.5 0 0 0-.5-.5ZM16 8c2.761 0 5-.84 5-1.875c0-1.036-2.239-1.875-5-1.875s-5 .84-5 1.875C11 7.161 13.239 8 16 8Zm0-1c-1.657 0-3-.448-3-1s1.343-1 3-1s3 .448 3 1s-1.343 1-3 1Z" />
                                    <path d="M28.06 7.232a2.99 2.99 0 0 0-2.063-.878c-.043-1.078-.564-1.961-1.188-2.606c-.643-.665-1.476-1.173-2.35-1.555C20.702 1.425 18.418 1 15.998 1c-2.417 0-4.702.425-6.458 1.193c-.874.382-1.708.89-2.35 1.555C6.539 4.422 6 5.355 6 6.5v8.386a2.996 2.996 0 0 0-2.56.846l-.708.707a3 3 0 0 0 0 4.243L6 23.95v1.55c0 1.145.539 2.078 1.19 2.753c.643.664 1.477 1.171 2.351 1.554C11.297 30.575 13.581 31 16 31c2.08 0 4.047-.314 5.662-.88c.972-.341 1.888-.799 2.627-1.394C25.163 28.022 26 26.939 26 25.5V14.95l2.768-2.768a3 3 0 0 0 0-4.243l-.707-.707ZM8 18.88V9.945c.314.226.651.427 1 .606V14.5a.5.5 0 0 0 1 0v-3.505c1.686.65 3.787 1.005 6 1.005c2.418 0 4.703-.425 6.458-1.193c.875-.383 1.709-.89 2.351-1.555c.212-.219.412-.465.585-.737a1 1 0 0 1 1.252.131l.708.708a1 1 0 0 1 0 1.414L24 14.12V25.5c0 .604-.35 1.172-.966 1.668a5.62 5.62 0 0 1-1.034.647V23.5a.5.5 0 1 0-1 0v4.732c-1.37.48-3.108.768-5 .768c-4.418 0-8-1.567-8-3.5v-2.379l-3.854-3.853a1 1 0 0 1 0-1.415l.708-.707a1 1 0 0 1 1.414 0L8 18.88ZM24 6.5c0 1.933-3.582 3.5-8 3.5S8 8.433 8 6.5S11.582 3 16 3s8 1.567 8 3.5Z" />
                                </g>
                            </svg> วัสดุ
                        </div>
                        <div class="text-sm text-gray-400 border-b-2 pb-1">
                            เหล็ก, เคลือบผงอิพ็อกซี
                        </div>
                    </div>
                    <div class="mt-1">
                        <div class="font-medium flex items-center">
                            <svg class="h-5 w-5 mr-1" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.42 15.17L17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg> การดูเเลรักษา
                        </div>
                        <div class="text-sm text-gray-400">
                            เหล็ก, เคลือบผงอิพ็อกซี
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-3">
                    <button onclick="test(event, <?php echo $row['id']; ?>)" class="transition duration-500 bg-purple-500 hover:bg-purple-400 text-center text-white w-full mr-3 py-2 rounded-3xl">
                        ใส่ตะกร้า
                    </button>
                    <!-- <svg class="text-red-500 mt-[4px]" width="22" height="22" viewBox="0 0 16 16"><path fill="currentColor" d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92C0 2.755 1.79 1 4 1z"/></svg> -->

                    <div class="border-2 border-red-500 rounded-3xl p-2 cursor-pointer">
                        <svg width="22" onclick="like(event)" class="text-red-500" height="22" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m12.1 18.55l-.1.1l-.11-.1C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5c1.54 0 3.04 1 3.57 2.36h1.86C13.46 6 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5c0 2.89-3.14 5.74-7.9 10.05M16.5 3c-1.74 0-3.41.81-4.5 2.08C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.41 2 8.5c0 3.77 3.4 6.86 8.55 11.53L12 21.35l1.45-1.32C18.6 15.36 22 12.27 22 8.5C22 5.41 19.58 3 16.5 3Z" />
                        </svg>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    include("../../../component/handleLikeFunc.php")
    ?>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 8,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // autoplay: {
            //     delay: 3000,
            //     disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // breakpoints: {
            //     450: {
            //         slidesPerView: 2,
            //     },
            //     768: {
            //         slidesPerView: 3,
            //     },
            //     1024: {
            //         slidesPerView: 4,
            //     }
            // }
        });
    </script>
</body>

</html>