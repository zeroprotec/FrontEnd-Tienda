<?php 

    function conectar(){
        $user="root";
        $pass="";
        $server="localhost:3306";
        $db="mitiendavirtual";
        $conex=mysqli_connect($server,$user,$pass) or die ("Error al Conectar a la database");
        mysqli_select_db($conex,$db);

        return $conex;
    }
    
?>