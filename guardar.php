<?php 
require("conexionPractica8.php"); 
	
	$nombre=$_POST["nombre"];
	$clave=$_POST["clave"];
	$descripcion=$_POST["descripcion"];
	$precio=$_POST["precio"];

	echo "<p>El producto que se guardo es el siguiente:</p>";
	echo "Nombre: ". $nombre;
	echo "</br> Clave: ". $clave;
	echo "</br> Precio: ". $precio; 
	echo "</br> Descripcion: ". $descripcion; echo "</br>";
	
	$insertar = mysqli_query($link, "INSERT INTO productos(nombre,clave,precio,descripcion) VALUES ('$nombre','$clave','$precio','$descripcion')");
	if(!$insertar){
		echo "</br>Error al guardar los datos!!";
	} 
	else{
		echo "</br>Los datos fueron guardados con exito!!";
	}
	mysqli_close($link);
	echo "</br><a href='indice.php'>Regresar a indice</a>";
	echo "</br><a href='Cerrar.php'>Cerrar sesi&acuten</a>"
?>
 