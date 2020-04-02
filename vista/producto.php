<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompuSale</title>

    <!-- Bootstrap CSS -->
    <?php include "css.php" ?>

    <link rel=StyleSheet href="estilo.css" type="text/css" media=screen>
    
</head>
<body>
    <?php require_once "vista/plantillamenu.php";?>
    <div class="container">
        <div class="row container">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/imagenes/<?= $_GET["id"] ?>.jpg" class="card-img" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $producto->pro_nombre ?></h5>
                            <p class="card-text"><?= $producto->pro_descripcion ?></p>
                            <h5 class="card-title"> <?= $producto->pro_precio ?></h5>
                            <a href="scriptcrearcuenta.php?id=<?= $producto->pro_id ?>&precio=<?= $producto->pro_precio ?>" class="btn btn-dark">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"?>
    </div>
    <?php include "JavaScript.php" ?>
</body>
</html>