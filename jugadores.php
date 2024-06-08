<?php
require_once('header.php');
$pais_id = $_GET['id'];
$sql = "SELECT * FROM jugadores WHERE pais_id = $pais_id;";
$jugadores = $db->query($sql);
?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4">Listar jugadores</h1>
        <a href="jugadores_crear.php" class="btn btn-success"><i class="fas fa-add"></i> Nuevo</a>
    </div>
</div>
<div class="row mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Club</th>
                <th scope="col">Pais club</th>
                <th scope="col">Posición</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($jugadores as $jugador) {
                    echo "<tr>";
                    echo "<td>". $jugador['id'] . "</td>";
                    echo "<td>". $jugador['nombre'] . "</td>";
                    echo "<td>". $jugador['equipo'] . "</td>";
                    echo "<td>". $jugador['pais_club'] . "</td>";
                    echo "<td>". $jugador['puesto'] . "</td>";
                    echo "<td><a href='#?id=".  $jugador['id'] ."' class='btn btn-secondary'>Editar</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<?php
require_once('footer.php');
?>