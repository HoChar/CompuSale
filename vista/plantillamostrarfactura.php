<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vista/Bootstrap/css/bootstrap.min.css">

    
    <title>Compusale</title>
  </head>
  <body>
    <div class="container">

    <?php require_once "Vista/plantillamenu.php";?>
        
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Iden_factura</th>
            <th scope="col">Fechacompra</th>
            <th scope="col">pro_id</th>
            <th scope="col">usu_id</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($facturas as $factura) { ?>
            <tr>
              <td><?= $factura->fac_id ?></th>
              <td><?= $factura->fac_fechaCompra ?></td>
              <td><?= $factura->pro_id ?></td>
              <td><?= $factura->usu_id ?></td>
            </tr>
          <?php } ?>
        </tbody>
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