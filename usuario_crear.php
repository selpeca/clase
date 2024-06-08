<?php
require_once('header.php');
if (isset($_POST['accion'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username,password) values ('$username',MD5('$password'));";
    $result = $db->query($sql);
    $db->close();
    if($result) {
        $_SESSION['flash_message'] = "Usuario creado";
    }else{
        $_SESSION['flash_message'] = "Error al crear usuario";
    
    }
    header('LOCATION: usuarios.php');
}
?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4">Nuevo usuario</h1>
        <a href="usuarios.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Atras</a>
    </div>
</div>
<div class="row mt-4">
    <form method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <input type="hidden" name="accion" value="1">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php
require_once('footer.php');
?>