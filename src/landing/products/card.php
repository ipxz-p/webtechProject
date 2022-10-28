<div style="border-radius: 10px; padding:20px; width:100%;" class="card">
    <div class="card-img-top ano-image">    
        <img style="border-radius: 10px 10px 0 0;width:100%; transition: 1s ease-in-out;" src="<?= $row['img1'] ?>" class="" alt="...">
        <img style="border-radius: 10px 10px 0 0;width:100%; transition: 1s ease-in-out;" src="<?php if($row['id'] > 35){echo $row['img3'];} else{echo $row['img2'];}?>" class="ano-after" alt="...">
    </div>
    <div class="card-body">
        <div class="fs-5 fw-semibold"><?= $row['name'] ?></div>
        <div class="card-text palm-fs-4 palm-card-text text-secondary"><?= $row['info'] ?></div>
        <div class="palm-card-detail mt-2">
            <div style="color: #645CAA; font-weight: 700;" class="palm-fs-2">
                <i class="fa-solid fa-coins me-1"></i> <?= $row['price'] ?>฿
            </div>
        </div>
        <a href="#"target="_blank"><div class="palm-btn text-center palm-color2 w-100 mt-2">ใส่ตะกร้า</div></a>
    </div>
</div>