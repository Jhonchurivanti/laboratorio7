<?php
include('../conectar/conexion.php');

// registrando la información del alumno
$id = $_POST['id_li'];
$anio = $_POST['anio_li'];
$autor = $_POST['autor_li'];
$titulo = $_POST['titulo_li'];
$ubicacion = $_POST['ubicacion_li'];
$especialidad = $_POST['especialidad_li'];
$editorial = $_POST['editorial_li'];

// Conectando a la base de datos

$conexion = conectar();

// Agragando con la consulta los datos del alumno a la base de datos

$sql = "UPDATE libros set anio='".$anio."', autor='".$autor."', titulo='".$titulo."', ubicacion='".$ubicacion."', especialidad='".$especialidad."', editorial='".$editorial."' WHERE id='".$id."'";

// Ejecuntando la instruccion SQL
$resultado = mysqli_query($conexion, $sql);

// Cerrando la conexion

desconectar($conexion);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizando Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
              <h4><strong>Procesando Información</strong></h4>
              <?php
                  if (!$resultado) {
                    echo '<div class="alert alert-danger" role="alert">Error al actualizar el Libro</div>';
                    echo '<td><a href="table_libros.php" class="btn btn-success">Regresar</a>';
                  }
                  else {
                    echo '<div class="alert alert-success" role="alert">Libro actualizado correctamente</div>';
                    echo '<td><a href="table_libros.php" class="btn btn-success">Regresar</a>';
                  }
              ?>
        </div>  
  </div>
  <style>
    body {
       background-color: antiquewhite;
       font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    </style>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>