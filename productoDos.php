<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsos</title>
    <link rel="stylesheet" type="text/css" href="estiloCarrito.css">

</head>
<body>
    
    <h1>Bolsos</h1>
    <p><div><img src="img\bolsosDos.jpg"</div></p>
    <p><div class="nombreProducto">Bolso en tejido de jacquard</div></p>
    <p><div class="descripcion">Bolso de mano en jacquard de mezcla de algodón.
         Modelo con dos asas y un compartimento interior con cremallera. Forro en sarga de algodón. Profundo 16 cm. Alto 32 cm. Ancho 41 cm.</div></p>
    <form method="post" action="carrito.php?nombre=Bolso en tejido de jacquardl&precio=30">
    <p><div class="precio">30 €</div></p>
    <p><input type="text" id="productoDos" placeholder="Introduce cantidad" name="cantidad" value="1"></p>
    <p><input type="submit" value="Añadir al carrito" class="btnAddAction"/></p>
    <p><a href="carrito.php">Ver carrito</a></p>
    <p><a href="indexCarrito.php">Volver al Menu</a></a></p>
    </form>
    
   
    
</body>
</html>