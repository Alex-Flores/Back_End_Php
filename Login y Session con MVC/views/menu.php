<style>
    body{
        height: 100vh;
    }
    #footer{
    position: absolute;
    /* bottom: 21rem; */
    top: 52rem;
    width: 99vw;
}
</style>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Trigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">PORTADA</a>
            </li> -->
            <li class="nav-item">
                        <?php
                            $identificador;
                            foreach($resultado as $dato){ 
                                $identificador = $dato["id"];
                            } 
                            echo '<a class="nav-link" href="index.php?c=vehiculos&a=portada&id='.$identificador.'">PORTADA</a>'; 
                        ?>
            <!-- <a class="nav-link" href="index.php?c=vehiculos&a=portada">PORTADA</a> -->
            </li>
            <!-- <li class="nav-item"> -->
<!--                         
                            $identificador;
                            foreach($resultado as $dato){ 
                                $identificador = $dato["id"];
                            } 
                            echo '<a class="nav-link" href="index.php?c=vehiculos&a=producto&id='.$identificador.'">PRODUCTO</a>'; 
                         -->
            <!-- <a class="nav-link" href="index.php?c=vehiculos&a=producto">PRODUCTOS</a> -->
            <!-- </li> -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PERFIL
            </a>
            <ul class="dropdown-menu">
                <li>
                    <!-- <a class="dropdown-item" href="index.php?c=vehiculos&a=perfil&id=' foreach($resultado as $dato){ $dato["id"];} '"> MI PERFIL</a>   -->

                    <?php
                        $identificador;
                        foreach($resultado as $dato){ 
                            $identificador = $dato["id"];
                        } 
                        echo '<a class="dropdown-item" href="index.php?c=vehiculos&a=perfil&id='.$identificador.'"> MI PERFIL</a>'; 
                    ?>
                </li>
                <!-- <li><a class="dropdown-item" href="index.php?c=vehiculos&a=carro">CARRITO</a></li> -->
                <li><hr class="dropdown-divider"></li>
                <li>
                <?php
                        $identificador;
                        foreach($resultado as $dato){ 
                            $identificador = $dato["id"];
                        } 
                        echo '<a class="dropdown-item" href="index.php?c=vehiculos&a=soporte&id='.$identificador.'"> SOPORTE</a>'; 
                    ?>
                    <!-- <a class="dropdown-item" href="index.php?c=vehiculos&a=soporte">SOPORTE</a> -->
                </li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
</nav>