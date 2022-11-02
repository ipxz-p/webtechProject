<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ee33cce78a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="../../assets/style/global.css">
    
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>

<body>
    <?php
        include('../../component/navbar.php')
    ?>
    <div class="pt-[70px] sm:pt-[80px]">
        <div class="palm-container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[20px] ">
                <div class="md:col-span-2">
                <div class="border-2 p-3 rounded bg-white">
                    <div class="mb-2 font-medium text-xl">ตระกร้าสินค้า</div>
                    <div class="flex  max-[350px]:p-[5px] p-2 border rounded">
                        <div class="max-[350px]:mr-1 mr-2">
                            <img class="w-[120px] rounded" src="https://sleepkomfy.com/wp-content/uploads/2019/03/Komfy_IG-July_07.jpg" alt="">
                        </div>
                        <div class="w-full px-1 sm:px-2 flex flex-col justify-center">
                            <div class="flex w-full justify-between items-center">
                                <div class="fs-5 fw-normal">
                                    หมอน
                                </div>
                                <div class="">
                                    200$
                                </div>
                            </div>
                            <div class="palm-order-containertext text-gray-500 max-[400px]:max-w-[100px] max-[520px]:max-w-[150px] max-[766px]:max-w-[300px] max-[850px]:max-w-[200px] max-[1024px]:max-w-[300px] max-w-[400px] truncate mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit qwewqeqweqew
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center ">
                                    <ion-icon class="cursor-pointer" name="remove-outline"></ion-icon>
                                    <!-- onkeypress="return (event.charCode !=8 && this.value.length != 2 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)) -->
                                    <input class="palm-order-inputnumber mx-1 h-[25px] text-xs text-center w-[50px]" type="text"  value="1" min="0" onkeypress="return check(this.value)">
                                    <i class="fa-solid fa-plus font-thin cursor-pointer"></i>
                                </div>
                                
                                <svg id="delete" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 6h18"></path>
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                </svg>

                            </div>
                        </div>
                    </div>


                </div>
                </div>
                <div class="palm-right">
                    <div class="border-2 rounded p-4 bg-white">
                        <div class="text-center">
                            <h3 class="text-xl font-medium">สรุปคำสั่งซื้อ</h3>
                            <div class="flex justify-between ">
                                <h6 class="text-gray-500 mt-3 ">จำนวนทั้งหมด</h6>
                                <h6 class="text-gray-500 mt-3">2</h6>
                            </div>
                            <div class="flex justify-between ">
                                <h6 class="text-gray-500 mt-3 ">ยอดรวม</h6>
                                <h6 class="text-gray-500 mt-3">$1300</h6>
                            </div>
                            <div class="flex justify-between border-b-3 border-b pb-2 ">
                                <h6 class="text-gray-500 mt-3 ">ส่วนลด</h6>
                                <h6 class="text-gray-500 mt-3">$300</h6>
                            </div>
                            <div class="flex justify-between ">
                                <h6 class="text-gray-500 mt-3 ">ยอดรวมทั้งหมด</h6>
                                <h6 class="mt-3 palm-text-color">$1000</h6>
                            </div>
                            <button class="transition duration-300 p-2 rounded mt-4 w-full text-white bg-purple-500 hover:bg-purple-400">
                                ดำเนินการต่อ
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        tippy('#delete', {
            content: 'ลบรายการนี้',
            animation: 'perspective-extreme',
            placement: 'bottom',
        });
        const numInputs = document.querySelectorAll('input[type=text]')
        
        numInputs.forEach(function(input) {
            input.addEventListener('change', function(e) {
                if (e.target.value == '') {
                    e.target.value = 1
                }
            })
        })
        function check(value){
            if(value.length == 3 || event.charCode == 101 || event.charCode < 48 || event.charCode > 57){
                return false;
            }
        }
    </script>
</body>

</html>