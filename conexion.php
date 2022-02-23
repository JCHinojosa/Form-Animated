<?php

    function conectar(){
        $host="localhost";
        $user="root";
        $pass="";
    
        $bd="formcrud";
    
        $con=mysqli_connect($host, $user, $pass);
    
        mysqli_select_db($con, $bd);
        
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
      }
    
        return $con;
    }
?>