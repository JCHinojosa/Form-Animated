
<?php



    include("conexion.php");
    $con = conectar();

    $name = $_POST['name'];
    $e_mail = $_POST['e_mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO fcrud (name,e_mail,phone,message)  VALUES ('$name','$e_mail','$phone','$message')";
    $query=mysqli_query($con,$sql);

    if($query){

        Header("Location: index.php");


    }else{
        Header("Location: error.php");
        
    }


?>

