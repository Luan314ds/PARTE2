<?php require 'templates/header.php'?>

<?php if ($error): ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
<?php endif ?>

<form method="post" action="login">
    <div class="form-group">
        <label for="nombre">Usuario</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" id="contraseña" name="contraseña" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

<?php require 'templates/footer.php'?>