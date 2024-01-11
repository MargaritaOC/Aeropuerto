<?php

 //EJEMPLO PARA INSERTAR UNA CONSULTA PREPARADA CON ?
 include_once '../Conecta/conexion.php';
 $conexion = Conexion::obtenerConexion();

 //ESTOS SON LOS DATOS QUE SUPONEMOS QUE HEMOS COGIDO DE UN FORMULARIO
 $IdVuelo = "1";

 // Paso 1: Montar la SQL colocando una ? en cada valor
 $sqlInsert = "SELECT * FROM pasajero WHERE idVuelo = :idVuelo";

 // Paso 2: Preparar la consulta SQL para su ejecucion
 $sentencia = $conexion ->prepare($sqlInsert);

 // Paso 3: Vinculamos los parámetros de la consulta preparada con los valores de las variables correspondientes
 $sentencia->bindParam(":idVuelo",$IdVuelo);


 // Paso 4: Ejecutar la consulta preparada
 $resultado = $sentencia->execute();

 $numFilas = $sentencia -> rowCount();

 echo "<br /> El numero de filas es: " .$numFilas;

?>