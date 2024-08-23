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
<?php
session_start();
$mensaje="";

if (!empty($_POST["numeroTarjeta"])) {
    $numeroTarjeta=$_POST["numeroTarjeta"];
    $expReg='/^(?:4[0-9]{12}(?:[0-9]{3})?           # Visa
                       |  5[1-5][0-9]{14}                    # MasterCard
                       |  3[47][0-9]{13}                     # American Express
                       |  3(?:0[0-5]|[68][0-9])[0-9]{11}     # Diners Club
                       |  6(?:011|5[0-9]{2})[0-9]{12}        # Discover
                       |  (?:2131|1800|35\d{3})\d{11}        # JCB
                       )$/x';

    if (preg_match($expReg, $numeroTarjeta)) {
        ?>

        <div class="container-3">
            <h1>Pedido realizado correctamente</h1>
            <p><?php echo $_SESSION["nombre"]?> su pedido será enviado a la direccion: <?php echo $_SESSION["direccion"]?></p>
            <p>¡Gracias por confiar en nosotros!</p>
            <button class="boton"><a href="index.php">Volver al Inicio</a></button>

        </div>
    <?php
        unset($_SESSION['carrito']);

    }else{
        ?>
        <div class="container">
            <h1>El numero de la tarjeta no es válido</h1>
            <button class="boton"><a href="tramitarPedido.php">Volver al carrito</a></button>
        </div>
    <?php
    }

}else{
    ?>
<div class="container">
    <h1>Debe introducir un número de tarjeta</h1>
    <button class="boton"><a href="mostrarCarrito.php">Volver al carrito</a></button>
</div>
<?php
}











