<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/miperfil.css">
</head>
<body>
    <!--
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->

<!-- ESTO NO VA -->
            <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">PORTADA</a>
            </li> -->
<!-- HASTA ACA -->

            <!--
            <li class="nav-item">
           
                            $identificador;
                            foreach($resultado as $dato){ 
                                $identificador = $dato["id"];
                            } 
                            echo '<a class="dropdown-item" href="index.php?c=vehiculos&a=portada&id='.$identificador.'">PORTADA</a>'; 
                        -->

                        <!-- ESTO NOVA -->
            <!-- <a class="nav-link" href="index.php?c=vehiculos&a=portada">PORTADA</a> -->
            <!-- HASTA ACA -->

            <!--
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?c=vehiculos&a=producto">PRODUCTOS</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PERFIL
            </a>
            <ul class="dropdown-menu">
                <li>-->

                <!-- ESTO NOVA -->
                    <!-- <a class="dropdown-item" href="index.php?c=vehiculos&a=perfil&id=' foreach($resultado as $dato){ $dato["id"];} '"> MI PERFIL</a>   -->
<!-- HASTA ACA -->
                    <!--
                        $identificador;
                        foreach($resultado as $dato){ 
                            $identificador = $dato["id"];
                        } 
                        echo '<a class="dropdown-item" href="index.php?c=vehiculos&a=perfil&id='.$identificador.'"> MI PERFIL</a>'; 
                    
                </li>
                <li><a class="dropdown-item" href="index.php?c=vehiculos&a=carro">CARRITO</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="index.php?c=vehiculos&a=soporte">SOPORTE</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
                    -->

                    <!-- <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="index.php?c=vehiculos&a=portada">PORTADA</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?c=vehiculos&a=producto">PRODUCTOS</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PERFIL
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?c=vehiculos&a=perfil">MI PERFIL</a></li>
                <li><a class="dropdown-item" href="index.php?c=vehiculos&a=carro">CARRITO</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="index.php?c=vehiculos&a=soporte">SOPORTE</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
</nav> -->
<?php
    require_once "views/menu.php"
?>
<div class="container">
    <div class="row">
        <h1>MI PERFIL</h1>
        <?php
        
        foreach($resultado as $dato){
            echo $dato["id"];
        }

foreach($resultado as $dato){
    echo "<p><b>Nombre: </b>".$dato["nombre"]."</p>";
    echo "<p><b>Apellido: </b>".$dato["apellido"]."</p>";
    echo "<p><b>Email: </b>".$dato["email"]."</p>";
    echo "<p><b>Password: </b>".$dato["password"]."</p>";
    echo "<p><b>Ciudad: </b>".$dato["ciudad"]."</p>";
}
?>
    </div>
</div>
<?php require_once "views/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>