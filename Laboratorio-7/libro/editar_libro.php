<?php 
include('../conectar/conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();
$id = $_GET['id'];
// Definimos la consulta de que vamos a seleccionar los datos
$sql = "SELECT * FROM libros WHERE id = '$id'";

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
    <title>Agregando nuevo libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php
            // Recorriendo el array con el resultado de la consulta
            while($libros = mysqli_fetch_array($resultado)) {
                $id = $libros['id'];
                $año = $libros['anio'];
                $autor = $libros['autor'];
                $titulo = $libros['titulo'];
                $ubicacion = $libros['ubicacion'];
                $especialidad = $libros['especialidad'];
                $editorial = $libros['editorial'];
                
            }
            ?>
    

    <div class="container">
        <div class="row">
              <div class="col-md-6 mt-5" >
                  <div class="card">
                      <div class="card-header --bs-body-color">
                         <div class="card-tittle text-black text-center"><strong>Actualizar Curso</strong></div> 
                      </div>                               
                      <div class="card-body">
                      <form name="formAlumno" action="editar_guardar_libro.php" method="post">
                            <div>
                                <input type="hidden" name="id_li" value="<?php echo $id ?>">
                           </div>
                            <div class="form-group">
                                <label>Año</label>
                                <input type="text" name="anio_li" class="form-control" value="
                                <?php echo $año ?>" >
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" name="autor_li" class="form-control" value="
                                <?php echo $autor ?>">
                            </div> 
                            <div class="form-group">
                                <label>Título</label>
                                <input type="text" name="titulo_li" class="form-control"  value="
                                <?php echo $titulo ?>">
                            </div> 
                            <div class="form-group">
                                <label>Ubicación (URL)</label>
                                <input type="text" name="ubicacion_li" class="form-control"  value="
                                <?php echo $ubicacion ?>">
                            </div>
                            <div class="form-group">
                                <label>Especialidad</label>
                                <input type="text" name="especialidad_li" class="form-control"  value="
                                <?php echo $especialidad ?>">
                            </div>
                            <div class="form-group">
                                <label>Editorial</label>
                                <input type="text" name="editorial_li" class="form-control"   value="
                                <?php echo $editorial ?>">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
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