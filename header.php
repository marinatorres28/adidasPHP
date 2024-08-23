<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adidas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
<?php
if (isset($_SESSION["usuario"])){
    //echo "<img src='media/icono-user.svg' alt='Iniciar Sesion' class='icono'>".$_SESSION['usuario']."</p>";

    echo '<a href="logout.php" class="icono"><img src="media/logout.svg" alt="Cerrar Sesion"></a>'.$_SESSION['usuario'];

}else{
?>
    <a href="login.php" class="icono"><img src="media/icono-user.svg" alt="Iniciar Sesion"></a>
<?php
}?>
<a href="mostrarCarrito.php" class="icono"><img src="media/icono-carrito.svg" alt="Resumen de la compra"></a>
    <?php
        if (isset($_SESSION["carrito"])){
            echo $_SESSION["totalProductos"];
        }
    ?>
</div>

<nav>
    <img src="media/Adidas-logo.webp" alt="logo adidas">
    <!--menu-->
    <div class="menu">
        <a href="index.php#mujer">Mujer</a>
        <a href="index.php#hombre">Hombre</a>
        <a href="index.php#infantil">Infantil</a>
        <a href="index.php#zapatillas">Zapatillas</a>
        <a href="index.php#contacto">Contacto</a>
    </div>
</nav>

