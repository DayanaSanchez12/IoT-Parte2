
<?php
    //Se realiza la conexión con la base de datos creada con heroku.
    $conexion=new mysqli("us-cdbr-east-06.cleardb.net","b7bf55beb2063f","166a9620","heroku_7610f4797b140c1","3306");
    $conexion->set_charset("utf8");
?>