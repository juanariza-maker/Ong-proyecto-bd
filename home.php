<?php 
   session_start();
   if (isset($_SESSION['usuario'])!=true){
     header("location:index.html");
   }
   else{
      $nombre=$_SESSION['usuario'];
     include 'tablas.php';
   }
?>



<!doctype html>
<html lang="es">
  <head>
      <!-------------------- cabecera de la pagina -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="datatables/datatables.min.css">
        <link rel="stylesheet" href="datatables/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
    
    <title>ONG proyecto</title>
  </head>
  
  <!-------------------- cuerpo de la pagina -->
<body>
    <header>
     <h1 class="text-center text-white">Bienvenido <?php echo $nombre; ?> </h1>
     <h2 class="text-center text-white">ONG</h2>
     <h3 class=" text-center text-white">Organizacion no gubernamental</h3>
     <a class="btn btn-dark btn-lg btn-block" href="terminar.php" role="button" style="float:right; margin-right:25px;">Cerrar Cesión</a>
    </header>
  <div class="container">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
              </svg>
                Gestion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="area-tab" data-bs-toggle="tab" href="#profile" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              </svg>
                Sedes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="asesor-tab" data-bs-toggle="tab" href="#contact" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
              </svg>
                  inversion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="empresa-tab" data-bs-toggle="tab" href="#empresa" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
              </svg>
              actuacionesproyectos</a>
        </ul>
        <div class="tab-content" id="myTabContent">
           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
              <div class="row">
                <div class="col">
                    <h2 class="text-center text-dark">Bienvenidos a la tabla <?php echo $tabla; ?> </h2>
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered table-hover table-light" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>idGestion</th>
                                <th>Codigo</th>
                                <th>Titulo</th>
                                <th>Fecha de inicio</th>
                                <th>Fecha de finalizacion</th>
                                <th>Presupuesto</th>
                                <th>Nombre del responsable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for($i=0;$i<$n;$i++){
                            ?>
                            <tr>
                                <td><?php echo $resultado[$i]['idGestion'] ?></td>
                                <td><?php echo $resultado[$i]['Codigo'] ?></td>
                                <td><?php echo $resultado[$i]['Titulo'] ?></td>
                                <td><?php echo $resultado[$i]['Fecha de inicio'] ?></td>
                                <td><?php echo $resultado[$i]['Fecha de finalizacion'] ?></td>
                                <td><?php echo $resultado[$i]['Presupuesto'] ?></td>
                                <td><?php echo $resultado[$i]['Nombre del responsable'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
           </div> 
           <!-- vendedores -->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="area-tab">
          <div class="row">
            <div class="col">
                <h2 class="text-center text-dark">Bienvenidos a la tabla <?php echo $tabla1; ?> </h2>
                <div class="table-responsive">
                    <table id="example1" class="table table-striped table-bordered table-hover table-warning" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>idSedes</th>
                                <th>Pais</th>
                                <th>Ciudad</th>
                                <th>Direccion</th>
                                <th>Telefono de contacto</th>
                                <th>Nombre del director</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for($i=0;$i<$n1;$i++){
                            ?>
                            <tr>
                                <td><?php echo $resultado1[$i]['idSedes'] ?></td>
                                <td><?php echo $resultado1[$i]['Pais'] ?></td>
                                <td><?php echo $resultado1[$i]['Ciudad'] ?></td>
                                <td><?php echo $resultado1[$i]['Direccion'] ?></td>
                                <td><?php echo $resultado1[$i]['Telefono de contacto'] ?></td>
                                <td><?php echo $resultado1[$i]['Nombre del director'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
            <!-- area -->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="asesor-tab">
          <div class="row">
            <div class="col">
                <h2 class="text-center text-dark">Bienvenidos a la tabla <?php echo $tabla2; ?> </h2>
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered table-hover table-danger" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>idInversion</th>
                                <th>Inversion de proyecto a poblacion</th>
                                <th>Descripcion actuacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for($i=0;$i<$n2;$i++){
                            ?>
                            <tr>
                                <td><?php echo $resultado2[$i]['idInversion'] ?></td>
                                <td><?php echo $resultado2[$i]['Inversion de proyecto a poblacion'] ?></td>
                                <td><?php echo $resultado2[$i]['Descripcion actuacion'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>
            <!-- asesor -->
        <div class="tab-pane fade" id="empresa" role="tabpanel" aria-labelledby="empresa-tab">
          <div class="row">
            <div class="col">
                <h2 class="text-center text-dark">Bienvenidos a la tabla <?php echo $tabla3; ?> </h2>
                <div class="table-responsive">
                    <table id="example3" class="table table-bordered table-dark" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>idActuacionesproyectos</th>
                                <th>Nombre</th>
                                <th>Pais</th>
                                <th>Numero de habitantes</th>
                                <th>Identificador</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for($i=0;$i<$n3;$i++){
                            ?>
                            <tr>
                                <td><?php echo $resultado3[$i]['idActuacionesproyectos'] ?></td>
                                <td><?php echo $resultado3[$i]['Nombre'] ?></td>
                                <td><?php echo $resultado3[$i]['Pais'] ?></td>
                                <td><?php echo $resultado3[$i]['Numero de habitantes'] ?></td>
                                <td><?php echo $resultado3[$i]['identificador'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            </div>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="datatables/datatables.min.js"></script>
    <script src="datatables/Buttons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="main.js"></script>
    <script src="main1.js"></script>
    <script src="main2.js"></script>
    <script src="main3.js"></script>   
</body>
</html>