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
            success: function(){
                
            }
        })

    }

    function like(event) {
        event.preventDefault();
        <?php
        if (isset($_SESSION['email'])) { ?>

            $.ajax({
                url: "/src/services/handlelike.php",
                success: function() {

                }
            })
        <?php
        } else {
        ?>
            window.location.href = "/src/landing/login/";
        <?php
        }
        ?>
    }
</script>