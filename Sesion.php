<?php 
session_start();
?>
<html>
<head><title>Iniciar Sesion</title></head>
  <body>
    <?php
      if (isset($_SESSION['nombre'])){
	       echo "<p><a href='Cerrar.php'>Cerrar Sesion</a></p>";
         echo "<p><a href='Inicio.php'>Sesion</a></p>";
      }
      else{ 
       
     ?>
      <form action="Inicio.php" method="POST">
      	<p> Usuario :</br><input type="text" name="nombre"></input></p>
      	<p>Password :</br><input type="text" name="password"></input></p>
      	<input type="submit" value="Inicio"></input>
      </from>
 
    <?php 
      } 
    ?>  
  </body>
</html>