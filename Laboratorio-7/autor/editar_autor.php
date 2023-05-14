<?php 
include('../conectar/conexion.php');

// Abrimos la conexion a la BD mysql

$conexion = conectar();
$id = $_GET['id'];
// Definimos la consulta de que vamos a seleccionar los datos
$sql = "SELECT * FROM autor2 WHERE id = '$id'";

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
    <title>Agregando nuevo autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php
            // Recorriendo el array con el resultado de la consulta
            while($autor = mysqli_fetch_array($resultado)) {
                $a_id = $autor['id'];
                $nombres = $autor['nombres'];
                $ape_paterno = $autor['ape_paterno'];
                $ape_materno = $autor['ape_materno'];
               
                
            }
            ?>
    

    <div class="container">
        <div class="row">
              <div class="col-md-6 mt-5" >
                  <div class="card">
                      <div class="card-header --bs-body-color">
                         <div class="card-tittle text-black text-center"><strong>Actualizar Autor</strong></div> 
                      </div>                               
                      <div class="card-body">
                          <form name="formAlumno" action="editar_guardar_autor.php" method="post">
                             <div class="form-group">
                                <label>Nombres completos</label>
                                <input type="text" name="nombres" value="<?php echo $nombres ?>" class="form-control">
                             </div> 
                             <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" name="ape_paterno" value="<?php echo $ape_paterno ?>" class="form-control">
                             </div> 
                             <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" name="ape_materno" value="<?php echo $ape_materno ?>" class="form-control">
                             </div>
                             <div>
                                <input type="hidden" name="a_id" value="<?php echo $a_id ?>">
                             </div>
                             <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
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