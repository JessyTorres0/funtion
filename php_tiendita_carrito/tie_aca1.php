<!DOCTYPE html>

<!--

tie_aca1.php

Agrega articulos al carrito de compras
Para crear la base y la tabla se requiere el script: php_tiendita_carrito.sql
El script se encuentra en el directorio: php_tiendita_carrito
Rogelio Ferreira Escutia - mayo 2018

-->

<html lang="es">
	<head>
	<link rel="stylesheet" href="estilo.css">
		<meta charset="utf-8" />
		<title>Tiendita > Agregar articulos al carrito</title>
	</head>
	<body>
	<div class="login-wrap">
        <div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked >
    
		<h2 for="tab-2" class="tab">Tiendita > Agregar articulos al carrito</h2>
		<?PHP
			$servidor="localhost";
			$usuario="root";
			$clave="";
			$conexion = mysqli_connect($servidor, $usuario, $clave, "php_tiendita_carrito");
			if (!$conexion)
				{ echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }
		
			$sql = "SELECT * FROM catalogo";
			$resultado=mysqli_query ($conexion, $sql);
			echo '<table>';
			while ($renglon=mysqli_fetch_array($resultado))
				{
				echo '<tr>';
				echo '<td>'.$renglon["articulo"].'</td>';
				echo '<td>'.$renglon["precio"].'</td>';
				echo '<td>'.$renglon["cantidad"].'</td>';
				$ruta_imagenes="imagenes/".$renglon["imagen"];
				echo '<td><img src="'.$ruta_imagenes.'" /></td>';
				echo '<td><a href="tie_aca2.php?nombre=ana&articulo='.$renglon["articulo"].'"><img src="imagenes/carrito.jpg" /></a></td>';
				echo '</tr>';
				}
			echo '</table>';
			mysqli_close($conexion);
		?>
		<a href="index.html">Regresar a la pagina principal</a>
		</div>
        </div>
	</body>
</html>
