<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/miestilo2.css">
</head>
<body>

<!-- require_once "views/menu.php"; -->

<div class="container">
    <div class="row">
        <h1>Estos son sus modelos favoritos</h1>
    <table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">#Placa</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Año</th>
      <th scope="col">Color</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
  foreach($data["vehiculos"] as $dato){
                    echo "<tr>";
                    echo "<td>".$dato["placa"]."</td>";
                    echo "<td>".$dato["marca"]."</td>";
                    echo "<td>".$dato["modelo"]."</td>";
                    echo "<td>".$dato["anio"]."</td>";
                    echo "<td>".$dato["color"]."</td>";
                    // COMO SABER QUE ID ESTOY ENVIANDO
                    echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";
                    // echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'>Eliminar</a>".$dato["id"]."</td>";
                    echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
                    echo "</tr>";
                } 
                ?>
  </tbody>
</table>
    </div>
</div>

<!-- ESTO VA EN PHP -->
<!-- 
    foreach($data["vehiculos"] as $dato){
        echo '<div class="card" style="width: 18rem;">';
        echo '<img src="..." class="card-img-top" alt="...">';
        echo '<div class="card-body">';
        echo ' <h5 class="card-title">Card title</h5>';
        echo ' <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';
        echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
        echo '</div>';
    } -->

<?php require_once "views/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>