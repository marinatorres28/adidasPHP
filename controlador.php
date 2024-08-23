<?php
session_start();
$mensaje="";

// si iniciamos sesion
if (isset($_POST['iniciarSesion'])) {

if (empty($_POST["usuario"]) || empty($_POST["password"])){
    $mensaje="Por favor ingresa todos los campos";
    enviarMensajeError($mensaje);
}else{
    if (validarUsuario($_POST["usuario"],$_POST["password"])){
        $_SESSION["usuario"]=$_POST["usuario"];

        if (!isset($_POST["comprando"])){
            header("Location:index.php");
        }else{
            header("Location:tramitarPedido.php");
        }
    }else{
        $mensaje="Los datos no son correctos";
        enviarMensajeError($mensaje);
    }
    }
}

// si damos de alta un nuevo usuario

if (isset($_POST["crearUsuario"])){
    // si el usuario, el password y el password2 estan vacias
    if (!empty($_POST["usuario"]) && !empty($_POST["password"]) && !empty($_POST["password2"])){

        $nombre=$_POST["usuario"];
        $password=$_POST["password"];
        $password2=$_POST["password2"];

    // si las contraseñas son iguales, creamos el array asociativo lista de usuarios, que tendra un nombre (clave) y password (valor)
    if ($password==$password2){
        if (!isset($_SESSION["listaUsuarios"])){
            $_SESSION["listaUsuarios"]=array();
        }
        $_SESSION["listaUsuarios"][$nombre]=$password;
        $mensaje="Usuario creado correctamente";
        // cuando creamos el usuario, volvemos a la pagina de login
        enviarMensajeError($mensaje);
    }else{
        $mensaje="Los passwords no coinciden";
        enviarMensajeError($mensaje);
    }
}
}


// funcion para validar usuario
function validarUsuario($usuario, $password) {

    // si el usuario existe dentro de el array lista de usuarios
    if (array_key_exists($usuario, $_SESSION["listaUsuarios"])) {
        if ($_SESSION["listaUsuarios"][$usuario]=== $password) {
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


