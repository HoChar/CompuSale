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
    <div class="container" >
    <?php require_once "vista/plantillamenu.php";?>

    <h1>Tipos de PC</h1>
    
    <p>Tradicionalmente un PC de escritorio se asocia con un ordenador de gran tamaño, ruidoso y que emite mucho calor. Eso es cosa del pasado. Los PCs actuales tienen un consumo moderado y diferentes modos de funcionamiento que reducen la velocidad del procesador y la GPU cuando se realizan tareas ligeras como navegar por Internet o redactar un texto.

    Nada puede igualar su rendimiento y la comodidad que proporciona un monitor grande y un teclado de tamaño completo. Siguen siendo imprescindibles cuando tienes que usar un ordenador varias horas seguidas.

    A la hora de comprar un PC de sobremesa, la primera decisión que debes tomar es el tipo de PC que necesitas, para hacer los primeros descartes. Aquí van algunas ideas: </p>
    <ul>
    <li>PC de marca blanca: El PC de escritorio de toda la vida que montas tú mismo o te montan en una tienda con los componentes que elijas. Es el que mejor relación potencia / precio ofrece, y lo puedes personalizar al máximo. Además se puede ampliar fácilmente.</li>
    <li>PC de marca: Son más caros, la personalización está limitada, y las reparaciones fuera de garantía suelen ser caras. A cambio tienen componentes muy equilibrados, ofrecen muy buen rendimiento y tienen la garantía y el servicio técnico del fabricante.</li>
    <li>Gaming PC: Ordenador pensado para jugar a videojuegos. Se distingue por sus carcasas negras con colores llamativos. Suelen ser muy potentes pero también consumen más, y son caros.</li>
    <li>Mini PC o barebone: PCs de pequeño tamaño, silenciosos y con poco consumo. Sirven a la perfección para cualquier tarea de ofimática e Internet, pero van un poco justos para proyectos multimedia o gaming.</li>
    <li>Todo-en-Uno: El hardware del ordenador se coloca detrás del monitor, dando la sensación de que sólo tienes una pantalla. Básicamente es un miniPC incrustado en la pantalla, así que el rendimiento es suficiente para tareas básicas pero no puede con trabajos que exigen una gran potencia de proceso.</li>
    </ul>
    <h1>Memoria RAM y almacenamiento</h1>
    <p>
    La memoria RAM del ordenador nos va a permitir realizar labores multitarea y manejar gran cantidad de datos de forma eficiente. Windows 10 exige menos RAM que sus predecesores, y por otro lado es una de las componentes más sencillas de instalar. Su precio no es muy elevado, así que nuestro consejo es que pongas una cantidad mínima de memoria RAM, 4 GB (ofimática) u 8 GB (gaming), y luego ya tendrás tiempo de ampliar cuando notes que el ordenador o algún programa lo necesita.

    Existen diferentes tipos de memoria RAM: DDR2, DDR3, DDR4, etc. Como más alto sea el número, más rendimiento. Además dentro de cada gama, hay distintas velocidades.
    </p>

    <h1>Almacenamiento</h1>

    <p>
    Existen varios tipos de SSD:

    <ul>
    <li>SLC: almacena un bit en cada celda. Es el más rápido y fiable pero también el más caro, se usa a nivel profesional</li>
    <li>MLC: almacena 2 bits por celda. Puede guardar más datos pero el acceso es más lento y se degrada antes, al tener que hacer más acceso a una misma celda. Es el más común</li>
    <li>TLC: tres bit por celda. Mayor capacidad y más barato, pero menor rendimiento y menos tiempo de vida útil</li>
        
    <p>Tanto los discos SSD como los discos duros se conectan al ordenador principalmente a través del conector SATA. Existen variantes, que deben ser soportadas tanto por la placa base como el propio disco. Es decir, si compras un disco SATA 3 pero la placa base es SATA 2, el disco funcionará en modo SATA 2.</p>

    <li>SATA 1: Alcanza una velocidad máxima de 150 MB/sg</li>
    <li>SATA 2: Ofrece una velocidad máxima de 300 MB/sg</li>
    <li>SATA 3: Duplica la velocidad hasta los 600 MB/sg, y se reduce el tiempo de acceso</li>
    <li>NVMe: al utilizar canales PCI-express con una conexión directa a la placa, puede alcanzar velocidades de hasta 2 GB/sg. Este tipo de conexión convierte al disco en una tarjeta compacta fácilmente reconocible.</li>
    </ul>
    </p>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <?php include "JavaScript.php" ?>

    
  </body>
  
</html>
