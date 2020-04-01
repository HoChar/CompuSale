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

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="index.php"><img src="img/logos/Casco.png" alt="CompuSale" />CompuSale</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="scriptcrearcuenta.php"><b>Crear Cuenta</b></a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Productos</b></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Agregar</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="scriptapoyo.php"><b>Nuestro Apoyo</b></a>
                    </li>
                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Busqueda</button>
                </form> -->
            </div>
        </nav>
    </div>

    

   <?php include "JavaScript.php" ?>

</body>

</html>