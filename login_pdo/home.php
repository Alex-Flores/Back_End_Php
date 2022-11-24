<?php
    session_start();
    if(isset($_SESSION['nombre']))
    {
        ?>
        <h1>Bienvenido de nuevo <?php echo $_SESSION['nombre'] ?>.</h1>    
    <?php
    }else{
        header("location:index.php");
    }
?>
