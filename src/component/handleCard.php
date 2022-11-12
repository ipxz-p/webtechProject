<script>
    async function addToCart(event, product_id, cost, name, img, des) {
        event.preventDefault();
        <?php
        if (!isset($_SESSION['email'])){
            ?>
            window.location.href = "/src/landing/login/";
            <?php
        }else{ ?>
            $.ajax({
                url: "/src/services/handleCart.php",
                type: "POST",
                data:{"id": product_id, "cost":cost, "name":name, "img":img, "des":des},
                success: function(data){
                    document.getElementById("countOrder").innerHTML = data;
                    document.getElementById("countOrder").classList.remove("hidden");
                    document.getElementById("countOrder").classList.add("flex");
                }
            }) <?php
        } 
        ?>
        

    }

    function addToWishList(event, product_id, cost, name, img, des) {
        event.preventDefault();
        <?php
        if (!isset($_SESSION['email'])){
            ?>
            window.location.href = "/src/landing/login/";
            <?php
        }else{ ?>
            $.ajax({
                url: "/src/services/handleWishList.php",
                type: "POST",
                data:{"id": product_id, "cost":cost, "name":name, "img":img, "des":des},
                success: function(){
                    document.getElementById(`heartFirst-${product_id}`).classList.add("hidden")
                    document.getElementById(`heartSecond-${product_id}`).classList.remove("hidden")
                }
            }) <?php

        }
        ?>
<<<<<<< HEAD
=======
        $.ajax({
            url: "/src/services/handleWishList.php",
            type: "POST",
            data:{"id": product_id, "cost":cost, "name":name, "img":img, "des":des},
            success: function(){
                document.getElementById(`heartFirst-${product_id}`).classList.add("hidden")
                document.getElementById(`heartSecond-${product_id}`).classList.remove("hidden")
            }
        })
>>>>>>> 2405a6c16d1c21efc1f77f42ce5d8f6c07ccd48f

    }
</script>