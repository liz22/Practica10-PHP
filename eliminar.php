<?php 
require("conexionPractica8.php");

	$id = $_GET["id"];
	$query = "SELECT id FROM productos WHERE id='".$id."' ";
	$resultado = mysqli_query($link,$query) or die("Error: ".mysqli_error());

	if(mysqli_num_rows($resultado) > 0){	
		$query = "DELETE FROM productos WHERE id='".$id."' ";
		$resultado=mysqli_query($link,$query) or die("Error: ". mysqli_error());
		echo "EL producto ".$id." fue eliminado";
		echo "</br><a href='indice.php'>Indice</a>";
	}
	else{
		echo "no se pudo eliminar el producto: ".$id;
	}
	mysqli_close($link);
?>
