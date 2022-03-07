<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaquetas</title>
    <link rel="stylesheet" type="text/css" href="estiloCarrito.css">

</head>
<body>
    
    <h1>Chaquetas</h1>
    <p><div><img src="img\chaquetaUno.jpg"</div></p>
    <p><div class="nombreProducto">Chaqueta de béisbol</div></p>
    <p><div class="descripcion">Chaqueta de béisbol en mezcla de algodón con cuello de canalé, botones de presión y bolsillos insertados delante. 
        Modelo de corte relajado con hombros caídos y remate elástico de canalé en puños y bajo. Forrado.</div></p>
    <form method="post" action="carrito.php?nombre=Chaqueta de beisbol&precio=180">
    <p><div class="precio">180 €</div></p>
    <p><input type="text" id="productoUno" placeholder="Introduce cantidad" name="cantidad" value="1"></p>
    <p><input type="submit" value="Añadir al carrito" class="btnAddAction"/></p>
    <p><a href="carrito.php">Ver carrito</a></p>
    <p><a href="indexCarrito.php">Volver al Menu</a></a></p>
    </form>
    
   
    
</body>
</html>