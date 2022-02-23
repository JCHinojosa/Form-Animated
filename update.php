

<?php

include("conexion.php");
$con = conectar();

$id= $_POST['id'];
$name = $_POST['name'];
$e_mail = $_POST['e_mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$sql= " UPDATE fcrud SET name='$name', e_mail='$e_mail', phone='$phone', message='$message' WHERE id='$id' ";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else{
   Header("Location: error.php");
   
}



?>