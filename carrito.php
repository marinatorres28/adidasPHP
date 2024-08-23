<?php
session_start();
if (isset($_POST["agregar"])){ // si han pulsado click en agregar
    $productoID = $_POST["id-producto"];
    $nombreProducto = $_POST["nombre-producto"];
    $precioProducto = $_POST["precio"];
    $cantidadProducto = $_POST["cantidad"];

    // el carrito es una variable de sesion
    if (!isset($_SESSION["carrito"])){
        $_SESSION["carrito"] = array();
    }
    // si esta creada la sesion del carrito con ese producto, aumentaremos la cantidad
    if (isset($_SESSION["carrito"][$productoID])){
        $_SESSION["carrito"][$productoID]["cantidad"] += $cantidadProducto;
    }else{
        // se agrega el producto porque no existe en el carrito
        $_SESSION["carrito"][$productoID] = array(
        "nombre"=>$nombreProducto,
        "precio"=>$precioProducto,
        "cantidad"=>$cantidadProducto
        );
    }
    actualizarCesta();
    header("Location: index.php");
}
/* funcion que cuenta los articulos que están en la cesta para mostrarlos en el header */
function actualizarCesta() {
    $_SESSION["totalProductos"]=0;
    foreach ($_SESSION["carrito"] as $productoID => $producto){
        $_SESSION["totalProductos"] += $producto["cantidad"];
    }
}

// ELIMINAR EL CARRITO

if (isset($_POST["eliminarCarrito"])){
    unset($_SESSION["carrito"]); // unset elimina el array $_SESION["carrito"]
    actualizarCesta();
    header("Location: mostrarCarrito.php");
}

// ACTUALIZAR EL CARRITO

if (isset($_POST["actualizarCarrito"])){
    $id=$_POST["id"];
    $cantidad=$_POST["cantidad"];
    if(isset($_SESSION["carrito"][$id])){ // ubica el id en el array
        $_SESSION["carrito"][$id]["cantidad"]=$cantidad; // sustituye en el array la cantidad que tenia por la nueva cantidad
    }
    actualizarCesta();
    header("Location: mostrarCarrito.php");
}

// ELIMINAR PRODUCTO EN LA LINEA

if (isset($_POST["eliminarProducto"])){
    $id=$_POST["id"]; // necesitamos el id para buscarlo y eliminarlo del array
    unset($_SESSION["carrito"][$id]); // elimina el valor del array
    actualizarCesta();
    header("Location: mostrarCarrito.php");
}