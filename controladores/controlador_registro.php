<?php
//Primero espera a que el usuario de click al botón
if(!empty($_POST["Registro"])){
   //Luego se  verifica que los campos con los datos hayan sido diligenciados
 if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["clave"])) {
      echo 'Uno de los campos está vacío';
  } else {
    //Si son diligenciados, se igualan a variales
      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];
      $usuario=$_POST["usuario"];
      $clave=$_POST["clave"];
      $clave1=$_POST["clave1"];
      //Y se verifica que las contraseñas sean iguales 
      if ($clave==$clave1) {
       //Para luego hacer el registro en la tabla creada en la base de datos
       $sql=$conexion->query("insert into users(Nombres,Apellidos,Usuario,Clave)values('$nombre','$apellido','$usuario','$clave')");
       //Se verifica si el registro en la tabla se realizo exitosamente y avisa el resultado
       if($sql==1){
                 echo 'Registro exitoso';
        } else{
                 echo 'Fallo del Registro';
        }
      } else {
        //Aviso al usuario de que las contraseñas son diferentes
        echo 'Las contraseñas no coinciden';
      }
    }
}

?>