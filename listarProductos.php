<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="css/estilos.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="img/favicon.png">

</head>
<body>

        <nav class=" navbar-custom navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-nav ml-auto">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="registro.php">Registrar</a>
                <a class="nav-link active" href="listarProductos.php">Listar</a>         
            </div>
        </div>
        </nav>


        <?php
        //Hacer una consulta BD para traer los usuarios

        //1.Incluir el archivo donde esta nuestra clase BD
        include("BaseDatos.php");

        //2.Crear la consulta SQL para buscar datos
        $consultaSQL="SELECT * FROM productos WHERE 1";

        //3.Crear un objeto de la clase BD y usar el metod budcar datos
        $transaccion=new BaseDatos();
        $productos=$transaccion->bucarDatos($consultaSQL);

        ?>


        <div class="container">
            <br>
            <br>
                <div class="row row-cols-1 row-cols-md-4">
                    <?php foreach($productos as $productos):?>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="<?php echo($productos["foto"])?>" class="card-img-top" alt="imagen">  
                            <div class="card-body">
                                <h4 class="card-title"> <?php echo($productos["nombre"])?></h4>
                                <h5 class="card-text"> <?php echo($productos["marca"])?></h5>
                                <h6 class="card-text"> <?php echo($productos["precio"])?></h6>
                                <p class="card-text"> <?php echo($productos["descripcion"])?></p>
                                <a href="eliminarProductos.php?id=<?php echo($productos["idProductos"])?>" class="btn btn-info">Eliminar</a>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editar<?php echo($productos["idProductos"])?>">
                                    Editar
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="editar <?php echo($productos["idProductos"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">Editar Productos</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <form action="editarProductos.php?id=<?php echo($productos["idProductos"])?>" method="POST">
                                                 <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" name="nombreEditar" value="<?php echo($productos["nombre"])?>">
                                                 </div>
                                                 <div class="form-group">
                                                    <label>Precio</label>
                                                    <input type="text" class="form-control" name="precioEditar" value="<?php echo($productos["precio"])?>">
                                                 </div>  
                                                 <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control" name="descripEditar"> <?php echo ($productos["descripcion"])?></textarea>
                                                 </div>
                                                 <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                                     
                                            </form>                                   
                                    </div>                           
                                </div>                            
                             </div>                         
                        </div>
                     </div>
                    <?php endforeach?>
                </div>
        </div>

      



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>