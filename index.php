<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="registro.php">Registrar</a>
                <a class="nav-link" href="listarProductos.php">Listar</a>         
            </div>
        </div>
        </nav>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                         <img src="img/slide1.png" class="d-block w-100" alt="...">
                    </div>
                <div class="carousel-item">
                        <img src="img/slide2.png" class="d-block w-100" alt="...">
                </div>
            </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        <h4 class="textHome"> N U E S T R O S . P R O D U C T O S </h4>

        <br>
        <br>
        <br>

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