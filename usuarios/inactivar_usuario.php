<?php
require_once '../conexion.php';
session_start();

$sql = "UPDATE users SET is_active = 0 WHERE id = " . $_GET['id'];
$result = $db->query($sql);
$db->close();
if($result) {
    $_SESSION['flash_message'] = "Usuario inactivado";
}else{
    $_SESSION['flash_message'] = "Error al inactivar usuario";

}
header('LOCATION: ../usuarios.php');