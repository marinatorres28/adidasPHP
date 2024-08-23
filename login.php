<?php
    include_once "header.php";
    if (!isset($_SESSION["usuario"])){
?>
<!--HTML inicio sesion-->
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
?>


