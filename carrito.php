<?php 

$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;
$existe = 0;

//Vaciamos el carrito
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
	$sHTML .= 'El carrito está vacio';
}

//Obtenemos los productos anteriores
if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Anyado un nuevo articulo al carrito
if(isset($_GET['nombre']) && isset($_GET['precio'])) {


	for($i = 0; $i< sizeof($aCarrito); $i++) {
	    if($aCarrito[$i]['nombre'] == $_GET['nombre']) {
		$aCarrito[$i]['cantidad'] = $aCarrito[$i]['cantidad'] + 1;
		$existe = 1;
	    }
	}


	if($existe == 0) {
		$iUltimaPos = count($aCarrito);
		$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
		$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
		$aCarrito[$iUltimaPos]['cantidad'] = $_POST['cantidad'];
        }
}

//Creamos la cookie (serializamos)
$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimimos el contenido del array
$sHTML .= '<table style="width:400px;">';
$sHTML .= '<tr><td><b>Nombre</b></td><td><b>Precio</b></td><td><b>Cantidad</b></td></tr>';
foreach ($aCarrito as $key => $value) {
	$sHTML .= '<tr>';
	$sHTML .= '<td>' . $value['nombre'] . '</td><td>' . $value['precio']*$value['cantidad'] . '</t><td>' . $value['cantidad']  . '</td>';
	$sHTML .= '</tr>';
	$fPrecioTotal += $value['precio']*$value['cantidad'] ;
}
$sHTML .= '</table>';

//Imprimimos el precio total
$sHTML .= '<br><br>Precio total: ' . $fPrecioTotal . ' €' 

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Carrito</title>
    <link rel="stylesheet" type="text/css" href="estiloCarrito.css">
</head>
<body>
    <h1>Carrito</h1>
	<div>
		<?php echo $sHTML; ?>
	</div>
<br>
<a href="carrito.php?vaciar=1">Vaciar carrito</a>
<br>
<a href="indexCarrito.php">Volver al Menu</a>
</body>
</html>