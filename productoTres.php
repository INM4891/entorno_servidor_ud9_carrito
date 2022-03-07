<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalones</title>
    <link rel="stylesheet" type="text/css" href="estiloCarrito.css">

</head>
<body>
    
    <h1>Pantalones</h1>
    <p><div><img src="img\pantalonesTres.jpg"</div></p>
    <p><div class="nombreProducto">Vaquero corto Mom Ultra High</div></p>
    <p><div class="descripcion">Zapatillas deportivas en ante y piel sintéticos. Collarín y lengüeta acolchados, 
        cordones delante y trabilla discreta detrás. Forro y plantillas de malla. Suelas con diseño. Grosor de la suela 4,5 cm.</div></p>
    <form method="post" action="carrito.php?nombre=Vaquero corto Mom Ultra High&precio=20">
    <p><div class="precio">20 €</div></p>
    <p><input type="text" id="productoTres placeholder="Introduce cantidad" name="cantidad" value="1"></p>
    <p><input type="submit" value="Añadir al carrito" class="btnAddAction"/></p>
    <p><a href="carrito.php">Ver carrito</a></p>
    <p><a href="indexCarrito.php">Volver al Menu</a></a></p>
    </form>
    
   
    
</body>
</html>