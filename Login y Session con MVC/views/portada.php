<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <!-- MENU -->
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
                <li> -->
                    <!-- <a class="dropdown-item" href="index.php?c=vehiculos&a=perfil&id=' foreach($resultado as $dato){ $dato["id"];} '"> MI PERFIL</a>   -->

                        <!-- $identificador;
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
</nav> -->
<?php require_once "views/menu.php"; ?>
<!-- TITULO -->
<div class="titulo">
    <h1>Bienvenido <?php 
        // $identificador;
        foreach($resultado as $dato){
            // $resultado = $dato["nombre"];
            // echo $resultado;
            echo $dato["nombre"] ." ".$dato["apellido"];
        }
    ?></h1>
    <p>Puedes ver todo nuestro contenido</p>
</div>
    <!-- CARDS -->
    <div class="container d-flex">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="public/img/trigo_fondo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Catalogo</h5>
                    <p class="card-text">Puede ver los productos dando click aqui!</p>
                    <!-- index.php?c=vehiculos&a=producto -->
                        <?php
                            $identificador;
                            foreach($resultado as $dato){ 
                                $identificador = $dato["id"];
                            } 
                            echo '<a class="btn btn-primary" href="index.php?c=vehiculos&a=producto&id='.$identificador.'">Ver mas</a>'; 
                        ?>
                    <!-- <a href="index.php?c=vehiculos&a=producto" class="btn btn-primary">Ver mas</a> -->
                </div>
            </div>
        </div>
    </div>
<!-- PROMOS -->
<div class="titulo">
    <h1>Puedes ingresar lo que te guste</h1>
    <p>Puedes ver todo nuestro contenido</p>
    <button type="submit" class="btn btn-danger">Agregar</button>
</div>
<!-- FOOTER -->
<?php
    require_once "views/footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>