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
				<head><title>Modificar</title></head>
				<body>
					<form method="POST" action="modificar.php">
						<fieldset>
								<legent align="center"><font size="5">Modificar Producto</font></legent></br>	
								</br><input type="text" name="id" value="<?php echo $row["id"];  ?>"readonly="true">
								</br><label for="nombre"><font color="blue">Nombre del producto</font></label></br>
							  	<input type="text" name="nombre" id="nombre" value="<?php echo $row["nombre"]; ?>"></br>

							  	<label for="clave"><font color="blue">Clave</font></label></br>
								<input type="text" name="clave" id="clave" value="<?php echo $row["clave"]; ?>"></br>

								<label for="precio"><font color="blue">Precio $</font></label></br>
								<input type="text" name="precio" id="precio" value="<?php echo $row["precio"]; ?>"></br>

								<label for="descripcion"><font color="blue">Descripcion</font></label></br>
								<textarea  name="descripcion"  id="descripcion" row="100" cols="50"><?php echo $row["descripcion"]; ?></textarea></br>
								
								</br>
								<input type="submit"  nombre="submit" value="Guardar cambios">
							</fieldset>
					</from>
				</body>	
			</html>
<?php 
		}
	}
	mysqli_close($link);
?>