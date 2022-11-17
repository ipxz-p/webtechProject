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
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="../../assets/style/global.css">
</head>

<body>
    <div class="bg-[#645CAA] h-screen flex justify-center items-center">
        <div class="w-[400px] bg-slate-50 px-4 py-8 rounded shadow-2xl  ">
            <form action="register.php" method="post">
                <div class="text-3xl font-normal mb-4">
                    ลงทะเบียน
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="floating_name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                    <label for="floating_name" class="z-10 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ชื่อผู้ใช้งาน</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                    <label for="floating_email" class="z-10 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">อีเมล</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">รหัสผ่าน</label>
                </div>

                <div class="flex justify-end">
                    <button type="submit" name="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ลงทะเบียน</button>
                </div>
            </form>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let check = "<?php echo $_SESSION['emailUsed']; ?>"
        window.onload = async function() {
            if(check == "true"){
                Swal.fire({
                title: 'เกิดข้อผิดพลาด',
                text: 'อีเมลนี้ได้ถูกใช้งานไปเเล้ว',
                icon: 'error',
                confirmButtonText: 'รับทราบ'
                })
            }
            if(check == "false"){
                await Swal.fire({
                title: 'ยินดีด้วย',
                text: 'ลงทะเบียนสำเร็จเเล้ว',
                icon: 'success',
                confirmButtonText: 'รับทราบ'
                })
                window.location.href = "../../../"
            }
            <?php $_SESSION['emailUsed'] = ''; ?>
        }
    </script>
</body>

</html>