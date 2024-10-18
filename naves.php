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
            <div class="col-3 text-center">
                <img height="200px" width="300px" src="img/naves/<?= $producto['imagen']; ?>" class="d-block w-100 text-center rounded" alt="...">
                <a class="btn fw-bold text-success text-center m-1 p-1 border btn-dark border-1 border-light m-3"  type="button" href="nave_solo.php?categorias=<?=$tabla?>&id=<?=$producto['id']?>" role="button"><?= $producto['nombre']; ?></a>> <?= $producto['nombre']; ?></a>            
            </div>
        <?php } ?>



        <div class="row">
        <div class="d-grid d-md-flex justify-content-md-end">
            <a class="btn boton btn-secondary rounded rounded-5 border border-light border-1 btn-sm mt-2" type="button" href="index.php" role="button">ATRÁS</a>
        </div>
    </div>

</main>



<?php require "partials/footer.php"  ?>