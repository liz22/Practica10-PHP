<?php
	require("conexionPractica8.php");
	session_start();	


	$id=$_GET["id"];
	$query= "SELECT * FROM productos WHERE id='".$id."'";
	$resultado=mysqli_query($link,$query) or die ("Error: ". mysqli_error());

	if (mysqli_num_rows($resultado) > 0){

		while ($row=mysqli_fetch_array($resultado)) {
?>
		<html>
			<body>
				<font size="5" face="Arial"> Seguro de que quiere eliminar el registro?</font></br>
				<label><?php echo "ID: ".$row['id']; ?></label></br>
				<label><?php echo "Producto: ".$row['nombre']; ?></label></br>
				<label><?php echo "Clave: ".$row['clave'] ?></label></br>
				<label><?php echo "Precio: ".$row['precio'] ?></label></br>
				<label><?php echo "Descripcion: ".$row['descripcion']; ?></label></br>
				<?php echo "<a href='eliminar.php?id=".$row["id"]."'>"."<img src='si.png'/>"."</a>"; ?>
				<?php echo  "<a href='indice.php'>"."<img src='no.png'/>"."</a>"; ?>
				
			</body>	
		</html>
<?php 
		}
	}
	mysqli_close($link);
?>
