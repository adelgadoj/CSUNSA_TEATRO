<!DOCTYPE html>
<html>
<head>
    <title>Subir imagen</title>
    <link rel="stylesheet" href="CSS/estilos_obra.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bigelow+Rules&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
</head>

<body>
    <p class="bienvenida">OBRAS</p>
    <div class ="panel">
        <div class="opciones">
            <div class ="formulario_subir">
                <form action="CONTROLADOR/upload_obra.php" method="post" enctype="multipart/form-data">
                    <label for="image">GENERAR OBRA:</label> <br>
                    <label for="image">Portada para obra:</label> <br>
                    <input type="file" name="image" id="image">
                    <br>
                    <label for="titulo_evento">Nombre del evento:</label> <br>
                    <input type="text" name="titulo_evento" id="titulo_evento">
                    <br>
                    <label for="fecha_evento">Fecha del evento:</label> <br>
                    <input type="date" name="fecha_evento" id="fecha_evento">
                    <br>
                    <laber for="hora" >Hora del evento:</label> <br>
                    <input type="time" name="hora" id="hora">
                    <br>
                    <label for="costo" >Costo del evento:</label> <br>
                    <input type="number" name="costo" id="costo">
                    <br>
                    <label for="id_sala" >Sala:</label> <br>
                    <select name="id_sala" id="id_sala">
                        <option value="1">Sala 1</option>
                        <option value="2">Sala 2</option>
                        <option value="3">Sala 3</option>
                        <option value="4">Sala 4</option>
                        <option value="5">Sala 5</option>
                        <option value="6">Sala 6</option>
                    </select>
                    <br>
                    <label for="genero" >Genero:</label> <br>
                    <select name="genero" id="genero">
                        <option value="Comedia">Comedia</option>
                        <option value="Drama">Drama</option>
                        <option value="Musical">Musical</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Terror">Terror</option>
                        <option value="Cine">Cine</option>
                    </select>
                    <br>
                    <label for="sinopsis" >Sinopsis:</label> <br>
                    <input type="text" name="sinopsis" id="sinopsis">
                    <br>
                    <label for="id_director" >Director:</label> <br>
                    <input type="text" name="id_director" id="id_director">
                    <br>
                    <input type="submit" class="envia" value="Subir imagen">
                </form>
            </div>
        </div>
    <?php
    include "conexion.php";
    // Consultar todas las imágenes de la base de datos
    $result = $conexion->query("SELECT evento.id_evento, evento.titulo, evento.fecha, evento.hora, evento.costo, evento.id_sala, obra.genero, obra.id_director,obra.sinopsis,obra.ruta_img, obra.nombre_img 
FROM id20053745_teatro_unsa.obra,id20053745_teatro_unsa.evento WHERE obra.id_evento = evento.id_evento;");
    // Recorrer cada imagen y mostrarla en la página web
    echo "<div class='gallery'>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='gallery_container'>";
        
            echo "<div class='gallery_image'>";
                echo "<img class='imagen' src='".$row['ruta_img']."' alt='".$row['nombre_img']."'>";
            echo "</div>";
            echo "<div class='gallery_text'>";
                echo "<div class='text_nombre'>";
                    echo "<h3>TITULO: ".$row['titulo']."</h3>";
                    echo "<h3>FECHA: ".$row['fecha']."</h3>";
                    echo "<h3>HORA: ".$row['hora']."</h3>";
                    echo "<h3>COSTO: ".$row['costo']."</h3>";
                    echo "<h3>SALA: ".$row['id_sala']."</h3>";
                    echo "<h3>GENERO: ".$row['genero']."</h3>";
                    echo "<h3>ID-DIRECTOR: ".$row['id_director']."</h3>";
                    echo "<a class='boton' href='CONTROLADOR/delete_obra.php?id_obra=".$row['id_evento']."'>Eliminar</a>";
                    echo "<a class='boton' href='CONTROLADOR/editar_obra.php?id_evento=".$row['id_evento']."'>Editar</a>";
                    
                echo "</div>";
            echo "</div>";
        
        echo "</div>";
    }
    echo "</div>";
    ?>
    </div>
</body>
</html>