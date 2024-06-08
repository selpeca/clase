<?php
require_once('header.php');
$id = $_GET['id'];
$sql = "SELECT * FROM selecciones WHERE id = $id";
$seleccion = $db->query($sql)->fetch_assoc();

?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4">Editar selección: <?= $seleccion['nombre'] ?></h1>
        <a href="selecciones.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Regresar</a>
    </div>
</div>
<div class="row mt-4">
    <form method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input 
                type="text" 
                class="form-control" 
                id="nombre" 
                name="nombre" 
                value="<?=  $seleccion['nombre'] ?>"
                required
            >
        </div>
        <input type="hidden" name="accion" value="1">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php
require_once('footer.php');
?>