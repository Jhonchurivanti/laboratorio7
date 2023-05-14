<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registro de Libro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name="formAlumno" action="../libro/ingresar_libro.php" method="post">
                            <div class="form-group">
                                <label>Año:</label>
                                <input type="text" name="año" class="form-control" required placeholder="Ejemplo: 12-13-19">
                            </div>
                            <div class="form-group">
                                <label>Autor:</label>
                                <input type="text" name="autor" class="form-control"  required placeholder="Nombres completos">
                            </div> 
                            <div class="form-group">
                                <label>Título:</label>
                                <input type="text" name="titulo" class="form-control" required placeholder="Título del libro">
                            </div> 
                            <div class="form-group">
                                <label>Ubicación (URL):</label>
                                <input type="text" name="ubicacion" class="form-control" required placeholder="Ubicación en línea">
                            </div>
                            <div class="form-group">
                                <label>Especialidad:</label>
                                <input type="text" name="especialidad" class="form-control"  required placeholder="Especialidad">
                            </div>
                            <div class="form-group">
                                <label>Editorial:</label>
                                <input type="text" name="editorial" class="form-control"  required placeholder="Editorial del libro">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                          </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Para el ingreso de nuevo Autor -->
<div class="modal fade" id="modalAutor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAutorLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalAutor">Registro || Nuevo Autor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name="formAlumno" action="../autor/ingresar_registroAutor.php" method="post">
                             <div class="form-group">
                                <label>Nombres</label>
                                <input type="text" name="nombres_a" class="form-control" required placeholder="Nombres">
                             </div> 
                             <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input type="text" name="ape_paterno" class="form-control"  required placeholder="Primer apellido">
                             </div> 
                             <div class="form-group">
                                <label>Apellido Materno</label>
                                <input type="text" name="ape_materno" class="form-control"  required placeholder="Segundo apellido">
                             </div>
                             <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                             </div>
                          </form>
      </div>
    </div>
  </div>
</div>
   

    <div class="container">
        <div class="row mt-4">
            <div>
                <h4 class="text-center mt-2">BIBLIOTECA VIRTUAL || START JWCA</h4>
            </div>
            <hr>
        </div>
        <div class="row mt-4">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Buscar
                </a>

            <ul class="dropdown-menu">
                <button  class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalAutor">
                 Registrar Autor
               </button>
                <button  class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                 Registrar Libro
               </button>

                <li><a class="dropdown-item" href="../autor/table_Autor.php">Mantenimiento de Autores</a></li>
                <li><a class="dropdown-item" href="../libro/table_libros.php">Mantenimiento de Libros</a></li>
             </ul>
            </div>
            <div class="row mt-2">
                <div>
                    <img src="./img/tec.avif" class="uno col-4">
                   
                </div>

            </div>
       </div>
    </div>
    <style>
        body {
            background-color: antiquewhite;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .container {
            background-color: aquamarine;
        }
        .uno {
            width: 100%;

        }
    </style>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>