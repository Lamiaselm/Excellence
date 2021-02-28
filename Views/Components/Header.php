<div class="row header sticky-top align-items-center justify-content-between "style="background-color:#d7dedf;color:white;">
    <div class="col-1 header-item">
    
        
    </div>
    <div class="col-4  justify-content-center">
        <h1 class="project-title">Projet WEB</h1>
    </div>
    <div class="col-1  justify-content-end">
    <button id="login" type="button" class="btn  btn-outline-success">Login</button>
    <button id="logout" type="button" class="btn  btn-outline-warning">Logout</button>
    </div>
</div>

<?php 
    if(isset($_SESSION['auth']) && $_SESSION['auth']==true){
?>
    <script>
            $("#logout").click(function(e){
                window.location.href='../Controllers/logoutController.php';
            });
            $("#login").hide();;
    </script>
    

<?php 
    }else{
?>  
    <script>
            $("#login").click(function(e){
                window.location.href='../Views/Login.php';
            });
            $("#logout").hide();;
    </script>
<?php     
    }
?>


