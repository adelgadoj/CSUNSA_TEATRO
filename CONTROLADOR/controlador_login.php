<?php
session_start();
if(!empty($_POST["btn_envio_login"])){
    if(!empty($_POST["username_login"]) && !empty($_POST["password_login"])){
        $usuario = $_POST["username_login"];
        $password = $_POST["password_login"];
        $sql = $conexion->query("SELECT persona.id_persona,CONCAT(persona.nombres,' ',persona.p_apel,' ',persona.s_apel) AS Nombres,persona.email,persona.DNI, cliente.f_nac FROM id20053745_teatro_unsa.persona, id20053745_teatro_unsa.cliente WHERE cliente.usuario = '$usuario' AND cliente.clave = '$password'");
        if($datos = $sql->fetch_object()){
            $_SESSION["id_usuario"]=$datos->id_persona;
            $_SESSION["nombre_usuario"]=$datos->Nombres;
            $_SESSION["email_usuario"]=$datos->email;
            $_SESSION["dni_usuario"]=$datos->DNI;
            $_SESSION["f_naci"]=$datos->f_nac;
            header("Location: inicio.php");
        }
        else{
            echo "<div class='alerta'>Datos incorrectos</div>";
        }
    }
    else{
        echo "<div class= 'alerta'>Campos vacios</div>";
    }

}

?>