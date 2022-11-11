<?php
session_start();
include_once('../../services/connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/src/assets/style/global.css">
</head>

<body>
    <?php
    include('../../component/navbar.php')
    ?>
    <div class="pt-[70px] sm:pt-[80px] pb-4 sm:pb-10">
        <div class="palm-container">
            <div class="border-2 p-3 rounded bg-white">
                <div class=" font-medium text-xl">รายการสินค้าที่บันทึกไว้</div>
                <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                }
                $stmt = $con->prepare("SELECT * FROM wishlist WHERE EXISTS (SELECT id FROM product WHERE wishlist.product_id = product.id and wishlist.user_email = ?)");
                if (isset($_SESSION['email'])) {
                    $stmt->execute([$email]);
                }
                $result = $stmt->fetchAll();
                if ($stmt->rowCount() == 0) { ?>
                    <div class="text-center text-gray-500 text-sm my-4">
                        ไม่มีสินค้าที่บันทึกไว้
                    </div>
                <?php
                }
                foreach ($result as $row) {

                ?>
                    <a href="/src/landing/products/product?id=<?php echo $row['product_id']; ?>" >
                    <div class="flex max-[350px]:p-[5px] p-2 border rounded mt-2">
                        <div class="max-[350px]:mr-1 mr-2">
                            <img class="w-[80px] rounded" src="../../assets/img/<?php echo $row["img1"]; ?>" alt="">
                        </div>
                        <div class="w-full px-1 sm:px-2 flex flex-col justify-center">
                            <div class="flex w-full justify-between items-center">
                                <div class="fs-5 fw-normal">
                                    <?php echo $row["name"] ?>
                                </div>
                                <div class="">
                                    $<?php echo $row["cost"] ?>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="palm-order-containertext text-gray-500 max-[400px]:max-w-[100px] max-[520px]:max-w-[150px] max-[766px]:max-w-[300px] max-[850px]:max-w-[200px] max-[1024px]:max-w-[600px] max-w-[700px] truncate">
                                    <?php echo $row["des"] ?>
                                </div>
                                <div class="flex items-center justify-between">
                                    
                                    <div onclick="deleteBt(event, <?php echo $row['product_id']; ?>)" class="">
                                        <svg id="delete" class="cursor-pointer" width="20" height="20" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m896.8 159.024l-225.277.001V71.761c0-40.528-33.008-72.496-73.536-72.496H426.003c-40.528 0-73.52 31.968-73.52 72.496v87.264h-225.28c-17.665 0-32 14.336-32 32s14.335 32 32 32h44.015l74.24 739.92c3.104 34.624 32.608 61.776 67.136 61.776h398.8c34.528 0 64-27.152 67.088-61.472l74.303-740.24h44.016c17.68 0 32-14.336 32-32s-14.32-31.985-32-31.985zM416.482 71.762c0-5.232 4.271-9.505 9.52-9.505h171.984c5.248 0 9.536 4.273 9.536 9.505v87.264h-191.04zm298.288 885.44c-.16 1.777-2.256 3.536-3.376 3.536h-398.8c-1.12 0-3.232-1.744-3.425-3.84l-73.632-733.856H788.45z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a> <?php
                        }
                            ?>



            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tippy('#delete', {
            content: 'ลบรายการนี้',
            animation: 'perspective-extreme',
            placement: 'bottom',
        });
        function deleteBt(event, id) {
            event.preventDefault();
            $.ajax({
                url: "/src/services/handleDeleteWishlist.php",
                type: "POST",
                data: {
                    "p_id": id
                },
                success: function() {
                    location.reload();
                }
            })
        }
    </script>
</body>

</html>