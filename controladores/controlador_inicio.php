<?php
//Primero espera a que el usuario de click al botón
if(!empty($_POST["Iniciar"])){
   //Luego se  verifica que los campos con los datos hayan sido diligenciados
   if (empty($_POST["usuario"]) or empty($_POST["clave"])) {
      echo 'Uno de los campos está vacío';
  } else {
    //Si son diligenciados, se igualan a variales
      $usuario=$_POST["usuario"];
      $clave=$_POST["clave"];
      //Para luego hacer la conexión con la tabla creada en la base de datos
      $sql=$conexion->query("select * from users where Usuario='$usuario' and Clave='$clave'");
      //Se verifica que los datos ingresados sean correctos.     
     //Si son correctos pasa al menu principal. 
     if($datos=$sql->fetch_object()){   
               header("location: Menu.php");
               echo"<script language='javascript'>window.location='Menu.php'</script>;";
               exit();
      } else{
                //Si son incorrectos se le notificara al usuario.
               echo 'Usuario o Contraseña incorrectos';
      }
    }   
}
?>