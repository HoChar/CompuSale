<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Bootstrap CSS -->
    <?php include "css.php" ?>

    <link rel=StyleSheet href="estilo.css" type="text/css" media=screen>
    
</head>
<body>
    <div class="container">
        <div class="row container">

        <?php 
            $contador = 0;
            foreach ($productos as $producto) { 
                $contador++;
        ?>

            <div class="card" style="width: 21.25rem; text-align: center;">
                <img class="card-img-top" style="width: 18rem" src="img/imagenes/<?php echo $contador?>.jpg">
                    <div class="card-body">
                        <h5 class="card-title"><?= $producto->pro_nombre ?></h5>
                            <a class="nav-link btn btn-dark" href="scriptproducto.phppro_?id=<?= $producto->pro_id ?> "><b>Ver Mas</b></a>
                    </div> 
            </div>
            <?php 
                }
            ?> 
        </div>
    </div>
    
    <?php include "JavaScript.php" ?>
</body>
</html>