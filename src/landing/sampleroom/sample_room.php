<?php
    include("../../services/connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: 'Prompt', sans-serif;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
        margin: 12px;
        color: #645CAA;
        font-size: 50px;
    }

    .container {
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        box-sizing: border-box;
        max-width: 100%;
        padding: 10px;
        gap: 8px;
        grid-auto-rows: 250px;
    }

    img {
        width: 100%;
        height: 100%;
        transition: 1s ease-in-out;
        object-fit: cover;
    }

    .image2row {
        grid-row: span 2;
    }

    .image {
        position: relative;
        width: 100%;
        border-radius: 10px;
        overflow: hidden;

    }

    img.after {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .image:hover img {
        opacity: 1;
    }

    .image:hover img.after {
        opacity: 1;
    }

    .image:hover {
        cursor: pointer;
    }

    @media (min-width: 300px) {
        .container {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    @media (min-width: 640px) {
        .container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 900px) {
        .container {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    @media (min-width: 1000px) {
        .container {
            grid-template-columns: repeat(4, 1fr);
        }
    }

</style>

<body>
    <h1>ห้องตัวอย่าง</h1>
    <div class="container">
        <?php
        $stmt = $con->prepare("SELECT * FROM room_db");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $row) {
            if (intval($row['id']) % 2 == 0 or intval($row['id']) == 5) { //2คอมลัม == 1 or intval($row['id'])== 2
        ?> <div class='image2row image'>
                    <img src="<?= $row['img1'] ?>">
                    <img src="<?= $row['img2'] ?>" class="after">
                </div>
            <?php } else {
            ?> <div class="image">
                    <img style src="<?= $row['img1'] ?>">
                    <img style src="<?= $row['img2'] ?>" class="after">
                </div>
        <?php }
        }
        ?>
    </div>
</body>

</html>