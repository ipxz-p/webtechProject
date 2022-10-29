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
    <title>Document</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="../../assets/style/global.css">
</head>

<body>
    <div class="bg-[#645CAA] h-screen flex justify-center items-center">
        <div class=" w-[350px] bg-slate-50 p-4 rounded shadow-2xl  ">
            <form action="login_db.php" method="post">
                <div class="text-3xl font-normal mb-4">
                    Login
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                    <label for="floating_email" class="z-20 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-purple-500 focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-focus:dark:text-purple-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                
                
                <div class="flex justify-end">
                    <button type="submit" name="loginSubmit" class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                </div>
                <div class="text-xs flex justify-center mt-4">
                    <div class="text-gray-500">Dont't have an account?</div><a class="font-medium ml-1" href="../register/">Sign up</a>
                </div>
            </form>
        </div>

    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let check = "<?php echo $_SESSION['email']; ?>"
        window.onload = async function() {
            if(check == "err"){
                Swal.fire({
                    title: 'เกิดข้อผิดพลาด',
                    text: 'อีเมลหรือรหัสผ่านไม่ถูกต้อง',
                    icon: 'error',
                    confirmButtonText: 'รับทราบ'
                    })
            }else{
                await Swal.fire({
                title: 'ยินดีด้วย',
                text: 'เข้าสู่ระบบสำเร็จเเล้ว',
                icon: 'success',
                confirmButtonText: 'รับทราบ'
                })
                window.location.href = "../../../"
            }
        }
    </script>
</body>

</html>