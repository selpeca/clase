<?php
require_once 'conexion.php';
session_start();

$sql = "DELETE FROM jugadores WHERE id = " . $_GET['id'];
$result = $db->query($sql);
$db->close();
if($result) {
    $_SESSION['flash_message'] = "Jugador eliminado";
}else{
    $_SESSION['flash_message'] = "Error al eliminar jugador";

}
header('LOCATION: selecciones.php');