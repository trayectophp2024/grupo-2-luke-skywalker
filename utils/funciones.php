<!-- Listar categoria por tabla -->
<?php

function listar_todos($conn, $tabla) {

// primer paso realizar la consulta o query
    $sqlPersonajes = "SELECT * FROM ". $tabla .";";


// Segundo ejecutar la consulta
    $result = $conn ->query($sqlPersonajes);

// Tercero Retornar y convertir la ocnsulta en un array asociativo
return $result->fetch_all(MYSQLI_ASSOC);
}


/* Listar un producto en particular */

function categoria_particular($conn, $tabla, $id){

    // primer paso realizar la consulta o query
    $sqlPersonajes = "SELECT * FROM " . $tabla . " WHERE id = " . $id;


// Segundo ejecutar la consulta
    $result=$conn ->query($sqlPersonajes);

// Tercero Retornar y convertir la ocnsulta en un array asociativo
return $result->fetch_all(MYSQLI_ASSOC);


}