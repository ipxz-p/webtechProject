<?php
session_start();
include_once('../../services/connection.php');
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
// $query_cart = $con->
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="../../assets/style/global.css">
</head>

<body>
    <?php
    include("../../component/navbar.php")
    ?>
    <div class="pt-[70px] sm:pt-[80px] pb-4 sm:pb-8">
        <div class="palm-container">
            <div class="container mt-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[20px] ">
                    <form action="index.php" class="palm-left needs-validation" novalidate>
                        <div class="card p-4">
                            <h3 class="text-xl font-medium">ที่อยู่จัดส่ง</h3>
                            <div class="has-validation">
                                <h6 class="text-secondary mt-3">ชื่อ</h6>
                                <input id="name" type="text" class="form-control mt-1 border-2 rounded border-gray-300" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    ใส่ชื่อก่อนไปขั้นตอนถัดไป
                                </div>
                            </div>
                            <div class="has-validation">
                                <h6 class="text-secondary mt-2">เบอร์โทรศัพท์</h6>
                                <input id="phone" type="number" class="form-control mt-1 border-2 rounded border-gray-300" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    ใส่เบอร์โทรศัพท์ก่อนไปขั้นตอนถัดไป
                                </div>
                            </div>
                            <div class="has-validation">
                                <h6 class="text-secondary mt-2">ที่อยู่</h6>
                                <textarea id="address" rows="4" class="mt-1 w-full rounded border-2 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>                                <div class="invalid-feedback">
                                    ใส่ที่อยู่ก่อนไปขั้นตอนถัดไป
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="palm-right">
                            <div class="border-2 rounded p-4 bg-white">
                                <div class="text-center">
                                    <h3 class="text-xl font-medium">สรุปคำสั่งซื้อ</h3>
                                    <div class="flex justify-between ">
                                        <h6 class="text-gray-500 mt-3 ">จำนวนทั้งหมด</h6>
                                        <h6 class="text-gray-500 mt-3"><?php echo $stmt->rowCount(); ?></h6>
                                    </div>
                                    <div class="flex justify-between ">
                                        <h6 class="text-gray-500 mt-3 ">ยอดรวม</h6>
                                        <h6 class="text-gray-500 mt-3">$<span id="amount"><?php
                                        if($stmt->rowCount()==0){
                                            echo 0;
                                        }else{
                                            foreach ($sum as $row){
                                                echo $row['0'];
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
                                        <h6 class="mt-3 ">$<span id="sumCost"><?php
                                        if($stmt->rowCount()==0){
                                            echo 0;
                                        }else{
                                            foreach ($sum as $row){
                                                echo $row['0'];
                                            }
                                        }
                                        ?></span></h6>
                                    </div>
                                    <button onclick="confirm()" class="transition duration-300 p-2 rounded mt-4 w-full text-white bg-purple-500 hover:bg-purple-400">
                                        ยืนยันคำสั่งซื้อ
                                    </button>
    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        async function confirm(){
            if(document.getElementById("name").value == ""){
                Swal.fire({
                    title: 'เกิดข้อผิดพลาด',
                    text: 'โปรดใส่ชื่อก่อนสั่งซื้อ',
                    icon: 'error',
                    confirmButtonText: 'รับทราบ'
                    })
            }
            else if(document.getElementById("phone").value == ""){
                Swal.fire({
                    title: 'เกิดข้อผิดพลาด',
                    text: 'โปรดใส่เบอร์โทรก่อนสั่งซื้อ',
                    icon: 'error',
                    confirmButtonText: 'รับทราบ'
                    })
            }
            else if(document.getElementById("address").value == ""){
                Swal.fire({
                    title: 'เกิดข้อผิดพลาด',
                    text: 'โปรดใส่ที่อยู่ก่อนสั่งซื้อ',
                    icon: 'error',
                    confirmButtonText: 'รับทราบ'
                    })
                    
            }
            else{
                await Swal.fire({
                    title: 'ยินดีด้วย',
                    text: 'การสั่งซื้อสำเร็จเเล้ว',
                    icon: 'success',
                    confirmButtonText: 'รับทราบ'
                    })
                $.ajax({
                    url: "/src/services/handleOrder.php",
                    type: "POST",
                    success: function() {
                        window.location.href = "/";
                    }
            })
                    
            }
        }
    </script>
</body>

</html>