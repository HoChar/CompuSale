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
        
      <?php require_once "vista/plantillamenu.php";?>
      <form action="scriptregistrarcuenta.php" method="post">
        <div class="form-group">
          <label for="identificacion">Identificación</label>
          <input type="number" class="form-control" id="identificacion" name= "identificacion">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <input type="number" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="form-group">
          <label for="correo">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento">
        </div>
        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="email" class="form-control" id="correo" name="correo">
        </div>
        <div class="form-group">
          <label for="correo">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
        <div class="form-group">
          <label for="correo">Direccion</label>
          <input type="text" class="form-control" id="direccion" name="direccion">
        </div>
        
         <button type="submit"  class="btn btn-dark" >Confirmar Comprar</button>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <?php include "JavaScript.php" ?>

    
  </body>
  
</html>
