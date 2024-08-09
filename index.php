<?php
    include_once "header.php";

?>
<!--VIDEO-->
<div>
    <video src="media/adidas-productos-de-balonceso.mp4" class="video" loop muted autoplay></video>
</div>
<!--Seccion Mujer-->
    <div id="mujer">
    <!--es muy utilizado en php el input type=hidden -> pasa parametros pero no los muestra -> utiliza el metodo POST o GET para pasar esos parámetros-->
        <div class="responsive">
            <div class="galeria">
                <a href="media/zapatillas-mujer-adidas.webm">
                    <video src="media/zapatillas-mujer-adidas.webm" alt="chandal mujer adidas" class="galeria-item" autoplay loop muted>
                </a>
                <div class="desc">85€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Conjunto mujer ADIDAS">
                    <input type="hidden" name="precio" value="85">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/chandal-mujer-adidas.webp">
                    <img src="media/chandal-mujer-adidas.webp" alt="chandal mujer adidas" class="galeria-item">
                </a>
                <div class="desc">90€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Chandal mujer ADIDAS">
                    <input type="hidden" name="precio" value="90">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/mayas-cortas-mujer-adidas.webp">
                    <img src="media/mayas-cortas-mujer-adidas.webp" alt="Conjunto corto mujer adidas" class="galeria-item">
                </a>
                <div class="desc">40€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Conjunto corto mujer ADIDAS">
                    <input type="hidden" name="precio" value="40">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/chandal-verde-mujer-adidas.webp">
                    <img src="media/chandal-verde-mujer-adidas.webp" alt="Chandal verde mujer adidas" class="galeria-item">
                </a>
                <div class="desc">90€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Chandal verde mujer ADIDAS">
                    <input type="hidden" name="precio" value="90">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>
    </div>

    <!--Seccion Hombre-->
    <div id="hombre">
        <div class="responsive">
            <div class="galeria">
                <a href="media/chaleco-hombre.webp">
                    <img src="media/chaleco-hombre.webp" alt="Chaleco hombre adidas" class="galeria-item">
                </a>
                <div class="desc">45€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="6">
                    <input type="hidden" name="nombre-producto" value="Chaleco hombre ADIDAS">
                    <input type="hidden" name="precio" value="45">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/abrigo-hombre-adidas.webp">
                    <img src="media/abrigo-hombre-adidas.webp" alt="Abrigo hombre adidas" class="galeria-item">
                </a>
                <div class="desc">90€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Abrigo hombre ADIDAS">
                    <input type="hidden" name="precio" value="90">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/chandal-hombre-adidas.webp">
                    <img src="media/chandal-hombre-adidas.webp" alt="chandal hombre adidas" class="galeria-item">
                </a>
                <div class="desc">70€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Chandal hombre ADIDAS">
                    <input type="hidden" name="precio" value="70">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/chandal-negro-hombre.webp">
                    <img src="media/chandal-negro-hombre.webp" alt="Chandal negro hombre adidas" class="galeria-item">
                </a>
                <div class="desc">85€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Chandal negro hombre ADIDAS">
                    <input type="hidden" name="precio" value="85">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

    </div>

    <!--Seccion Infantil-->
    <div id="infantil">
        <div class="responsive">
            <div class="galeria">
                <a href="media/chandal-dorado-infantil.avif">
                    <img src="media/chandal-dorado-infantil.avif" alt="Chandal infantil adidas" class="galeria-item">
                </a>
                <div class="desc">50€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Chandal infantil ADIDAS">
                    <input type="hidden" name="precio" value="50">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/chandal-unisex-infantil.avif">
                    <img src="media/chandal-unisex-infantil.avif" alt="chandal unisex infantil adidas" class="galeria-item">
                </a>
                <div class="desc">70€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="chandal unisex infantil ADIDAS">
                    <input type="hidden" name="precio" value="70">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/sudadera-negra-infantil.avif">
                    <img src="media/sudadera-negra-infantil.avif" alt="Sudadera infantil adidas" class="galeria-item">
                </a>
                <div class="desc">30€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Sudadera infantil ADIDAS">
                    <input type="hidden" name="precio" value="30">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/pijama-infantil.avif">
                    <img src="media/pijama-infantil.avif" alt="Pijama infantil adidas" class="galeria-item">
                </a>
                <div class="desc">20€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Pijama infantil ADIDAS">
                    <input type="hidden" name="precio" value="20">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

    </div>
    <!--Seccion Zapatillas-->
    <div id="zapatillas">
        <div class="responsive">
            <div class="galeria">
                <a href="media/zapatillas-negras.webp">
                    <img src="media/zapatillas-negras.webp" alt="Zapatillas negras adidas" class="galeria-item">
                </a>
                <div class="desc">45€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Zapatillas negras ADIDAS">
                    <input type="hidden" name="precio" value="45">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/zapatillas-blancas.webp">
                    <img src="media/zapatillas-blancas.webp" alt="Zapatillas blancas adidas" class="galeria-item">
                </a>
                <div class="desc">60€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Zapatillas blancas ADIDAS">
                    <input type="hidden" name="precio" value="60">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/zapatillas-rojas-adidas.webp">
                    <img src="media/zapatillas-rojas-adidas.webp" alt="Zapatillas rojas adidas" class="galeria-item">
                </a>
                <div class="desc">35€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Zapatillas rojas ADIDAS">
                    <input type="hidden" name="precio" value="35">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>

        <div class="responsive">
            <div class="galeria">
                <a href="media/zapatillas-verdes.webp">
                    <img src="media/zapatillas-verdes.webp" alt="Zapatillas verdes adidas" class="galeria-item">
                </a>
                <div class="desc">70€</div>

                <form action="carrito.php" method="post">
                    <input type="hidden" name="id-producto" value="1">
                    <input type="hidden" name="nombre-producto" value="Zapatillas verdes ADIDAS">
                    <input type="hidden" name="precio" value="70">
                    <p class="cantidad">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                    </p>
                    <input type="submit" name="agregar" value="Comprar" class="boton">
                </form>

            </div>
        </div>


    </div>
    <!--Seccion Contacto-->
    <div id="contacto">

    </div>

</body>
</html>
