<a href="/src/landing/product/?id=<?php echo $row['id']; ?>">
    <div class="border rounded-lg bg-white">
        <img class="rounded-t-md h-[220px] w-full" src="/src/assets/img/<?php echo $row['img1'] ?>" alt="...">
        <div class="card-body p-3">
            <div class="font-medium text-lg truncate"><?= $row['name'] ?></div>
            <div class="palm-fs-4 text-gray-500 line-clamp-1"><?= $row['des'] ?></div>
            <div class="palm-card-detail mt-2">
                <div style="color: #645CAA; font-weight: 700;" class="palm-fs-2">
                    <i class="fa-solid fa-coins me-1"></i> <?= $row['cost'] ?>฿
                </div>
            </div>
            <div class="flex justify-between items-center mt-2">
                <button onclick="test(event, <?php echo $row['id']; ?>)" class="palm-btn text-center palm-color2 px-4 py-1">
                    ใส่ตระกร้า
                </button>
                <svg class="text-red-500 mt-[4px]" width="22" height="22" viewBox="0 0 16 16"><path fill="currentColor" d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92C0 2.755 1.79 1 4 1z"/></svg>
                <!-- <svg width="22" class="text-red-500" height="22" viewBox="0 0 24 24"><path fill="currentColor" d="m12.1 18.55l-.1.1l-.11-.1C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5c1.54 0 3.04 1 3.57 2.36h1.86C13.46 6 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5c0 2.89-3.14 5.74-7.9 10.05M16.5 3c-1.74 0-3.41.81-4.5 2.08C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.41 2 8.5c0 3.77 3.4 6.86 8.55 11.53L12 21.35l1.45-1.32C18.6 15.36 22 12.27 22 8.5C22 5.41 19.58 3 16.5 3Z"/></svg> -->
            </div>
        </div>
    </div>
</a>
<script>
    function test(event, value){
        event.preventDefault();
        alert(value)
    }
</script>