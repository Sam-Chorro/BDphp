<?php
include 'sub/conexion.php';
$sentencia = $connect->query("SELECT * FROM marcas;");
$marca= $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($marca);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="container">
        <h3 class="tt">Tabla Marcas</h3>
    <table class="tb">
<thead>
<th class="uno">Nombre</th>
<th class="uno">Categoria</th>
<th class="uno">Marca</th>
</thead>
<?php
foreach ($marca as $dato){
?>
<tr>
    <td><?php echo $dato->name_producto ?></td>
    <td><?php echo $dato->name_categoria ?></td>
    <td><?php echo $dato->name_marca ?></td>
</tr>
<?php
}
?>
</table>
    </div>
    </center>
    <br>
    <button class="btn"><a href="index.php">Regresar</a></button>
</body>
</html>