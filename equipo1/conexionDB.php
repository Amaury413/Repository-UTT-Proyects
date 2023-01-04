<?php

class equipo1{

    function conectarDB()
    {
        $server = "localhost";
        $user = "root";
        $password ="";
        $baseDeDatos="sakila";

        $cadenaDeConexion = mysqli_connect($server,$user,$password,$baseDeDatos)
        or die ("Error al conectar con la base de datos");

        if($cadenaDeConexion){
            echo"la conexion si sirve yay";
        }
    }
}

?>