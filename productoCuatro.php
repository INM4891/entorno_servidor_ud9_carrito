<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatillas</title>
    <link rel="stylesheet" type="text/css" href="estiloCarrito.css">

</head>
<body>
    
    <h1>Zapatillas</h1>
    <p><div><img src="img\zapatillasCuatro.jpg"</div></p>
    <p><div class="nombreProducto">Zapatillas deportivas</div></p>
    <p><div class="descripcion">Zapatillas deportivas en ante y piel sintéticos. Collarín y lengüeta acolchados, 
        cordones delante y trabilla discreta detrás. Forro y plantillas de malla. Suelas con diseño. Grosor de la suela 4,5 cm.</div></p>
    <form method="post" action="carrito.php?nombre=Zapatillas deportivas&precio=45">
    <p><div class="precio">45 €</div></p>
    <p><input type="text" id="productoCuatro" placeholder="Introduce cantidad" name="cantidad" value="1"></p>
    <p><input type="submit" value="Añadir al carrito" class="btnAddAction"/></p>
    <p><a href="carrito.php">Ver carrito</a></p>
    <p><a href="indexCarrito.php">Volver al Menu</a></a></p>
    </form>
    
   
    
</body>
</html>