<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ee33cce78a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="">
        <div class="container mt-4">
            <div class="palm-grid-3">
                <div class="palm-left card p-4">
                    <h2 class="mb-4">ตระกร้าสินค้า</h2>
                    <div class="card p-2 mb-3 flex-row">
                        <div class="me-2">
                            <img class="palm-order-img" src="https://sleepkomfy.com/wp-content/uploads/2019/03/Komfy_IG-July_07.jpg" alt="">
                        </div>
                        <div class="w-100 px-2 d-flex flex-column justify-content-center">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="fs-5 fw-normal">
                                    หมอน
                                </div>
                                <div class="">
                                    200$
                                </div>
                            </div>
                            <div class="palm-order-containertext text-secondary mb-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit qwewqeqweqew
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center ">
                                    <ion-icon name="remove-outline"></ion-icon>
                                    <!-- onkeypress="return (event.charCode !=8 && this.value.length != 2 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)) -->
                                    <input class="palm-order-inputnumber mx-2" type="number"  value="1" min="0" onkeypress="return check(this.value)">
                                    <i class="fa-solid fa-plus palm-order-num-icon"></i>
                                </div>
                                
                                <svg style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 6h18"></path>
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                </svg>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="palm-right">
                    <div class="card p-4">
                        <div class="text-center">
                            <h3>สรุปคำสั่งซื้อ</h3>
                            <div class="d-flex justify-content-between ">
                                <h6 class="text-secondary mt-3 ">จำนวนทั้งหมด</h6>
                                <h6 class="text-secondary mt-3">2</h6>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <h6 class="text-secondary mt-3 ">ยอดรวม</h6>
                                <h6 class="text-secondary mt-3">$1300</h6>
                            </div>
                            <div class="d-flex justify-content-between border-2 border-bottom ">
                                <h6 class="text-secondary mt-3 ">ส่วนลด</h6>
                                <h6 class="text-secondary mt-3">$300</h6>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <h6 class="text-secondary mt-3 ">ยอดรวมทั้งหมด</h6>
                                <h6 class="mt-3 palm-text-color">$1000</h6>
                            </div>
                            <div class="btn btn-primary mt-4 w-100 bg-re">
                                ดำเนินการต่อ
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const numInputs = document.querySelectorAll('input[type=number]')
        
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