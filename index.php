<?php
session_start();
include_once('./src/services/connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/ee33cce78a.js" crossorigin="anonymous"></script>
    <link rel="prefetch" href="./dist/output.css">
    <link rel="stylesheet" href="./src/assets/style/global.css">
    <style>
        @media screen and (max-width: 639px) {
            #imgHome1{
                content:url("./src/assets/img/Ing1-2.jpg");
            }
            #imgHome2{
                content:url("./src/assets/img/haloween2.png");
            }
            #imgHome3{
                content:url("./src/assets/img/pink1.png");
            }
            #imgHome4{
                content:url("./src/assets/img/christmas1.png");
            }
        }
        @media screen and (min-width: 640px) {
            #imgHome1{
                content:url("./src/assets/img/Ing1.png");
            }
            #imgHome2{
                content:url("./src/assets/img/haloween.png");
            }
            #imgHome3{
                content:url("./src/assets/img/pspink.png");
            }
            #imgHome4{
                content:url("./src/assets/img/christmas.png");
            }
        }
    </style>
</head>

<body>
    <div class="">
        <?php
        include('./src/component/navbar.php')
        ?>
        <div class="pt-[50px] sm:pt-[52px] pb-4 sm:pb-8">
            <section class="">

                <div class="swiper homeSwiper">
                    <div class="swiper-wrapper">
                        <img class="swiper-slide w-full" id="imgHome1" alt="">
                        <img class="swiper-slide w-full" id="imgHome2" alt="">
                        <img class="swiper-slide w-full" id="imgHome3" alt="">
                        <img class="swiper-slide w-full" id="imgHome4" alt="">
                    </div>
                    <div class="swiper-button-next bg-black/[0.3] px-4 rounded-l-md text-white right-0"></div>
                    <div class="swiper-button-prev bg-black/[0.3] px-4 rounded-r-md text-white left-0"></div>
                </div>
            </section>
            <section class="palm-container">
                <div class="swiper mySwiper h-full mt-4 p-4 bg-white rounded-md">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <svg class="w-[22px] h-[22px] mx-[7px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="#d85b53" class="color200e32 svgShape" transform="translate(2 2)">
                                    <path fill="#26d7fe" d="M14.0755097,2.66453526e-15 L17.4614756,2.66453526e-15 C18.8637443,2.66453526e-15 20,1.1458518 20,2.55996321 L20,5.97452492 C20,7.38863633 18.8637443,8.53448813 17.4614756,8.53448813 L14.0755097,8.53448813 C12.673241,8.53448813 11.5369853,7.38863633 11.5369853,5.97452492 L11.5369853,2.55996321 C11.5369853,1.1458518 12.673241,2.66453526e-15 14.0755097,2.66453526e-15" class="color000000 svgShape" opacity=".4" />
                                    <path fill="#26d7fe" d="M5.9244903,11.4655119 C7.32675901,11.4655119 8.46301469,12.6113637 8.46301469,14.0254751 L8.46301469,17.4400368 C8.46301469,18.8531901 7.32675901,20 5.9244903,20 L2.53852439,20 C1.13625568,20 8.8817842e-16,18.8531901 8.8817842e-16,17.4400368 L8.8817842e-16,14.0254751 C8.8817842e-16,12.6113637 1.13625568,11.4655119 2.53852439,11.4655119 L5.9244903,11.4655119 Z M17.4614756,11.4655119 C18.8637443,11.4655119 20,12.6113637 20,14.0254751 L20,17.4400368 C20,18.8531901 18.8637443,20 17.4614756,20 L14.0755097,20 C12.673241,20 11.5369853,18.8531901 11.5369853,17.4400368 L11.5369853,14.0254751 C11.5369853,12.6113637 12.673241,11.4655119 14.0755097,11.4655119 L17.4614756,11.4655119 Z M5.9244903,7.99360578e-15 C7.32675901,7.99360578e-15 8.46301469,1.1458518 8.46301469,2.55996321 L8.46301469,5.97452492 C8.46301469,7.38863633 7.32675901,8.53448813 5.9244903,8.53448813 L2.53852439,8.53448813 C1.13625568,8.53448813 8.8817842e-16,7.38863633 8.8817842e-16,5.97452492 L8.8817842e-16,2.55996321 C8.8817842e-16,1.1458518 1.13625568,7.99360578e-15 2.53852439,7.99360578e-15 L5.9244903,7.99360578e-15 Z" class="color000000 svgShape" />
                                </g>
                            </svg>
                            <h1 class="text-xl font-medium">ประเภทของสินค้า</h1>
                        </div>
                        <a href="/src/landing/type/" class="transition duration-300 text-gray-500 cursor-pointer flex items-center hover:bg-slate-100 rounded-xl group/link pl-2">
                            <div class="transition duration-300 group-hover/link:text-gray-700">ดูทั้งหมด</div>
                            <svg class="transition duration-300 mt-[2px] group-hover/link:translate-x-0.5 sm:mt-[3px]" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9.29 15.88L13.17 12L9.29 8.12a.996.996 0 1 1 1.41-1.41l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z" />
                            </svg>
                        </a>
                    </div>
                    <div class="swiper-wrapper bg-white mt-2">

                        <?php
                        $stmt = $con->prepare("SELECT * FROM product GROUP BY type LIMIT 8");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $row) {
                            include('./src/component/cardType.php');
                        }
                        ?>
                    </div>
                    <div class="swiper-button-next bg-black/[0.3] px-4 rounded-l-md text-white right-0"></div>
                    <div class="swiper-button-prev bg-black/[0.3] px-4 rounded-r-md text-white left-0"></div>
                </div>
            </section>

            <section class="palm-container">
                <div class="swiper mySwiper h-full mt-4 p-4 bg-white rounded-md">
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-medium">⚡สินค้ามาใหม่</h1>
                        <a href="/src/landing/products/new/" class="transition duration-300 text-gray-500 cursor-pointer flex items-center hover:bg-slate-100 rounded-xl group/link pl-2">
                            <div class="transition duration-300 group-hover/link:text-gray-700">ดูทั้งหมด</div>
                            <svg class="transition duration-300 mt-[2px] group-hover/link:translate-x-0.5 sm:mt-[3px]" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9.29 15.88L13.17 12L9.29 8.12a.996.996 0 1 1 1.41-1.41l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z" />
                            </svg>
                        </a>
                    </div>
                    <div class="swiper-wrapper bg-white mt-2">

                        <?php
                        $stmt = $con->prepare("SELECT * FROM product ORDER BY id DESC LIMIT 8");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $row) {
                            include('./src/component/card.php');
                        }
                        ?>
                    </div>
                    <div class="swiper-button-next bg-black/[0.3] px-4 rounded-l-md text-white right-0"></div>
                    <div class="swiper-button-prev bg-black/[0.3] px-4 rounded-r-md text-white left-0"></div>
                </div>
            </section>
            <section class="palm-container">
                <div class="swiper mySwiper h-full mt-4 p-4 bg-white rounded-md">
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-medium">🔥สินค้าขายดี</h1>
                        <a href="/src/landing/products/bestseller/" class="transition duration-300 text-gray-500 cursor-pointer flex items-center hover:bg-slate-100 rounded-xl group/link pl-2">
                            <div class="transition duration-300 group-hover/link:text-gray-700">ดูทั้งหมด</div>
                            <svg class="transition duration-300 mt-[2px] group-hover/link:translate-x-0.5 sm:mt-[3px]" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9.29 15.88L13.17 12L9.29 8.12a.996.996 0 1 1 1.41-1.41l4.59 4.59c.39.39.39 1.02 0 1.41L10.7 17.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z" />
                            </svg>
                        </a>
                    </div>
                    <div class="swiper-wrapper bg-white mt-2">

                        <?php
                        $stmt = $con->prepare("SELECT * FROM product ORDER BY sales DESC LIMIT 8");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $row) {
                            include('./src/component/card.php');
                        }
                        ?>
                    </div>
                    <div class="swiper-button-next bg-black/[0.3] px-4 rounded-l-md text-white right-0"></div>
                    <div class="swiper-button-prev bg-black/[0.3] px-4 rounded-r-md text-white left-0"></div>
                </div>
            </section>
        </div>
        <footer>
            <?php
            include("./src/component/footer.php");
            ?>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php
    include('./src/component/handleCard.php')
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".homeSwiper", {
            slidesPerView: 1,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
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
            loop: true,
            breakpoints: {
                450: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                }
            }
        });
    </script>
</body>

</html>