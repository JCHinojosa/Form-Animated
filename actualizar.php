<?php
        include("conexion.php");
        $con = conectar();

    $id =$_GET['id'];


    $sql = "SELECT * FROM fcrud WHERE id = '$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <div class="container shadow p-3 rounded mt-4" >
        <div class="container row">
        <div class="col-12">
                <form action="update.php" class="formulario" method="POST">
                    <h1 style="text-align: center;" class="" class="formulario_titulo">Edit</h1>
                    <input id="id" name="id" type="hidden" value="<?php echo $id?>">

                    <input type="text" class="formulario_input" name="name" id="name" value="<?php echo $row['name']?>">
                    <label for="" class="formulario_label fijar">Name</label>

                    <input type="text" class="formulario_input" name="e_mail" value="<?php echo $row['e_mail']?>">
                    <label for="" class="formulario_label fijar">e-Mail</label>

                    <input type="text" class="formulario_input" name="phone" value="<?php echo $row['phone']?>">
                    <label for="" class="formulario_label fijar">phone</label>

                    <input type="text" class="formulario_input" name="message" value="<?php echo $row['message']?>">
                    <label for="" class="formulario_label fijar">Message</label>
                    <button class="btn btn-primary col-12 mt-2" type="submit" name="submit">Enviar</button>
                    <button class="btn btn-secondary col-12 mt-2" type="button" onclick="goToIndex();" name="submit">Cancelar</button>
                    
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="Form.js" class=""></script>

</body>
</html>