<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musimundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TUDAI-WEB2</a>
    <?php if ($this->usuario): ?>
    <span style="color: red;"><?= $this->usuario->nombre ?></span>
<?php else: ?>
    <span style="color: red;">Anonimo</span>
<?php endif; ?>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>marcas">Marcas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>productos">Productos</a>
        </li>
        <li class="nav-item">
          <?php if ($this->usuario):?>
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>logout">Cerrar Sesion</a>
          <?php else: ?>
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>mostrarlogin">Iniciar Sesion</a>
        <?php endif; ?>
        

        </li>
      </ul>
    </div>
  </div>
    </nav>
    </header>

</body>
</html>