<?php



    include("conexion.php");
    $con = conectar();

    $id =$_GET['id'];
    


    $sql = "DELETE FROM `fcrud` WHERE id = '$id'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{
        Header("Location: error.php");
    }



?>
