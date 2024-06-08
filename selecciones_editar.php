<?php
require_once('header.php');
$id = $_GET['id'];
$sql = "SELECT * FROM selecciones WHERE id = $id";
$seleccion = $db->query($sql)->fetch_assoc();
if (isset($_POST['accion'])){
    $nombre = $_POST['nombre'];
    $grupo = $_POST['grupo'];
    $url_bandera = $_POST['url_bandera'];
    $id = $_POST['id'];

    $sql = "UPDATE selecciones 
            SET
                nombre = '$nombre', 
                grupo = '$grupo', 
                url_bandera='$url_bandera'
            WHERE id = $id;";
    $result = $db->query($sql);
    $db->close();
    if($result) {
        $_SESSION['flash_message'] = "Selección actualizada";
    }else{
        $_SESSION['flash_message'] = "Error al acutualizar seleccion";
    
    }
    header('LOCATION: selecciones.php');
}
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
        <div class="mb-3">
            <label for="grupo" class="form-label">Grupo</label>
            <select name="grupo" id="grupo" class="form-control" required>
                <option value="A" <?php echo $seleccion['grupo'] == 'A'?'selected':''; ?>>A</option>
                <option value="B" <?php echo $seleccion['grupo'] == 'B'?'selected':''; ?>>B</option>
                <option value="C" <?= $seleccion['grupo'] == 'C'?'selected':''; ?>>C</option>
                <option value="D" <?= $seleccion['grupo'] == 'D'?'selected':''; ?>>D</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="url_bandera" class="form-label">Bandera</label>
            <textarea name="url_bandera" id="url_bandera" class="form-control"><?=  $seleccion['url_bandera'] ?></textarea>
        </div>

        <input type="hidden" name="accion" value="1">
        <input type="hidden" name="id" value="<?= $seleccion['id'] ?>">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="selecciones.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php
require_once('footer.php');
?>