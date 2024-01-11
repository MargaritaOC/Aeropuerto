<?php

    include_once("../Conecta/conexion.php");
    $conexion = Conexion::obtenerConexion(); 

    //estos son los datos que suponemos que hemos cogido de un formulario
    $nombre= "Margarita";
    $apellidos = "Ordonez";
    $edad = 22;
    $idVuelo = 1;

    //PASO 1: Montar la sql colocando una ? en cada valor
    $sql = "INSERT INTO pasajero (nombre,apellidos,edad,idVuelo) VALUES (?,?,?,?)";

    //PASO 2: Preparar la consulta SQL para su ejecucion 
    $sentencia =  $conexion ->prepare($sql);

    //PASO 3: Vinculamos los parametros de la consulta preparada con los valores de las variables correspondientes
    $sentencia->bindParam(1,$nombre,PDO::PARAM_STR);
    $sentencia->bindParam(2,$apellidos,PDO::PARAM_STR);
    $sentencia->bindParam(3,$edad,PDO::PARAM_INT);
    $sentencia->bindParam(4,$idVuelo,PDO::PARAM_INT);

    //PASO 4: Ejecutar la consulta preparada
    $result = $sentencia->execute();

    if($result){
        echo "<br /> Registro insertado correctamente";
    }
    else{
        echo "<br /> Error al insertar el registro";
    }
?>