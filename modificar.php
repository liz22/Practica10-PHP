<?php 
require("conexionPractica8.php"); 
session_start();	

	$id=$_POST["id"];
	$query= "SELECT * FROM productos WHERE id='".$id."'";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());

	if (mysqli_num_rows($resultado) > 0){
		
		$query ="UPDATE productos SET nombre='".$_POST["nombre"]."', clave='".$_POST["clave"]."',precio='".$_POST["precio"]."', descripcion='".$_POST["descripcion"]."' WHERE id='".$_POST["id"]."' "; 
		$resultado=mysqli_query($link,$query) or die("Error". mysqli_error());
		echo "Se modifico el registro ".$id." con exito</br>";
		 
		echo "</br>"."Nombre: ".$_POST["nombre"].
		     "</br>"."Clave: ".$_POST["clave"].
		     "</br>"."Descripcion: ".$_POST["descripcion"].
		     "</br>"."Precio".$_POST["precio"];
		 echo "</br><a href='indice.php'>Indice</a>"; 
	}
	else {

		echo "No se logro realizar los cambios";
	}
	mysqli_close($link);
?>