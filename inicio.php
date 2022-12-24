<?php
    session_start();
    if(empty($_SESSION["id_usuario"])){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" type="text/css" href="CSS/estilos_inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bigelow+Rules&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">
  
</head>
<body>
    <div class="nave">
        <div class="titulo_inicio">
            <h1>TEATRO CSUNSA</h1>
        </div>
        <ul class="nav_bar">
            <li class="nav_bar_hijo"><a href="inicio.php">INICIO</a></li>
            <li class="nav_bar_hijo"><a href="obras.php">OBRAS</a></li>
            <li class="nav_bar_hijo"><a href="peliculas.php">PELICULAS</a></li>
            <li class="nav_bar_hijo"><a href="eventos.php">EVENTOS</a></li>
            <li class="nav_bar_hijo"><a href="CONTROLADOR/controlador_cerrarsesion.php">CERRAR SESION</a></li>
        </ul>
    </div> 
    <div class="mensaje">
        <div class="mensaje_texto">
            <h2>¿QUIENES SOMOS?</h2>
            <p> Somos un espacio de creación y difusión de obras teatrales, con el propósito de conectar a los artistas con nuestra comunidad, ofreciendo una cuidadosa selección y producción de obras capaces de cuestionar, provocar, sorprender y entretener.</br>Abrimos nuestras puertas un 4 de septiembre del año 2014,  con el estreno de la obra Bolognesi en Arica. Tomamos el nombre de nuestra organización, Teatro CSUNSA, inspirados por el deseo de convertirnos en la entrada al proceso de amor al arte del teatro.</p>
        </div>
        <div class="mensaje_video">
            <iframe width="480" height="235" src="https://www.youtube.com/embed/1ufuS_JKb6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>


    </div>
    
    
    
</body>
</html>












