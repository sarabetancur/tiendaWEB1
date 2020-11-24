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

        include ("BaseDatos.php");

        //0.Recibir el ID del registro a eliminar
        $id=$_GET["id"];

        //1.Utilizar la base datos (sacarle copia a la clase - instanciar - crear un objeto)
        $transaccion= new BaseDatos();

        //2.Crear la consulta para eliminar registros
        $consultaSQL="DELETE FROM productos WHERE idProductos='$id'";

        //3.Llamar y utilizar el método eliminar datos
        $transaccion->eliminarDatos($consultaSQL);

        ?>
        
        <footer class="footer_area clearfix">
            <div class="container fluid">          
                <div class="single_widget_area">
                    <p class="copywrite">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Cosas de Gatos | Todos los derechos reservados |  <i class="fa fa-heart-o" aria-hidden="true"></i>Adaptación </a> Sara Betancur
                    </p>
                 </div>     
            </div>
        </footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>