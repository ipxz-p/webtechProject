<?php
session_start();
include_once("../../../services/connection.php");
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
    <div>
        <?php
        include('../../../component/navbar.php')
        ?>
        <div class="pt-[70px] sm:pt-[80px] pb-4 sm:pb-8">
            <section id="window" class="palm-container ">
            <div class="bg-white p-4">
                <h1 class="text-xl font-medium">🪵 กระดาน</h1>
                <div class="grid gap-[8px] grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4">
                    <?php
                        $stmt = $con->prepare("SELECT * FROM product where type = 'กระดาน' ");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $row) {
                            include('../../../component/card.php');
                        }
                    ?>
                </div>
            </div>
        </section>
        </div>
    </div>
    <?php
        include("../../../component/footer.php")
    ?>
    <?php
    include("../../../component/handleCard.php")
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>