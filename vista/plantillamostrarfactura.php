<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vista/Bootstrap/bootstrap.min.css">
    <link rel=StyleSheet href="estilo.css" type="text/css" media=screen>
    
    <title>Compusale</title>
  </head>
  <body>
    <div class="container">

    <?php require_once "Vista/plantillamenu.php";?>
        
      <?php foreach ($productos as $producto) { ?>
      Gracias por comprar <?= $producto->pro_nombre ?> que tiene un valor de <?= $producto->pro_precio ?>
      <?php } ?>
  </div>
  </body>

</html>