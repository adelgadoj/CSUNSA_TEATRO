<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
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
            <h2 class="formulario_titulo">Inicio de sesión</h2>
            <?php
                include "conexion.php";
                include "CONTROLADOR/controlador_login.php";
            ?>
            <label class="formulario_label" for="username_login">Nombre de usuario:</label><br>
            <input class="casilla" type="text" name="username_login" ><br>
            <label class="formulario_label" for="password_login">Contraseña:</label><br>
            <input class="casilla" type="password" name="password_login"><br><br>
            <input class="boton" type="submit" name="btn_envio_login" value="Iniciar sesión">
        </form>
        <div class="registrate"><a href="registro.php">¿Aun no tienes cuenta? </br> Registreate aqui</a></div>
    </div>
</body>
</html>