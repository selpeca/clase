<?php
require_once('header.php');
$sqlA = "SELECT * FROM selecciones WHERE grupo = 'A';";
$sqlB = "SELECT * FROM selecciones WHERE grupo = 'B';";
$sqlC = "SELECT * FROM selecciones WHERE grupo = 'C';";
$sqlD = "SELECT * FROM selecciones WHERE grupo = 'D';";
$grupoA = $db->query($sqlA);
$grupoB = $db->query($sqlB);
$grupoC = $db->query($sqlC);
$grupoD = $db->query($sqlD);
?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4">Listar selecciones</h1>
    </div>
</div>
<div class="row mt-4">
<h3>Grupo A</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($grupoA as $equipo) {
                echo "<tr>";
                echo "<td>". $equipo['id'] . "</td>";
                echo "<td>". $equipo['nombre'] . "</td>";
                echo "<td>
                    <a href='selecciones_editar.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Editar</a>
                    <a href='jugadores.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Ver jugadores</a>
                </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<hr>
<h3>Grupo B</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($grupoB as $equipo) {
                echo "<tr>";
                echo "<td>". $equipo['id'] . "</td>";
                echo "<td>". $equipo['nombre'] . "</td>";
                echo "<td>
                    <a href='selecciones_editar.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Editar</a>
                    <a href='jugadores.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Ver jugadores</a>
                </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<hr>
<h3>Grupo C</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($grupoC as $equipo) {
                echo "<tr>";
                echo "<td>". $equipo['id'] . "</td>";
                echo "<td>". $equipo['nombre'] . "</td>";
                echo "<td>
                    <a href='selecciones_editar.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Editar</a>
                    <a href='jugadores.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Ver jugadores</a>
                </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<hr>
<h3>Grupo D</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($grupoD as $equipo) {
                echo "<tr>";
                echo "<td>". $equipo['id'] . "</td>";
                echo "<td>". $equipo['nombre'] . "</td>";
                echo "<td>
                    <a href='selecciones_editar.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Editar</a>
                    <a href='jugadores.php?id=".  $equipo['id'] ."' class='btn btn-secondary'>Ver jugadores</a>
                </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
</div>
<?php
require_once('footer.php');
?>