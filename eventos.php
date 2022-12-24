<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_pelicula.css">
    <link rel="stylesheet" href="CSS/estilos_evento.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bigelow+Rules&display=swap" rel="stylesheet">
  
    <title>Eventos</title>
</head>
<body>
        <p class="bienvenida">LISTA DE EVENTOS</p>
        <div class="contenido">
            <?php
            include "conexion.php";
                $result = $conexion->query("SELECT evento.id_evento, evento.titulo, evento.fecha, evento.hora, evento.costo, evento.id_sala 
                FROM id20053745_teatro_unsa.evento");
                while ($row = mysqli_fetch_array($result)) {
                    echo "<div class='container_evento'>";
                        echo "<h3 class='container_hijo'>ID EVENTO: ".$row['id_evento']."</h3>";
                        echo "<h3 class='container_hijo'>TITULO: ".$row['titulo']."</h3>";
                        echo "<h3 class='container_hijo'>FECHA: ".$row['fecha']."</h3>";
                        echo "<h3 class='container_hijo'>HORA: ".$row['hora']."</h3>";
                        echo "<h3 class='container_hijo'>COSTO: ".$row['costo']."</h3>";
                        echo "<h3 class='container_hijo'>SALA: ".$row['id_sala']."</h3>";
                    echo "</div>";
                }
            ?>
        </div>



</body>
</html>