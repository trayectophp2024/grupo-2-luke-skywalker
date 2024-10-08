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

    <div class="row mt-3 border border-light border-2">

        <?php foreach ($productos as $producto) { ?>


           
                <div class="col-3 border border-light border-2">
                    <img height="300px" width="300px" src="img/personajes/<?= $producto['imagen']; ?>" class="d-block w-100" alt="...">
                    <h4 class="fs-6 card-title fw-bold text-success text-bg-light text-center py-3"><?= $producto['nombre']; ?></h4>
                    <p>ESPECIE: <?= $producto['especie']; ?> </p>
                </div>

                <div class="col-9 border border-light border-2">
                    <p class="card-text text-white fs-6"><?= $producto['descripcion']; ?></p>
                </div>

              

            <?php } ?>


            

</main>

<?php require "partials/footer.php"  ?>