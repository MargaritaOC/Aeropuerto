<?php

    include_once("../Conecta/conexion.php");
    $conexion = Conexion::obtenerConexion(); 

    //estos son los datos que suponemos que hemos cogido de un formulario
    $nombre= "Jose";
    $apellidos = "Ignacio";
    $edad = 33;
    $idVuelo = 2;

    //PASO 1: Montar la sql colocando : y el nombre de la columna en cada valor
    $sql = "INSERT INTO pasajero (nombre,apellidos,edad,idVuelo) VALUES (:nombre,:apellidos,:edad,:idVuelo)";

    //PASO 2: Preparar la consulta SQL para su ejecucion 
    $sentencia =  $conexion ->prepare($sql);

    //PASO 3: Vinculamos los parametros de la consulta preparada con los valores de las variables correspondientes
    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":apellidos",$apellidos);
    $sentencia->bindParam(":edad",$edad);
    $sentencia->bindParam(":idVuelo",$idVuelo);

    //PASO 4: Ejecutar la consulta preparada
    $result = $sentencia->execute();

    if($result){
        echo "<br /> Registro insertado correctamente";
    }
    else{
        echo "<br /> Error al insertar el registro";
    }
?>