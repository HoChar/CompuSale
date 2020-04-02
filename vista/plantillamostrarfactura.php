<?php 
$nombre=$_GET["nombre"];
$iden=$_GET["iden"];
$id=$_GET["id"];
$precio=$_GET["precio"];
$radicado= rand($min=1000000,$max=9999999);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <?php include "css.php" ?>
    <link rel=StyleSheet href="estilo.css" type="text/css" media=screen>

    <title>CompuSale</title>
  </head>
  <body class="crear">
    <div class="container">
      <?php require_once "Vista/plantillamenu.php";?>
        
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Identificacion</th>
            <th scope="col">ID_producto</th>
            <th scope="col">Precio</th>
            <th scope="col">ID_compra</th>
            <th scope="col">Recuerde</th>
            <th scope="col"><a href="index.php" class="btn btn-dark" type="button">Aceptar</a></th>
          </tr>
        </thead>
          <tr>
              <td><?= $nombre ?></th>
              <td><?= $iden ?></td>
              <td><?= $id ?></td>
              <td><?= $precio ?></td>
              <td><i><?= $radicado ?></i></td>
              <td><p><i><b>Debe tomar nota del numero de radicado(ID_compra) ya que con este <br>
            podra resolver cualquier inquietud que tenga respecto a las fechas estipuladas <br>
          de entrega y/o el producto que adquirio</b></i></p></td>
            </tr> <br><br>
            
      </table>
  </div>
  </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vista/Bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script src="vista/Bootstrap/js/popper.min.js"></script>
    <script src="vista/Bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>