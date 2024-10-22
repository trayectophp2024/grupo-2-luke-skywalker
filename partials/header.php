<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Starjedi</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Estilos -->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/fuentes.css">

  <!-- FAVICON -->

   <link rel="shortcut icon" href="img/estrella_header.png" type="image/x-icon">
  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

  <header>

    <div class="header-superior container">
      <div class="row mt-3 d-flex justify-content-around ">
        <div class="col-2">
          <a href="index.php"><img width="200px" src="img/estrella_header.png" alt="">
        </div></a>
        <div class="col-8">
          <h1>el universo de star wars</h1>
          <form action="busqueda.php" method="get">
            <div class="input-group">
              <span class="input-group-text search-span"><i class="fas fa-search"></i></span>
              <input class="form-control search-input" type="search" name="q" id="" placeholder="Buscar lo que quieres saber tu debes.">
              
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="header-inferior container">
      <nav class="nav d-flex justify-content-evenly">
        <div class="nav-item text-center mx-2">
          <a class="nav-link  d-flex flex-column nav-hover" href="peliculas.php?categoria=peliculas">
            Películas
            <img class="p-0 sable" width="120px" src="img/sable-1.webp" alt="Sable Películas">
          </a>

        </div>
        <div class="nav-item text-center mx-2">
          <a class="nav-link d-flex flex-column nav-hover " href="personajes.php?categoria=personajes">
            Personajes
            <img class="p-0 sable" width="120px" src="img/sable-1.webp" alt="Sable Películas">
          </a>

        </div>
        <div class="nav-item text-center mx-2">
          <a class="nav-link  d-flex flex-column nav-hover" href="naves.php?categoria=naves">
            Naves
            <img class="p-0 sable" width="120px" src="img/sable-1.webp" alt="Sable Películas">
          </a>
        </div>
        <div class="nav-item text-center mx-2">
          <a class="nav-link d-flex flex-column nav-hover" href="sables.php?categoria=sables">
            Sables
            <img class="p-0 sable" width="120px" src="img/sable-1.webp" alt="Sable Películas">
          </a>
        </div>
        <div class="nav-item text-center mx-2">
          <a class="nav-link   d-flex flex-column nav-hover" href="creditos.php">
            Créditos
            <img class="p-0 sable" width="120px" src="img/sable-1.webp" alt="Sable Películas">
          </a>
        </div>
      </nav>
    </div>

  </header>