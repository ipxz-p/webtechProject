<a href="../search/product.php?id=<?php echo $row['id']; ?>">
    <div style="border-radius: 10px;" class="card">
    
        <img style="border-radius: 10px 10px 0 0;height: 220px;" src="<?= $row['img'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="fs-5 text-black fw-semibold"><?= $row['name'] ?></div>
            <div class="card-text palm-fs-4 palm-card-text text-secondary"><?= $row['des'] ?></div>
            <div class="palm-card-detail mt-2">
                <div style="color: #645CAA; font-weight: 700;" class="palm-fs-2">
                    <i class="fa-solid fa-coins me-1"></i> <?= $row['cost'] ?>฿
                </div>
            </div>
            <button style="z-index: 200;" onclick="test(event, <?php echo $row['id']; ?>)" class="palm-btn text-center palm-color2 w-100 mt-2">
                ใส่ตระกร้า
            </button>
        </div>
    </div>
</a>
<script>
    function test(event, value){
        event.preventDefault();
        alert(value)
    }
</script>