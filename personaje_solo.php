<?php

require_once "utils/funciones.php";
require_once "utils/db_connections.php";

//Capturamos la tabla que viene por gEt

$tabla = $_GET['categorias'] ?? false;
$id = $_GET['id'] ?? false;

$productos = categoria_particular($conn, $tabla, $id);

$producto = $productos[0] ?? NULL;



// Segundo paso es llamar a la funcion


$categorias = listar_todos($conn, $tabla);

/* 
echo "<pre>";
var_dump($categorias);
echo "</pre>"; */

?>

<?php require "partials/header.php" ?>

<main class="container">

    <div class="row g-0 mt-5 border border-light border-2">

        <?php foreach ($productos as $producto) { ?>



            <div class="col-3 border border-light border-2" >
                <img height="300px" width="300px" src="img/personajes/<?= $producto['imagen']; ?>" class="d-block w-100" alt="...">
                <h2 class="card-title fw-bold text-success text-bg-light text-center m-1 py-3"><?= $producto['nombre']; ?></h2>
                
                    <h5 class="fw-bold text-center text-white border-top border-light border-2 pt-5">ESPECIE</h5>
                    <p class="card-text text-center text-white fs-6 pb-3 d-flex flex-column align-items-center"><?= $producto['especie']; ?></p>
                
            </div>

            <div class="col-9 border border-light border-2 p-3"   style="min-height:200px">
                <p class="card-text text-white fs-5"><?= $producto['descripcion']; ?></p>
                <h4 class="pt-3">AFILIACIÓN:</h4>
                <p class="card-text text-white fs-6"><?= $producto['afiliacion']; ?></p>
                <h4 class="pt-3">PLANETA NATAL:</h4>
                <p class="card-text text-white fs-6"><?= $producto['planeta_natal']; ?></p>
                <h4 class="pt-3">HABILIDADES:</h4>
                <p class="card-text text-white fs-6"><?= $producto['habilidades']; ?></p>
                <h4 class="pt-3">ARMA:</h4>
                <p class="card-text text-white fs-6"><?= $producto['arma']; ?></p>
                <h4 class="pt-3">ACTOR:</h4>
                <p class="card-text text-white fs-6"><?= $producto['actor']; ?></p>
            </div>



        <?php } ?>




</main>

<?php require "partials/footer.php"  ?>