<?php

/*
    Este ejempllo realiza una consulta a una BBDD utilizando PDO y mostrando los resultados usadno el metodo PDO:FETCH_CLASS
*/ 

 //EJEMPLO PARA INSERTAR UNA CONSULTA FETCH
 include_once '../Conecta/conexion.php';
 include_once '../Modelo/Pasajero.php';
 $conexion = Conexion::obtenerConexion();

 $sql = "SELECT * FROM pasajero";
 $sentencia = $conexion ->prepare($sql);

// fila ahora es un objeto de la clase pasajero
 $sentencia->setFetchMode(PDO::FETCH_CLASS, "Pasajero");
 $sentencia->execute();

 while($fila = $sentencia->fetch()){
    echo "<br />ID: ".$fila->getIdPasajero();
    echo "<br />Nombre: ".$fila->getNombre();
    echo "<br />Apellidos: ".$fila->getApellidos();
    echo "<br />Edad: ".$fila->getEdad();
    echo "<br />IdVuelo: ".$fila->getIdVuelo();
    echo "<br />";
 }


?>