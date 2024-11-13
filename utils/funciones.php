<!-- Listar categoria por tabla -->
<?php

function listar_todos($conn, $tabla)
{

    // primer paso realizar la consulta o query
    $sqlPersonajes = "SELECT * FROM " . $tabla . ";";


    // Segundo ejecutar la consulta
    $result = $conn->query($sqlPersonajes);

    // Tercero Retornar y convertir la ocnsulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);
}


/* Listar un producto en particular */
/* Listar un producto en particular */

function categoria_particular($conn, $tabla, $id)
{

    // primer paso realizar la consulta o query
    $sqlPersonajes = "SELECT * FROM " . $tabla . " WHERE id = " . $id;


    // Segundo ejecutar la consulta
    $result = $conn->query($sqlPersonajes);

    // Tercero Retornar y convertir la ocnsulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);
}


/* Primeras peliculas
SELECT * FROM peliculas 
WHERE episodio BETWEEN 4 and 6
*/

function peliculas_one($conn)
{

    // primer paso realizar la consulta o query
    $sqlPeliculas = "SELECT * FROM peliculas 
                          WHERE episodio BETWEEN 1 and 3";


    // Segundo ejecutar la consulta
    $result = $conn->query($sqlPeliculas);

    // Tercero Retornar y convertir la ocnsulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);
}

function peliculas_two($conn)
{

    // primer paso realizar la consulta o query
    $sqlPeliculasTwo = "SELECT * FROM peliculas 
                                WHERE episodio IN (4,5,6,10)";


    // Segundo ejecutar la consulta
    $result = $conn->query($sqlPeliculasTwo);

    // Tercero Retornar y convertir la ocnsulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);
}



function peliculas_three($conn)
{

    // primer paso realizar la consulta o query
    $sqlPeliculasThree = "SELECT * FROM peliculas 
                                  WHERE episodio BETWEEN 7 and 9";


    // Segundo ejecutar la consulta
    $result = $conn->query($sqlPeliculasThree);

    // Tercero Retornar y convertir la ocnsulta en un array asociativo
    return $result->fetch_all(MYSQLI_ASSOC);
}




function buscar_productos($conn, $termino_busqueda)
{
    // Escapar el termino de busqueda para evitar inyecciones sql

    $termino_busqueda = $conn->real_escape_string($termino_busqueda);

    // Query para las consultas para buscar en la tabla de naves
    

    // Query para las consultas para buscar en la tabla de naves
                 
//nuevos


if (strtolower($termino_busqueda) === 'personajes' || ($termino_busqueda) === 'personaje') {
    // SI el termino es personaje o personajes rtraer todos los personajes sin filtrar
    $sqlPersonajesBusqueda = "SELECT 'personajes' as tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes";
} else {
    $sqlPersonajesBusqueda = "SELECT 'personajes' as tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes
    WHERE lower(nombre) LIKE '%$termino_busqueda%'"; 
}
                 
if (strtolower($termino_busqueda) === 'naves' || ($termino_busqueda) === 'nave') {
    // SI el termino es personaje o personajes rtraer todos los personajes sin filtrar
    $sqlNaves = "SELECT 'naves' as tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves";
} else {
   $sqlNaves = "SELECT 'naves' as tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves
WHERE lower(nombre) LIKE '%$termino_busqueda%'"; 
}


if (strtolower($termino_busqueda) === 'peliculas' || ($termino_busqueda) === 'pelicula') {
    // SI el termino es personaje o personajes rtraer todos los personajes sin filtrar
     $sqlPeliculasBusqueda = "SELECT 'peliculas' as tabla, id, nombre, episodio, descripcion, director, duracion, año_estreno, imagen FROM peliculas";
} else {
   $sqlPeliculasBusqueda = "SELECT 'peliculas' as tabla, id, nombre, episodio, descripcion, director, duracion, año_estreno, imagen FROM peliculas
WHERE lower(nombre) LIKE '%$termino_busqueda%'"; 
}


if (strtolower($termino_busqueda) === 'sable' || ($termino_busqueda) === 'sables') {
    // SI el termino es personaje o personajes rtraer todos los personajes sin filtrar
     $sqlSablesBusqueda = "SELECT 'sables' as tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen FROM sables";
} else {
   $sqlSablesBusqueda = "SELECT 'sables' as tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen FROM sables
WHERE lower(nombre) LIKE '%$termino_busqueda%'"; 
}

if (strtolower($termino_busqueda) === 'equipo' || ($termino_busqueda) === 'creditos' ) {
    // SI el termino es personaje o personajes rtraer todos los personajes sin filtrar
     $sqlEquipoBusqueda = "SELECT 'equipo' as tabla, id, nombre, apellido, rol, imagen FROM equipo";
} else {
   $sqlEquipoBusqueda = "SELECT 'equipo' as tabla, id, nombre, apellido, rol, imagen FROM equipo
WHERE lower(nombre) LIKE '%$termino_busqueda%' 
OR lower(rol) LIKE '%$termino_busqueda%'"; 
}



    //Ejecutar consulta y convertir en un array asociativo

    $resultNaves = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
    $resultPeliculasBusqueda = $conn->query($sqlPeliculasBusqueda)->fetch_all(MYSQLI_ASSOC);
    $resultPersonajesBusqueda = $conn->query($sqlPersonajesBusqueda)->fetch_all(MYSQLI_ASSOC);
    $resultSablesBusqueda = $conn->query($sqlSablesBusqueda)->fetch_all(MYSQLI_ASSOC);
    $resultEquipoBusqueda = $conn->query($sqlEquipoBusqueda)->fetch_all(MYSQLI_ASSOC);

    // Combinar los resultados de las tres tablas

    $resultado = array_merge($resultNaves, $resultPeliculasBusqueda, $resultPersonajesBusqueda, $resultSablesBusqueda, $resultEquipoBusqueda);

    return $resultado;
}
