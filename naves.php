<?php

require_once "utils/funciones.php";
require_once "utils/db_connections.php";

//Capturamos la tabla que viene por gEt

$tabla = $_GET['categoria'] ?? false;

$tablas = [
    'naves' => 'naves_star',


];

//comprobar si existe elarray

if (!array_key_exists($tabla, $tablas)) {
    header('Location: error404.php');
}



$naves = listar_todos($conn, $tabla);

/* 
echo "<pre>";
var_dump($categorias);
echo "</pre>"; */

?>

<?php require "partials/header.php" ?>


<main class="container background-color1">

    <div class="row">
        <?php foreach ($naves as $producto) { ?>
            <div class="col-3">
                <img height="200px" width="300px" src="img/naves/<?= $producto['imagen']; ?>" class="d-block w-100" alt="...">
                <p class="fw-bold text-center text-success m-1 p-1 border border-1 border-light"><?= $producto['nombre']; ?></p>
            </div>

        <?php } ?>

        <div class="row">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-secondary rounded rounded-5 border border-light border-2 btn-sm nav-hover" type="button" href="index.php" role="button">ATRÁS</a>
        
</div>


        </div>
</main>



<?php require "partials/footer.php"  ?>