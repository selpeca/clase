<?php
require_once('header.php');
$id = $_GET['id'];
$sql = "SELECT jugadores.*,
                selecciones.nombre seleccion
        FROM 
            jugadores 
            INNER JOIN selecciones ON (jugadores.pais_id = selecciones.id)
        WHERE jugadores.id = $id";
$jugador = $db->query($sql)->fetch_assoc();
?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4"><?= $jugador['nombre'] ?></h1>
        <a href="jugadores.php?id=<?= $jugador['pais_id'] ?>" class="btn btn-success"><i class="fas fa-undo"></i> Atrás</a>
    </div>
</div>
<div class="row mt-4">
    <table class="table">
        <tr>
            <th>Selección</th>
            <td><?= $jugador['seleccion'] ?></td>
        </tr>
        <tr>
            <th>Posición</th>
            <td><?= $jugador['puesto'] ?></td>
        </tr>
        <tr>
            <th>Equipo</th>
            <td><?= $jugador['equipo'] ?> (<?= $jugador['pais_club'] ?>)</td>
        </tr>
    </table>
</div>
<?php
require_once('footer.php');
?>