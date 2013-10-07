<html>
 <head>
  <title>Verificaci&oacuten </title>
 </head>
 
 <body>
  <form method="post" action="Capturando.php">
   <input type="submit" value="Cerrar"/>
  </form>
  
   <?php
   $codigo=$_POST['codigo'];
   $contrasenia=$_POST['contrasenia'];
   
    if($codigo=="100" && $contrasenia=="udg")
    {   
	 echo   "<h1>DATOS CORRECTOS</h1><p>Has accedido con c&oacutedigo: ".$codigo."</p>";
    }
    else
    {
	 echo   "<h1>DATOS INCORRECTOS<h1>";
    }

    unset($_POST['codigo'] );
    unset($_POST['contrasenia'] );
   ?>
 </body>
</html>