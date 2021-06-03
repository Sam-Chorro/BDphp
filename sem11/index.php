<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <style> 
    *{
        margin: 0;
        padding: 0;
    }

    body{
        background: gray;
    }

    .ctn{
        border: 2px solid black;
        border-radius: 4px;
        box-shadow: 5px 7px 8px 3px;
        margin-top: 80px;
        background: linear-gradient( 50deg,orange, blue);
        width: 600px;
        height: 200px;
    }

    .btn{
        border: 3px solid solid;
        margin-top: 50px;
        margin-left: 10px;
        margin-right: 12px ;
        height: 80px;
        width: 150px;
        background: black;
        color: white;
    }
    a{
        text-decoration: none;
        font-size: 22px;
        color: white;
    }

    .btn:hover{
        transform: scale(1.1);
        background-color: black;
        width: 180px;
        height: 100px;
        border-color: cyan;
    }

    a:hover{
        color: greenyellow;
    }

    .titulo{
        margin-top: 70px;
        color: black;
        font-size: 50px;
    }

    </style>
</head>
<body>
    <center>
        <h3 class="titulo">Base de Datos</h3>
    <div class="ctn">

    <button class="btn"><a href="producto.php"> Tabla de Productos</a></button>
    <button class="btn"><a href="marca.php"> Tabla de Marcas</a></button>
    <button class="btn"><a href="categoria.php"> Tabla de Categoras</a></button>

    </div>
    </center>
</body>
</html>