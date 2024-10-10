<?php

require_once "utils/funciones.php";
require_once "utils/db_connections.php";

//Capturamos la tabla que viene por gEt

$tabla = $_GET['categoria'] ?? false;

$tablas = [
    'peliculas' => 'peliculas_star',


];

//comprobar si existe elarray

if (!array_key_exists($tabla, $tablas)) {
    header('Location: error404.php');
}



$peliculas_one = peliculas_one($conn);

$peliculas_two = peliculas_two($conn);

$peliculas_three = peliculas_three($conn);
/* 
echo "<pre>";
var_dump($categorias);
echo "</pre>"; */

?>

<?php require "partials/header.php" ?>


<main class="container background-color1">

    <div class="row">
        <div class="col d-flex justify-content-between gap-4 m-2">
            <?php foreach ($peliculas_one as $producto) { ?>
                <img width="250px" height="350px" src="img/peliculas/<?= $producto['imagen']; ?>" alt="...">
            <?php } ?>
            <p class="text text-white fs-6">ORDEN CRONOLÓGICO:<br>Episodio I - La amenaza fantasma. (1999)<br>Episodio II - El ataque de los clones. (2002)<br>Episodio III - La venganza de los sith. (2005)<br>La guerra de las galaxias. (1977)<br>El imperio contraataca. (1980)<br>El retorno del Jedi. (1983)<br>Star Wars: El despertar de la Fuera. (2015)<br>Star Wars: Los últimos Jedi. (2017)<br>Star Wars: El ascenso de Skywalkre. (2019)
            </p>

        </div>
    </div>


    <div class="row">
        <div class="col d-flex justify-content gap-4 m-2">
            <?php foreach ($peliculas_two  as $producto) { ?>
                <img width="250px" height="350px" src="img/peliculas/<?= $producto['imagen']; ?>" alt="...">
            <?php } ?>

        </div>
    </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-between gap-4 m-2">
            <?php foreach ($peliculas_three  as $producto) { ?>
                <img width="250px" height="350px" src="img/peliculas/<?= $producto['imagen']; ?>" alt="...">
            <?php } ?>
            <p class="text-white">ORDEN DE ESTRENO:<br>La guerra de las galaxias. (1977)<br>El imperio contraataca. (1980)<br>El retorno del Jedi. (1983)<br>Episodio I - La amenaza fantasma. (1999)<br>Episodio II - El ataque de los clones. (2002)<br>Episodio III -La venganza de los sith. (2005)<br>Star Wars: El despertara de la Fuerzza. (2015)<br>Star Wars II: Los últimos Jedi. (2017)<br>Stara Wars: El ascenso de Skywalker. (2019)</p>
        </div>
    </div>

    <div class="row">
        <div class="d-grid d-md-flex justify-content-md-end">
            <a class="btn btn-secondary rounded rounded-5 border border-light border-2 btn-sm nav-hover" type="button" href="index.php" role="button">ATRÁS</a>

        </div>


    </div>


</main>



<?php require "partials/footer.php"  ?>