<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head><title>Inicio Sesion</title></head>
  <body>
    <?php 
	  if(isset($_POST['nombre']) && isset($_POST['password'])){
	      
		     if ($_POST['nombre']=='administrador' && $_POST['password']=='admin'){
				$_SESSION['nombre']=$_POST['nombre'];
				echo "Bienvenido usuario: " . $_POST['nombre'];
				echo "</br><a href='indice.php'>Indice</a>";
		     }
		     else {
				echo "Acceso Restringido";
				echo "</br><a href='Sesion.php'>Pagina Sesion</a>";
		      }
	  } 
	  else{

		      if (isset($_SESSION['nombre'])){
				echo "Sesion de: ". $_SESSION['nombre'];
				echo "</br><a href='indice.php'>Ir a indice</a>";
				echo "</br><a href='Cerrar.php'>Salir de la sesion</a>";
		      }
		      else{
					echo "Acceso Restringido";      
		      }
	 }
	?>
	
  </body>
</html>