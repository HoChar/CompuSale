        <?php require_once "vista/plantillamenu.php";?>
        <?php include "css.php" ?>
        <link rel=StyleSheet href="estilo.css" type="text/css" media=screen>

<!DOCTYPE html>
<html lang="en">
<head>
                           
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar</title>
</head>
<body class="sesion">
   <div class="container">

    <div class="form-group">
        <label for="cuenta"> Cuenta </label>
        <input type="text" class="form-control" id="cuenta" name= "cuenta">
    </div>

    <div class="form-group">
        <label for="password"> Contraseña </label>
        <input type="password" class="form-control" id="password" name= "password">
    </div>

    <button type="submit" class="btn btn-success">Entrar</button>
  </div>
    
</body>
</html>