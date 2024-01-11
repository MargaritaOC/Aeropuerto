<?php

/*
    Este ejempllo realiza una consulta a una BBDD utilizando PDO y mostrando los resultados usadno el metodo PDO:FETCH_OBJ,
    que devuelve objetos anónimos con nombres de propiedades que se corresponden con el nombre de los campos de la tabla
*/ 

 //EJEMPLO PARA INSERTAR UNA CONSULTA FETCH
 include_once '../Conecta/conexion.php';
 $conexion = Conexion::obtenerConexion();

 $sql = "SELECT * FROM pasajero";
 $sentencia = $conexion ->prepare($sql);

// fila ahora es un objeto cuyos atributos son los nombres  de los campos de la tabla de BBDD
 $sentencia->setFetchMode(PDO::FETCH_OBJ);
 $resultado = $sentencia->execute();

 while($fila = $sentencia->fetch()){
    echo "<br />ID: ".$fila->idpasajero;
    echo "<br />Nombre: ".$fila->nombre;
    echo "<br />Apellidos: ".$fila->apellidos;
    echo "<br />Edad: ".$fila->edad;
    echo "<br />IdVuelo: ".$fila->idVuelo;
    echo "<br />";
 }


?>