<html>
	<body>
		<form method="POST" action="guardar.php">
			<fieldset>
				<legent align="center"><font color="blue">Nuevo Producto</font></legent></br>	
				</br><label for="nombre"><font color="blue">Nombre del producto</font></label></br>
			  	<input type="text" name="nombre" id="nombre" value=""></br>

			  	<label for="clave"><font color="blue">Clave</font></label></br>
				<input type="text" name="clave" id="clave" value=""></br>

				<label for="precio"><font color="blue">Precio $</font></label></br>
				<input type="text" name="precio" id="precio" value=""></br>

				<label for="descripcion"><font color="blue">Descripcion</font></label></br>
				<textarea  name="descripcion"  id="descripcion" row="100" cols="50"></textarea></br>
				
				</br>
				<input type="submit" value="Guardar">
			</fieldset>
		</from>
	</body>
</html>