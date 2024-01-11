<?php

 //EJEMPLO PARA INSERTAR UNA CONSULTA FETCH
 include_once '../Conecta/conexion.php';
 $conexion = Conexion::obtenerConexion();

 $sql = "SELECT * FROM pasajero";
 $sentencia = $conexion ->prepare($sql);

// Para leer necesito elegir el tipo de dato que queremos como salida
// Para ello hay varias constantes que determinan los distintos tipos:
// - PDO::ASOC: Me devuelve un array indexado por los nombres de las columnas
// - PDO::NUM: Me devuelve un array indexado por el numero de columna
// - PDO::BOTH: Valor por defecto. Devuelve un array indexado por columnas y por numeros
 $sentencia->setFetchMode(PDO::FETCH_ASSOC);
 $resultado = $sentencia->execute();

 while($fila = $sentencia->fetch()){
    echo "<br />ID: ".$fila["idPasajero"];
    echo "<br />Nombre: ".$fila["nombre"];
    echo "<br />Apellidos: ".$fila["apellidos"];
    echo "<br />Edad: ".$fila["edad"];
    echo "<br />IdVuelo: ".$fila["idVuelo"];
    echo "<br />";
 }

?>