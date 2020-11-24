<?php

    class BaseDatos{

    //Variables==Atributos
    public $usuarioBD="root";
    public $passwordBD="";

    //Función especial para sacar copias del molde (el constructor)
    public function __construct(){}

    //Funciones==Metodos
    public function conectarBD(){
   
    try
    {
        $infoBD="mysql:host=localhost;dbname=cosadegatos";
        $conexionBD= new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
        return($conexionBD);
    }   catch(PDOException $error){
        echo($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL){

        //1.Conectarme a la base de datos
        $conexionBD=$this->conectarBD();

        //2.Preparar la consulta
        $consultaAgregarDatos=$conexionBD->prepare($consultaSQL);

        //3.Ejecutar la consulta
        $resultado=$consultaAgregarDatos->execute();

        //4.Verifique el resultado
        if ($resultado){
            echo("Producto agregado con éxito");
        }else{
            echo ("Error agregando el Producto");
        }
    }

    
    
    public function bucarDatos($consultaSQL){

    //1.Conectar a la BD
    $conexionBD=$this->conectarBD();
    
    //2.Preparar la consulta
    $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

    //3.Indicar cual es el método para traer los datos
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //4.Ejecutar
    $consultaBuscarDatos->execute();

    //5.Retornar los datos consultados
    return($consultaBuscarDatos->fetchAll());
    }


    public function eliminarDatos($consultaSQL){

    //1.Conectarme a la base de datos
    $conexionBD=$this->conectarBD();

    //2.Preparar la consulta
    $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);

    //3.Ejecutar la consulta
    $resultado=$consultaEliminarDatos->execute();

    //4.Verifique el resultado
    if ($resultado){
        echo("Producto eliminado con éxito");
    }else{
        echo ("Error eliminando el producto");
    }
    }


    public function editarDatos ($consulta){
    //1.Conectarme a la base de datos
    $conexionBD=$this->conectarBD();
    
    //2.Preparar la consulta
    $consultaeditarDatos=$conexionBD->prepare($consultaSQL);
    
    //3.Ejecutar la consulta
    $resultado=$consultaeditarDatos->execute();
    
    //4.Verifique el resultado
    if ($resultado){
        echo("Registro editado con éxito");
    }else{
        echo ("Error editando el registro");
    }
    }
    

}

?>