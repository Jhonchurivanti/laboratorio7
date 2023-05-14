<?php 
include('../conectar/conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();

// Definimos la consulta de que vamos a seleccionar los datos
$sql = 'SELECT id, nombres, ape_paterno, ape_materno FROM autor2';

// Ejecutamos el query en la conexion
$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexion
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando nuevo Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
   

    <div class="container mt-4">
        <div class="row">
            <div>
                <h4 class="text-center">AUTORES REGISTRADOS</h4>
                <hr>
                 <a href="../principal/index.php" type="button" class="btn btn-outline-primary" >Menú</a>
            </div>

        </div>
        <table class="table mt-3">
            <thead>
                <tr class="encabezado text-center">
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDO PATERNO</th>
                    <th scope="col">APELLIDO MATERNO</th>
                    <th scope="col">FUNCIONES</th>
                </tr>
            </thead>
            <tbody class="texto">
            <?php
            // Recorriendo el array con el resultado de la consulta
            while($autor = mysqli_fetch_array($resultado)) {
                $id_a = $autor['id'];
                $nombres = $autor['nombres'];
                $ape_paterno = $autor['ape_paterno'];
                $ape_materno = $autor['ape_materno'];

                echo '<tr class="uno">';
                echo '<td>' . $nombres . '</td>';
                echo '<td>' . $ape_paterno . '</td>';
                echo '<td>' . $ape_materno . '</td>';
                echo '<td><a href="editar_autor.php?id='.$id_a['id'].'" class="btn btn-success">Editar</a> <a href="eliminarAutor.php?id='.$id_a['id'].'" class="btn btn-danger">Eliminar</a></td>';
                
            }
            ?>
            </tbody>
        </table>
    </div>
    <style>
    body {
       background-color: antiquewhite;
       font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .table {
        background-color: rgb(176, 212, 232);
        
    }
    .encabezado {
        background-color: rgb(25, 27, 92);
        color: white;
        text-align: center;

    }
    .uno {
        align-items: center;
        text-align: center;
    }
    </style>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>