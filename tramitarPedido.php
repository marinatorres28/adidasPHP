<?php
include_once "header.php";

if (!isset($_SESSION["usuario"])){
?>

<div class="container-2">

    <div class="izquierda">
        <h2>Inicio Sesion</h2>
        <form action="controlador.php" method="post">
            <!--Usuario-->
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
            <!--Contraseña-->
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password">
            <!--Boton-->
            <input type="submit" value="Iniciar Sesion" class="boton" name="iniciarSesion">
            <input type="hidden" id="comprando" name="comprando">
        </form>
    </div>

    <div class="derecha">
        <h2>Registro de Usuario</h2>
        <form action="controlador.php" method="post">
            <!--Usuario-->
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
            <!--Contraseña-->
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password">
            <!--Repetir contraseña-->
            <label for="password2">Repetir Contraseña</label>
            <input type="password" id="password2" name="password2">
            <!--Boton-->
            <input type="submit" value="Iniciar Sesion" class="boton" name="crearUsuario">
        </form>
    </div>

</div>

<?php

    if (!empty($_GET["mensaje"])){
        echo $_GET["mensaje"];
        }
    }
    else{

    ?>

<div class="container-3">
    <h2>Introduzca sus datos </h2>
    <form action="pago.php" method="post">
        <label for="nombre">Nombre </label>
        <input type="text" id="nombre" name="nombre">

        <label for="apellido">Apellidos</label>
        <input type="text" id="apellido" name="apellido">

        <label for="direccion">Dirección de Envío</label>
        <input type="text" id="direccion" name="direccion">

        <?php
        if (!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
        ?>


    <h2>Seleccione el método de pago:</h2>

    <input type="image" src="media/pagos-logo-redsys.jpg" class="metodo-pago imagen-input">
     <!--PAGO PAYPAL-->
    <a href="https://www.paypal.com/paypalme/
" target="_blank"><img src="media/paypal-redsys.jpg" alt="logo paypal" class="metodo-pago"></a>

    </form>

</div>
<?php
    }


