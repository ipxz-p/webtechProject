<script>
    function addToCart(event, product_id, cost, name, img, des) {
        event.preventDefault();
        <?php
        if (!isset($_SESSION['email'])){
            ?>
            window.location.href = "/src/landing/login/";
            <?php
        }
        ?>
        $.ajax({
            url: "/src/services/handleCart.php",
            type: "POST",
            data:{"id": product_id, "cost":cost, "name":name, "img":img, "des":des},
            success: function(data){
                document.getElementById("countOrder").innerHTML = data;
                document.getElementById("countOrder").classList.remove("hidden");
                document.getElementById("countOrder").classList.add("flex");
            }
        })

    }

    function addToWishList(event, product_id, cost, name, img, des) {
        event.preventDefault();
        <?php
        if (!isset($_SESSION['email'])){
            ?>
            window.location.href = "/src/landing/login/";
            <?php
        }
        ?>
        $.ajax({
            url: "/src/services/handleWishList.php",
            type: "POST",
            data:{"id": product_id, "cost":cost, "name":name, "img":img, "des":des},
            success: function(){
                
            }
        })

    }
</script>