<?php

    include("BaseDatos.php");

    if (isset($_POST["botonEditar"])){

        //1. Recibir datos actulizar
        $nombre=$_POST["nombreEditar"];
        $precio=$_POST["precioEditar"]
        $descrip=$_POST["descripEditar"];

        //2. Recibir el id del registro
        $id=$GET["id"]; 

        //3.Sacar copia o crear objeto de la clase
        $transaccion = new BaseDatos();

        //4.Crear una consulta para editar datos en SQL
        $consultaSQL="UPDATE usuarios SET nombre='$nombre', precio='$precio', descripcion ='$descrip' WHERE idProductos='$id'";

        //5.Acceder al medtodo editar datos
        $transaccion->editarDatos($consultaSQL);

        //6. Redirección
        header("location:listarProductos.php");
    
    }

?>