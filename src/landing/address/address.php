<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-4">
        <div class="palm-grid-3">
            <form action="index.php" class="palm-left needs-validation" novalidate>
                <div class="card p-4">
                    <h3>ที่อยู่จัดส่ง</h3>
                    <div class="has-validation">
                        <h6 class="text-secondary mt-3">ชื่อ</h6>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            ใส่ชื่อก่อนไปขั้นตอนถัดไป
                        </div>
                    </div>
                    <div class="has-validation">
                        <h6 class="text-secondary mt-2">เบอร์โทรศัพท์</h6>
                        <input type="number" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            ใส่เบอร์โทรศัพท์ก่อนไปขั้นตอนถัดไป
                        </div>
                    </div>
                    <div class="has-validation">
                        <h6 class="text-secondary mt-2">ที่อยู่</h6>
                        <textarea class="form-control" id="validationCustomUsername"aria-describedby="inputGroupPrepend" required></textarea>
                        <div class="invalid-feedback">
                            ใส่ที่อยู่ก่อนไปขั้นตอนถัดไป
                        </div>
                    </div>
                    <div class="palm-btn-con mt-4">
                        <button style="background-color: #A084CA; color: #fff" type="submit">
                            ยืนยัน
                        </button>
                    </div>
                </div>
            </form>
            <div class="palm-right">
                <div class="card p-4">
                    <div class="text-center">
                        <h3>สรุปคำสั่งซื้อ</h3>
                        <div class="d-flex justify-content-between border-bottom">
                            <h6 class="text-secondary mt-3 ">จำนวนทั้งหมด</h6>
                            <h6 class="text-secondary mt-3">2</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom">
                            <h6 class="text-secondary mt-3 ">ยอดรวม</h6>
                            <h6 class="text-secondary mt-3">$1300</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom">
                            <h6 class="text-secondary mt-3 ">ส่วนลด</h6>
                            <h6 class="text-secondary mt-3">$0</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom">
                            <h6 class="text-secondary mt-3 ">ส่วนลด</h6>
                            <h6 class="text-secondary mt-3">$300</h6>
                        </div>
                        <div class="d-flex justify-content-between border-bottom">
                            <h6 class="text-secondary mt-3 ">ยอดรวมทั้งหมด</h6>
                            <h6 class="mt-3 palm-text-color">$1000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>