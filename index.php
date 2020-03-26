<?php

if(isset($_GET["accion"])){
    $clase ="";
    $mensaje = "";
    switch ($_GET["accion"]) {
        case '1':
            $clase = "alert alert-success";
            $mensaje = "Insertado correctamente";
            break;
        case '2':
            $clase = "alert alert-danger";
            $mensaje = "Error al insertar";
            break;
        }
    }

    require_once "vista/plantillaprincipal.php";
?>