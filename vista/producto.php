<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php 
                $contador = 0;
                
                include "modelo/conexionProducto.class.php";
                $sql = "SELECT * FROM productos WHERE pro_id = $contador";
                $result = mysqli_query($conexion, "SELECT * FROM productos WHERE pro_id = $contador");
                while ($obtener = mysqli_fetch_array($result)){
                    
                    $contador++;
            ?>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $obtener['pro_nombre']?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img class="card-img-top" style="width: 18rem" src="img/imagenes/<?php echo $contador?>.jpg">
                                    <p class="card-text"><?php echo $obtener['pro_descripcion']?></p>
                                    <p class="card-text"><b>Precio: </b>$<?php echo $obtener['pro_precio']?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-dark">Realizar Compra</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php 
                    }
                ?> 


</body>
</html>