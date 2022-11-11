<a href="/src/landing/type/<?php 
    if($row['type'] == 'กระจกเงา'){
        echo "mirror";
    }
    if($row['type'] == 'กระดาน'){
        echo "board";
    }
    if($row['type'] == 'กระถางดอกไม้และต้นไม้'){
        echo "tree";
    }
    if($row['type'] == 'กล่องเก็บของและตะกร้า'){
        echo "box";
    }
    if($row['type'] == 'ดอกไม้ประดิษฐ์และดอกไม้แห้ง'){
        echo "flower";
    }
    if($row['type'] == 'รูปภาพและกรอบรูป'){
        echo "picture";
    }
    if($row['type'] == 'เครื่องหอม'){
        echo "incense";
    }
    if($row['type'] == 'แจกันและจานชาม'){
        echo "plate";
    }
?>" class="swiper-slide relative cursor-pointer group/item flex items-center justify-center overflow-hidden text-center">
    <img class="rounded group-hover/item:blur-[2px] group-hover/item:scale-110 transition duration-500" src="/src/assets/img/<?php echo $row["img3"] ?>" alt="">
    <div class="absolute t-0 b-0 r-0 l-0 flex items-center rounded justify-center h-full w-full bg-black/[.2] text-white opacity-0 group-hover/item:opacity-100 transition duration-500 text-xl"><?php echo $row["type"] ?></div>
</a>