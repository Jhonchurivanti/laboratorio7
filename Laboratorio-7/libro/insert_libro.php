<?php
include('../conectar/conexion.php')
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregando Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
              <div class="col-md-6 mt-5" >
                  <div class="card">
                      <div class="card-header --bs-body-color">
                         <div class="card-tittle text-black text-center"><strong>Registro de nuevo Libro</strong></div> 
                      </div>                               
                      <div class="card-body">
                          <form name="formAlumno" action="ingresar_libro.php" method="post">
                            <div class="form-group">
                                <label>Año</label>
                                <input type="text" name="año" class="form-control" required placeholder="Ejemplo: 12-13-19">
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <input type="text" name="autor" class="form-control"  required placeholder="Nombres completos">
                            </div> 
                            <div class="form-group">
                                <label>Título</label>
                                <input type="text" name="titulo" class="form-control" required placeholder="Título del libro">
                            </div> 
                            <div class="form-group">
                                <label>Ubicación (URL)</label>
                                <input type="text" name="ubicacion" class="form-control" required placeholder="Ubicación en línea">
                            </div>
                            <div class="form-group">
                                <label>Especialidad</label>
                                <input type="text" name="especialidad" class="form-control"  required placeholder="Especialidad">
                            </div>
                            <div class="form-group">
                                <label>Editorial</label>
                                <input type="text" name="editorial" class="form-control"  required placeholder="Editorail">
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