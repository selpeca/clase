<?php
require_once('header.php');
$sql = "SELECT id, nombre FROM selecciones;";
$selecciones = $db->query($sql);
if (isset($_POST['accion'])){
    $nombre = $_POST['nombre'];
    $equipo = $_POST['equipo'];
    $pais_club = $_POST['pais_club'];
    $puesto = $_POST['puesto'];
    $pais_id = $_POST['pais_id'];


    $sql = "INSERT INTO jugadores (nombre, equipo, pais_club, puesto, pais_id) 
            values (
                '$nombre',
                '$equipo',
                '$pais_club',
                '$puesto',
                $pais_id
            );";
    $result = $db->query($sql);
    $db->close();
    if($result) {
        $_SESSION['flash_message'] = "Registro creado";
    }else{
        $_SESSION['flash_message'] = "Error al crear registro";
    
    }
    header('LOCATION: selecciones.php');
}
?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4">Nuevo jugador</h1>
        <a href="jugadores.php" class="btn btn-secondary"><i class="fas fa-undo"></i> Atras</a>
    </div>
</div>
<div class="row mt-4">
    <form method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="equipo" class="form-label">Equipo</label>
            <input type="text" class="form-control" id="equipo" name="equipo" required>
        </div>
        <div class="mb-3">
            <label for="pais_club" class="form-label">Pais club</label>
            <input type="text" class="form-control" id="pais_club" name="pais_club" required>
        </div>
        <div class="mb-3">
            <label for="puesto" class="form-label">Posición</label>
            <select class="form-control" id="puesto" name="puesto">
                <option value="Portero">Portero</option>
                <option value="Defensa">Defensa</option>
                <option value="Mediocampista">Mediocampista</option>
                <option value="Delantero">Delantero</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pais_id" class="form-label">Selección</label>
            <select class="form-control" id="pais_id" name="pais_id">
                <?php
                    foreach ($selecciones as $seleccion) {
                        echo '<option value="'. $seleccion['id'] .'">'. $seleccion['nombre'] .'</option>';
                    }
                ?>
            </select>
        </div>
        <input type="hidden" name="accion" value="1">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="jugadores.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php
require_once('footer.php');
?>