<?php
    include("conexion.php");
    $con =conectar();
    $sql =  "SELECT * FROM fcrud";
    $query=mysqli_query($con,$sql);
    $lista = array();
    while($r = mysqli_fetch_array($query))
    {
        $lista[] = $r;
    }
    $contador = count($lista);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>

        <div class="container shadow p-3 rounded mt-4">
            <div class=" container row " >
                <div class="col-4">
                    <form action="insertar.php" class="formulario" method="POST">
                        <h1 style="text-align: center;" class="formulario_titulo">AGREGAR</h1>

                        <input type="text" class="formulario_input" name="name">
                        <label for="" class="formulario_label">Name</label>

                        <input type="text" class="formulario_input" name="e_mail">
                        <label for="" class="formulario_label">e-Mail</label>

                        <input type="text" class="formulario_input" name="phone">
                        <label for="" class="formulario_label">phone</label>

                        <input type="text" class="formulario_input" name="message">
                        <label for="" class="formulario_label">Message</label>
                        <button class="btn btn-primary col-12 mt-2" type="submit" name="submit">Enviar</button>
                    </form>
                </div>
                
                    <div class=" col-8 mt-5 ">
                        <table class="table">

                            <thead class="table-success table-striped">

                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>e_mail </th>
                                    <th>phone</th>
                                    <th></th>
                                    <th></th>
                                    
                                </tr>

                            </thead>

                            <tbody>
                                <?php foreach($lista as $tmp){ ?>
                                    <tr>    
                                        <td><?= $tmp['id'];?></td>
                                        <td><?= $tmp['name'];?></td>
                                        <td><?= $tmp['e_mail'];?></td>
                                        <td><?= $tmp['phone'];?></td>
                                        <td><a id="id" href="actualizar.php?id=<?= $tmp['id']?>" class="btn btn-success">Editar</a></td>
                                        <td><a href="delete.php?id=<?= $tmp['id']?>" class="btn btn-danger">Eliminar</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

            </div> 
        </div> 
                             
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="Form.js" class=""></script>
</body>
</html>