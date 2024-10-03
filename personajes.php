<?php

require_once "utils/funciones.php";
require_once "utils/db_connections.php";

//Capturamos la tabla que viene por gEt

$tabla = $_GET['$categorias'] ?? false;

$tablas = [
    'personajes' => 'personajes',

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



    <?php foreach ($categorias as $producto) { ?>
        <div class="row mt-3 mx-auto">
            <div class="col-2">
            <div class="border border-light border-2">

                <div class="card-body text-bg-dark">
                    <h4 class="card-title fw-bold text-success text-bg-light text-center py-3"><?= $producto['nombre']; ?></h5>
                    <img src="img/<?= $producto['imagen']; ?>" class="card-img d-block" alt="">


                </div>
            </div>
        </div>
        </div>
    <?php } ?>

    <!-- <div class="row mt-3 mx-auto">
        <div class="col-2">
            <a href="#" class="text-decoration-none">
                <div class="border border-light border-2">
                    <div class="card-body text-bg-dark">
                        <h4 class="card-title fw-bold text-success text-bg-light text-center py-3">GROGU Alias BabyYoda.</h4>
                        <img src="img/grogu_sin_fondo.png" class="card-img  d-block" alt="...">
                    </div>
                </div>
            </a>
        </div> -->



</main>

<?php require "partials/footer.php"  ?>