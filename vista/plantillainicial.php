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
                        <p class="card-text"><?= $producto->pro_descripcion ?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Ver mas
                        </button>
                            <a class="nav-link" href="scriptproducto.php"><b>Other</b></a>
                    </div> 
                    <!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php // echo $obtener['pro_nombre']?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="card-img-top" style="width: 18rem" src="img/imagenes/<?php // echo $contador?>.jpg">
                                    <p class="card-text"><?php // echo $obtener['pro_descripcion']?></p>
                                    <p class="card-text"><b>Precio: </b>$<?php // echo $obtener['pro_precio']?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="scriptcrearcuenta.php" class="btn btn-dark">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
            <?php 
                }
            ?> 
        </div>
    </div>
    
    <?php include "JavaScript.php" ?>
</body>
</html>