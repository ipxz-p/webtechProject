<?php
session_start();
include_once('../../services/connection.php');
// $query_cart = $con->
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
                        <div class=" font-medium text-xl">ตะกร้าสินค้า</div>
                        <?php
                        if (isset($_SESSION['email'])) {
                            $email = $_SESSION['email'];
                            $q = $con->prepare("SELECT SUM(cost * number) FROM cart WHERE user_email=?");
                            $q->execute([$email]);
                            $sum = $q->fetchAll();
                        }
                        $stmt = $con->prepare("SELECT * FROM cart WHERE EXISTS (SELECT id FROM product WHERE cart.product_id = product.id and cart.user_email = ?)");
                        if (isset($_SESSION['email'])) {
                            $stmt->execute([$email]);
                        }
                        $result = $stmt->fetchAll();
                        if ($stmt->rowCount() == 0) { ?>
                            <div class="text-center text-gray-500 text-sm my-4">
                                ไม่มีสินค้าในตะกร้า
                            </div>
                        <?php
                        }
                        foreach ($result as $row) {

                        ?>
                            <div class="flex  max-[350px]:p-[5px] p-2 border rounded mt-2">
                                <div class="max-[350px]:mr-1 mr-2">
                                    <img class="w-[120px] rounded" src="../../assets/img/<?php echo $row["img1"]; ?>" alt="">
                                </div>
                                <div class="w-full px-1 sm:px-2 flex flex-col justify-center">
                                    <div class="flex w-full justify-between items-center">
                                        <div class="fs-5 fw-normal">
                                            <?php echo $row["name"] ?>
                                        </div>
                                        <div class="">
                                            $<?php echo number_format($row["cost"]) ?>
                                        </div>
                                    </div>
                                    <div class="palm-order-containertext text-gray-500 max-[400px]:max-w-[100px] max-[520px]:max-w-[150px] max-[766px]:max-w-[300px] max-[850px]:max-w-[200px] max-[1024px]:max-w-[300px] max-w-[400px] truncate mb-3">
                                        <?php echo $row["des"] ?>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center ">
                                            <ion-icon onclick="minus(<?php echo $row['product_id'] ?>)" class="cursor-pointer" name="remove-outline"></ion-icon>
                                            <!-- onkeypress="return (event.charCode !=8 && this.value.length != 2 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)) -->
                                            <input id="<?php echo $row['product_id']; ?>" class="myinput palm-order-inputnumber mx-1 h-[25px] text-xs text-center w-[50px]" type="text" value="<?php echo $row['number'] ?>" oninput="inputNum(<?php echo $row['product_id']; ?>, this.value)" maxlength="2" >
                                            <i onclick="plus(<?php echo $row['product_id']; ?>)" class="fa-solid fa-plus font-thin cursor-pointer"></i>
                                        </div>
                                        <div onclick="deleteBt(<?php echo $row['product_id']; ?>)" class="">

                                            <svg id="delete" class="cursor-pointer" width="20" height="20" viewBox="0 0 1024 1024">
                                                <path fill="currentColor" d="m896.8 159.024l-225.277.001V71.761c0-40.528-33.008-72.496-73.536-72.496H426.003c-40.528 0-73.52 31.968-73.52 72.496v87.264h-225.28c-17.665 0-32 14.336-32 32s14.335 32 32 32h44.015l74.24 739.92c3.104 34.624 32.608 61.776 67.136 61.776h398.8c34.528 0 64-27.152 67.088-61.472l74.303-740.24h44.016c17.68 0 32-14.336 32-32s-14.32-31.985-32-31.985zM416.482 71.762c0-5.232 4.271-9.505 9.52-9.505h171.984c5.248 0 9.536 4.273 9.536 9.505v87.264h-191.04zm298.288 885.44c-.16 1.777-2.256 3.536-3.376 3.536h-398.8c-1.12 0-3.232-1.744-3.425-3.84l-73.632-733.856H788.45z" />
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div> <?php
                                }
                                    ?>



                    </div>
                </div>
                <div class="palm-right">
                    <div class="border-2 rounded p-4 bg-white">
                        <div class="text-center">
                            <h3 class="text-xl font-medium">สรุปคำสั่งซื้อ</h3>
                            <div class="flex justify-between ">
                                <h6 class="text-gray-500 mt-3 ">จำนวนทั้งหมด</h6>
                                <h6 class="text-gray-500 mt-3"><?php echo $stmt->rowCount(); $_SESSION['numOfOrder'] = $stmt->rowCount(); ?></h6>
                            </div>
                            <div class="flex justify-between ">
                                <h6 class="text-gray-500 mt-3 ">ยอดรวม</h6>
                                <h6 class="text-gray-500 mt-3">$<span id="amount"><?php
                                if($stmt->rowCount()==0){
                                    echo 0;
                                }else{
                                    foreach ($sum as $row){
                                        echo number_format($row['0']);
                                    }
                                }
                                ?></span></h6>
                            </div>
                            <div class="flex justify-between border-b-3 border-b pb-2 ">
                                <h6 class="text-gray-500 mt-3 ">ส่วนลด</h6>
                                <h6 class="text-gray-500 mt-3">$0</h6>
                            </div>
                            <div class="flex justify-between ">
                                <h6 class="text-gray-500 mt-3 ">ยอดรวมทั้งหมด</h6>
                                <h6 class="mt-3 palm-text-color">$<span id="sumCost"><?php
                                if($stmt->rowCount()==0){
                                    echo 0;
                                }else{
                                    foreach ($sum as $row){
                                        echo number_format($row['0']);
                                    }
                                }
                                ?></span></h6>
                            </div>
                            <button onclick="confirm()" class="transition duration-300 p-2 rounded mt-4 w-full text-white bg-purple-500 hover:bg-purple-400">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tippy('#delete', {
            content: 'ลบรายการนี้',
            animation: 'perspective-extreme',
            placement: 'bottom',
        });
        function confirm(){
            if(<?php echo $stmt->rowCount(); ?> == 0){
                Swal.fire({
                    title: 'เกิดข้อผิดพลาด',
                    text: 'โปรดเลือกสินค้าอย่างน้อย 1 ชิ้น',
                    icon: 'error',
                    confirmButtonText: 'รับทราบ'
                    })
            }else{
                window.location.href = "/src/landing/address/"
            }
        }
        function deleteBt(id) {
            $.ajax({
                url: "/src/services/handleDeleteCart.php",
                type: "POST",
                data: {
                    "p_id": id
                },
                success: function() {
                    location.reload();
                }
            })
        }
        const numInputs = document.querySelectorAll('input[type=text]')
        numInputs.forEach(function(input) {
            input.addEventListener('change', function(e) {
                if (e.target.value == '' || e.target.value == 0) {
                    e.target.value = 1
                }
            })
        })
        function check(value) {
            if (value.length == 3 || event.charCode == 101 || event.charCode < 48 || event.charCode > 57 || (value.length == 0 && event.charCode == 48)) {
                return false;
            }
        }
        function inputNum(id, value){

            document.getElementById(id).value = document.getElementById(id).value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');
            
            num = document.getElementById(id).value;
            if(isNaN(num) || num == "" || num == 0){
                num = 1
            }
            $.ajax({
                    url: "/src/services/handleChangeNumCart.php",
                    type: "POST",
                    data: {
                        "id": id,
                        "num": num
                    },
                    success: function(data) {
                        document.getElementById("amount").innerHTML = data;
                        document.getElementById("sumCost").innerHTML = data;
                    }
                })
        }
        function minus(id) {
            if (parseInt(document.getElementById(id).value) > 1) {
                document.getElementById(id).value = parseInt(document.getElementById(id).value) - 1
                num = document.getElementById(id).value;
                $.ajax({
                    url: "/src/services/handleChangeNumCart.php",
                    type: "POST",
                    data: {
                        "id": id,
                        "num": num
                    },
                    success: function(data) {
                        document.getElementById("amount").innerHTML = data;
                        document.getElementById("sumCost").innerHTML = data;
                    }
                })
            }
        }

        function plus(id) {
            document.getElementById(id).value = parseInt(document.getElementById(id).value) + 1;
            
            num = document.getElementById(id).value;
            $.ajax({
                url: "/src/services/handleChangeNumCart.php",
                type: "POST",
                data: {
                    "id": id,
                    "num": num
                },
                success: function(data) {
                    document.getElementById("amount").innerHTML = data;
                    document.getElementById("sumCost").innerHTML = data;
                }
            })
        }
    </script>
</body>

</html>