<?php
session_start();
$mensaje="";

    if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["direccion"])){
        $mensaje="Por favor ingresa todos los campos";
        enviarMensajeError($mensaje);
    }else{
        $_SESSION["nombre"]=$_POST["nombre"];
        $_SESSION["apellido"]=$_POST["apellido"];
        $_SESSION["direccion"]=$_POST["direccion"];
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

        <div class="containerPago">

            <div class="izquierda divDatosOperacion">
                <h2><span style="color: #1118a8">Datos de la Operación</span></h2>
                <hr>
                <p><b>Importe</b> <?php echo $_SESSION["importeTotal"]?></p>
                <hr>
                <p><b>Comercio</b> Adidas</p>
                <hr>
                <p><b>Terminal</b> 5678910-1</p>
                <hr>
                <p><b>Pedido</b> 012345678910</p>
                <hr>
                <p><b>Fecha</b> <?php echo date("d/m/y - H:i:s") ?></p>
                <hr>
                <p><b>Descripción</b> Compra Online</p>

            </div>

            <div class="derecha divPago">
                <h2>Pagar con Tarjeta</h2>

                <form action="validarTarjeta.php" method="post">
                    <p>
                        <label for="numeroTarjeta">Nº Tarjeta</label>
                        <input type="text" name="numeroTarjeta" id="numeroTarjeta">
                    </p>

                    <p>
                        <label for="caducidad">Caducidad</label>
                        <input type="number" name="mes" id="mes" placeholder="mm">
                        <input type="number" name="anio" id="anio" placeholder="aa">
                    </p>

                    <p>
                        <label for="cvv">CVV</label>
                        <input type="password" name="cvv" id="cvv">
                    </p>

                    <input type="submit" value="Comprar" class="boton-pagar">
                    <button type="button" class="boton-cancelar"><a href="tramitarPedido.php">Cancelar</a></button>

                </form>
                <?php
                    if (!empty($_GET["mensaje"])) {
                    echo $_GET["mensaje"];
                    }
                ?>
            </div>

        </div>

        <body>

        <?php
    }
function enviarMensajeError($mensaje)
{
    header('Location: tramitarPedido.php?mensaje='.$mensaje);
}

