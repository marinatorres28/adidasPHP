<?php
session_start();
$mensaje="";
if (empty($_POST["usuario"]) || empty($_POST["password"])){
    $mensaje="Por favor ingresa todos los campos";
    enviarMensajeError($mensaje);
}else{
    if (validarUsuario($_POST["usuario"],$_POST["password"])){
        $_SESSION["usuario"]=$_POST["usuario"];
        header("Location:index.php");
    }else{
        $mensaje="Los datos no son correctos";
        enviarMensajeError($mensaje);
    }
}

// funcion para validar usuario
function validarUsuario($usuario, $password) {
    $listaUsuarios = ["Dani"=>"1234","Marina"=>"1234","Ana"=>"1234"];
    if (array_key_exists($usuario, $listaUsuarios)) {
        if ($listaUsuarios[$usuario] === $password) {
            return true;
        }else {
            return false;
        }
    }
}
// funcion para enviar mensaje de error
function enviarMensajeError($mensaje)
{
    header('Location: login.php?mensaje='.$mensaje);
}


