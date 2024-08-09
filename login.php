<?php
    include_once "header.php";
    if (!isset($_SESSION["usuario"])){
?>
<!--HTML inicio sesion-->
<div class="container">
    <h2>Inicio Sesion</h2>
    <form action="controlador.php" method="post">
    <!--Usuario-->
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" required>
    <!--Contraseña-->
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password">
    <!--Boton-->
        <input type="submit" value="Iniciar Sesion" class="boton">
    </form>

<?php
        if (!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
}
?>
</div>