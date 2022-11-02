<script>
    
    function test(event, value){
        event.preventDefault();
        alert(value);
        
    }
    function like(event){
        event.preventDefault();
        <?php
            if(isset($_SESSION['email'])){?>
                
                    $.ajax({
                        url:"/src/services/handlelike.php",
                        success:function(){
                            
                        }
                    })
                <?php
            }else{
                ?>
                window.location.href = "/src/landing/login/";
                <?php
            }
        ?>
    }
</script>