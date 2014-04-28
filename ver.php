<?php 

require("conexionPractica8.php");
session_start($link);


	$id=$_GET["id"];
	$query= "SELECT * FROM productos WHERE id='".$id."'";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());

	if (mysqli_num_rows($resultado) > 0){

		while ($row=mysqli_fetch_array($resultado)) {
?>
		<html>
			<body>
				<font size="5">Producto</font></br>
				<label><?php echo "ID: ".$row['id']; ?></label></br>
				<label><?php echo "Producto: ".$row['nombre']; ?></label></br>
				<label><?php echo "Clave: ".$row['clave'] ?></label></br>
				<label><?php echo "Precio: ".$row['precio'] ?></label></br>
				<label><?php echo "Descripcion: ".$row['descripcion']; ?></label></br>
				<a href="indice.php">Indice</a>	
				
			</body>	
		</html>
<?php 
		}
	}
	mysqli_close($link);
?>
