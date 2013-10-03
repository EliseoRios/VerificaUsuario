<html>
 <head>
  <title>Usuario</title>
 </head>
 <body>
  <form method="post">
   C&oacutedigo: <input type="text" name="codigo"/>
   <br/>
   Contrase&ntildea: <input type="password" name="contrasenia"/>
   <br/>
   <input type="submit" name="Entrar"/>
   
   <?php
   $codigo=$_POST['codigo'];
   $contrasenia=$_POST['contrasenia'];
   if(trim($codigo)!=null and trim($contrasenia)!=null)
   {
    if($codigo=="100" && $contrasenia=="udg")
    {
     header('Location:Iniciar.php');
    }
    else
    {
     header('Location:Incorrecto.php');
    }
   }
   else
   {
    echo "<h4>Favor de llenar los espacios</h4>";
   }

   unset($_POST['codigo'] );
   unset($_POST['contrasenia'] );
   ?>
  </form>
 </body>
</html>