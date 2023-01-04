<?php 

class conexion
{
    function conectarBD(){
        $server = "localhost";
        $usuario = "root";
        $contraseña = "";
        $basedeDatos = "citasvet";

        $cadenaDeConexion= mysqli_connect($server, $usuario, $contraseña, $basedeDatos)
        or die ("Error  al conectar con la base de datos");

        if ($cadenaDeConexion){
            echo "conexion exitosa";
        }
    }
}
?>