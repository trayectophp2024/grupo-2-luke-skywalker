<?php

require_once "utils/funciones.php";
require_once "utils/db_connections.php";

//Capturamos la tabla que viene por gEt

$tabla = $_GET['categoria'] ?? false;

$tablas = [
    'personajes' => 'personajes_star',


];

//comprobar si existe elarray

if (!array_key_exists($tabla, $tablas)) {
    header('Location: error404.php');
}


// Segundo paso es llamar a la funcion


$categorias = listar_todos($conn, $tabla);

/* 
echo "<pre>";
var_dump($categorias);
echo "</pre>"; */

?>

<?php require "partials/header.php" ?>

<main class="container">

<div class="row mt-3">
    <?php foreach ($categorias as $producto) { ?>
            <div class="col-2 d-block mt-4" >
                <a href="personaje_solo.php?categorias=<?=$tabla?>&id=<?=$producto['id']?>" class="text-decoration-none">
                    <div class="border border-light border-2">
                        <div class=" text-bg-dark">
                            <h4 class="fs-6 card-title fw-bold text-success text-bg-light text-center py-3"><?= $producto['nombre']; ?></h4>
                            <img height= "150px" width="150px" src="img/personajes/<?=$producto['imagen'];?>" class="d-flex flex-fill w-100" alt="...">
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
</div>
        
<?php require "partials/footer.php"  ?>