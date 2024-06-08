<?php
require_once('header.php');
$sql = "SELECT * FROM users WHERE is_active = 1";
$usuarios = $db->query($sql);
?>
<div class="row">
    <div class="col-12">
        <h1 class="mt-4">Listar usuarios</h1>
        <a href="usuario_crear.php" class="btn btn-success"><i class="fas fa-add"></i> Nuevo</a>
    </div>
</div>
<div class="row mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td>". $usuario['id'] . "</td>";
                    echo "<td>". $usuario['username'] . "</td>";
                    echo "<td><a href='usuarios/inactivar_usuario.php?id=".  $usuario['id'] ."' class='btn btn-secondary'>Inactivar</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<?php
require_once('footer.php');
?>