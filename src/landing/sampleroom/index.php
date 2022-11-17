<?php
    include("../../services/connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goody goody</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/src/assets/style/global.css">
    <style>
        
    </style>
</head>
<body>
    <?php
        include("../../component/navbar.php")
    ?>
    <div class="pt-[70px] sm:pt-[80px] pb-4 sm:pb-8">
        <div class="palm-container">
            <div class="bg-white p-4 rounded-md">
                <div class="text-center font-medium text-xl
                ">
                    ห้องตัวอย่าง
                </div>
                <div class="grid gap-[8px] grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-2 bg-white">
                    <?php
                        $stmt = $con->prepare("SELECT * FROM room_db");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach ($result as $row){ 
                            if($row['id'] % 2 ==0 && $row['id'] != 20){ ?>
                                <img class="h-full row-span-2 rounded" src="../../assets/img/<?php echo $row['img1']; ?>" alt="">
                                <?php
                            }else{ ?>
                                <img class="h-full rounded" src="../../assets/img/<?php echo $row['img1']; ?>" alt="">
                                <?php
                            }
                            
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("../../component/footer.php")
    ?>
</body>
</html>