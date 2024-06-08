<?php

$db = new mysqli('localhost', 'root', '', 'clase_db');
if ($db->connect_error) {
	die('Error de conexión con la base de datos: '  . $db->connect_error);
}
