<?php


require_once "utils/funciones.php";
require_once "utils/db_connections.php";


//Capturar el termino busqueda

$termino_busqueda = $_GET['q'] ?? '';

$productos = [];
if ($termino_busqueda) {
    // si hay termino busqueda, llamamos a la funcion a buscar_producto
    $productos = buscar_productos($conn, $termino_busqueda);
}

?>

<?php

require "partials/header.php"

?>


<main class="container vh-100 background-color1">
    <h1 class="text-center">Resultados de la búsqueda</h1>
    <?php if ($termino_busqueda && !empty($productos)) { ?>
        <div class='row'>
            <?php foreach ($productos as $producto) { ?>

                <div class="col-4 mt-2 mb-2">
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                            <img src="img/<?= $producto['tabla'] ?>/<?= $producto['imagen'] ?>" class="card-img" alt="">
                            <p><?= substr($producto['descripcion'] ,0,80 )?>...</p>

                           <?php if($producto['tabla'] == 'peliculas'  ) {?>

                           <a href="" hidden></a>

                           <?php }else { ?>
                            <a href="<?= rtrim($producto['tabla'], 's') ?>_solo.php?categorias=<?= $producto['tabla'] ?>&id=<?= $producto['id'] ?>" class="btn btn-primary">Ver</a>
                            
                            <?php  } ?>

                            
                           
                        </div>
                    </div>
                </div>


            <?php } ?>

        </div>

    <?php } elseif ($termino_busqueda) { ?>
        <p class="text-center text-warning fs-3">No se encontraron productos para el término de búsqueda: <?= $termino_busqueda ?> </p>
    <?php } else { ?>
        <p class="text-center text-danger fs-3">El campo de búsqueda no puede estar vacio.</p>

    <?php } ?>
</main>

<?php

require "partials/footer.php"

?>