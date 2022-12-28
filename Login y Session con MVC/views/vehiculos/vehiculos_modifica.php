
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
    <h2><?php echo $data["titulo"]; ?></h2>
    <a href="">Agregar</a>
    <br><br>
    <form action="index.php?c=vehiculos&a=actualizar" id="nuevo" name="nuevo" method="POST" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php $data["id"]; ?>">
        Placa: <input type="text" name="placa" id="placa" value="<?php $data["vehiculos"]["placa"]; ?>"><br>
        Marca: <input type="text" name="marca" id="marca"><br>
        Modelo: <input type="text" name="modelo" id="modelo"><br>
        Anio: <input type="number" name="anio" id="anio"><br>
        Color: <input type="text" name="color" id="color"><br>

        <button type="submit" id="guardar" name="guardar">Guardar</button>
    </form>
</body>
</html>