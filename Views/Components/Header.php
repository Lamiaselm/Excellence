

    <div class="col-1  justify-content-end" style="float:right;">
    <button id="login" type="button" class="btn  btn-outline-success">Login</button>
    <button id="logout" type="button" class="btn  btn-outline-warning">Logout</button>
    </div>


<?php 
    if(isset($_SESSION['auth']) && $_SESSION['auth']==true){
?>
    <script>
            $("#logout").click(function(e){
                window.location.href='http://127.0.0.1/Excellence/Controllers/logoutController.php';
                
            });
            $("#login").hide();;
    </script>
    

<?php 
    }else{
?>  
    <script>
            $("#login").click(function(e){
                window.location.href='http://127.0.0.1/Excellence/Views/Login.php';
            });
            $("#logout").hide();;
    </script>
<?php     
    }
?>


