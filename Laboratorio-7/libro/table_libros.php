<?php 
include('../conectar/conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();

// Definimos la consulta de que vamos a seleccionar los datos
$sql = 'SELECT id, anio, autor, titulo, ubicacion, especialidad, editorial FROM libros';

// Ejecutamos el query en la conexion
$resultados = mysqli_query($conexion, $sql);

// Cerramos la conexion
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando nuevos Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
   

    <div class="container mt-4">
        <div class="row">
            <div>
                <h4 class="text-center">LIBROS REGISTRADOS</h4>
                <hr>
                
                 <a href="../principal/index.php" type="button" class="btn btn-outline-primary" >Menú</a>
            </div>

        </div>
        <table class="table mt-4">
            <thead class="encabezado">
                <tr>
                    <th scope="col">Año</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Funciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Recorriendo el array con el resultado de la consulta
            while($libros = mysqli_fetch_array($resultados)) {
                $id = $libros['id'];
                $año = $libros['anio'];
                $autor = $libros['autor'];
                $titulo  = $libros['titulo'];
                $ubicacion = $libros['ubicacion'];
                $especialidad = $libros['especialidad'];
                $editorial = $libros['editorial'];

                echo '<tr class="uno">';
                echo '<td>' . $año . '</td>';
                echo '<td>' . $autor . '</td>';
                echo '<td>' . $titulo . '</td>';
                echo '<td>' . $especialidad . '</td>';
                echo '<td>' . $editorial . '</td>';
                echo '<td><a href="editar_libro.php?id='.$id['id'].'" class="btn btn-success">Edit</a> <a href="eliminar_libros.php?id='.$id['id'].'" class="btn btn-danger">Delet</a> <a href="'.$ubicacion.'" class="btn btn-danger">Read</a>
                </td>';
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