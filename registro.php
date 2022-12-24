<!DOCTYPE html>
<html>
<head>
  <title>REGISTRATE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"">
  <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bigelow+Rules&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bienvenida">
        <p>TEATRO CS UNSA</p>
    </div>
    <div class="formulario">
        <form method="post" action="">
            <h2 class="formulario_titulo">Registrate</h2>
            <?php
                include "conexion.php";
                include "CONTROLADOR/controlador_registro.php";
            ?>
            <label class="formulario_label" for="username">Nombre de usuario:</label><br>
            <input class="casilla" type="text" name="username" ><br>
            <label class="formulario_label" for="password">Contraseña:</label><br>
            <input class="casilla" type="password" name="password"><br>
            <label class="formulario_label" for="nombre">Nombre:</label><br>
            <input class="casilla" type="text" name="nombre"><br>
            <label class="formulario_label" for="p_ape">Apellido Paterno:</label><br>
            <input class="casilla" type="text" name="p_ape"><br>
            <label class="formulario_label" for="s_ape">Apellido Materno:</label><br>
            <input class="casilla" type="text" name="s_ape"><br>
            <label class="formulario_label" for="email">E-Mail:</label><br>
            <input class="casilla" type="text" name="email"><br>
            <label class="formulario_label" for="genero">Genero(M-F):</label><br>
            <input class="casilla" type="text" name="genero"><br>
            <label class="formulario_label" for="dni">Número de DNI:</label><br>
            <input class="casilla" type="text" name="dni"><br>
            <label class="formulario_label" for="telefono">Número de Celular:</label><br>
            <input class="casilla" type="text" name="telefono"><br>
            <label class="formulario_label" for="f_nac">Fecha de Nacimiento:</label><br>
            <input class="casilla" type="date" name="f_nac"><br><br>
            <input class="boton" type="submit" name="btn_envio" value="Crear Cuenta">
        </form>
        <div class="registrate"><a href="CONTROLADOR/controlador_cerrarsesion.php">¿Ya tienes cuenta? </br> Inicia sesion</a></div>
    </div>
</body>
</html>