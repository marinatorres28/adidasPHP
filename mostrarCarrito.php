<?php
include_once "header.php";
?>

<div class="container-3">
    <h2 class="textoCentrado">Resumen de tu Carrito</h2>
    <?php
        if (!empty($_SESSION["carrito"])) {
            ?>
            <table>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Acciones </th>
                </tr>
                <?php
                    // Hay que llamar el $_SESION["carrito"] y recorrerlo por medio de un foreach
                    // para mostrar los datos de los productos, y a su vez cualcular los subtotales y el total general
                    // Tambien vamos a crear unos botones de actualizar que permiten cambiar el numero de articulos por linea y eliminar toda una linea de producto de la cesta
                    $total=0; // inicializamos el total
                    foreach ($_SESSION["carrito"] as $productoID => $producto) {
                        $subtotal = $producto["precio"] * $producto["cantidad"];
                        $total += $subtotal;
                ?>
                        <tr>
                            <td><?php echo $producto["nombre"]?></td>
                            <td>
                                <form action="carrito.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $productoID?>">
                                <input type="number" name="cantidad" value="<?php echo $producto["cantidad"]?>" min="1">
                            <!--Permitir actualizar en numero de producto-->
                                    <input type="submit" name="actualizarCarrito" value="Actualizar">
                                </form>
                            </td>

                            <td>
                                <?php echo $producto["precio"]?>€
                            </td>

                            <td>
                                <?php echo $subtotal?>€
                            </td>

                            <td>
                                <form action="carrito.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $productoID?>">
                                    <input type="submit" name="eliminarProducto" value="Eliminar">
                                </form>
                            </td>


                        </tr>

                <?php
                    } // cierre del foreach
                ?>

                <tr>
                    <td colspan="3">
                        <b>Total</b>
                    </td>

                    <td>
                        <b><?php echo $total?>€</b>
                    </td>

                    <td>
                        <form action="carrito.php" method="post">
                            <input type="submit" name="eliminarCarrito" value="Eliminar Carrito">
                        </form>
                    </td>
                </tr>
            </table>

            <button class="botonTramitar"><a href="tramitarPedido.php">Tramitar Pedido</a></button>

    <?php
            $_SESSION["importeTotal"]=$total;

        }else{
            echo "Tu carrito está vacío";
        }
    ?>

</div>

</body>
</html>
